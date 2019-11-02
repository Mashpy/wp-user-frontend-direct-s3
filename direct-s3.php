<?php
/**
 * Plugin Name: Wp User Frontend Direct s3
 * Plugin URI: http://www.mashpy.me
 * Description: This plugin will work if you upload products on download files option. Plugin will send media files to s3
 * Version: 1.0
 * Author: Mashpy Rahman
 * Author URI: http://www.mashpy.me
 */


add_action('wp_ajax_after_direct_s3_upload', 'after_direct_s3_upload' );
add_action('wp_ajax_nopriv_after_direct_s3_upload', 'after_direct_s3_upload' );

function after_direct_s3_upload(){
    $amazon_url = $_POST['amazon_url'];
    $filename = $_POST['filename'];
    global $user_ID;
    $new_post = array(
        'post_title' => $filename,
        'post_content' => '',
        'post_status' => 'inherit',
        'post_date' => date('Y-m-d H:i:s'),
        'post_author' => $user_ID,
        'post_type' => 'attachment',
    );
    $post_id = wp_insert_post($new_post);
    global $wpdb;
    $wp_prefix = $wpdb->prefix . 'posts';
    $wpdb->get_results("UPDATE $wp_prefix SET guid ='". $amazon_url."' WHERE ID = $post_id");
    echo json_encode($post_id);
    die();
}

function getS3Details() {
    // Options and Settings
    $awsKey = (!empty(getenv('DIRECT_AWS_ACCESS_KEY')) ? getenv('DIRECT_AWS_ACCESS_KEY') : DIRECT_AWS_ACCESS_KEY);
    $awsSecret = (!empty(getenv('DIRECT_AWS_SECRET')) ? getenv('DIRECT_AWS_SECRET') : DIRECT_AWS_SECRET);
    $s3Bucket = (!empty(getenv('DIRECT_AWS_BUCKET')) ? getenv('DIRECT_AWS_BUCKET') : DIRECT_AWS_BUCKET);
    $region = (!empty(getenv('DIRECT_AWS_REGION')) ? getenv('DIRECT_AWS_REGION') : DIRECT_AWS_REGION);
    $acl = 'public-read';
    $algorithm = "AWS4-HMAC-SHA256";
    $service = "s3";
    $date = gmdate("Ymd\THis\Z");
    $shortDate = gmdate("Ymd");
    $requestType = "aws4_request";
    $expires = "86400"; // 24 Hours
    $successStatus = "201";
    $url = "//{$s3Bucket}.{$service}-{$region}.amazonaws.com";
    // Step 1: Generate the Scope
    $scope = [
        $awsKey,
        $shortDate,
        $region,
        $service,
        $requestType
    ];
    $credentials = implode('/', $scope);
    // Step 2: Making a Base64 Policy
    $policy = [
        'expiration' => gmdate('Y-m-d\TG:i:s\Z', strtotime('+6 hours')),
        'conditions' => [
            ['bucket' => $s3Bucket],
            ['acl' => $acl],
            ['starts-with', '$key', ''],
            ['starts-with', '$Content-Type', ''],
            ['starts-with', '$Content-Length', ''],
            ['success_action_status' => $successStatus],
            ['x-amz-credential' => $credentials],
            ['x-amz-algorithm' => $algorithm],
            ['x-amz-date' => $date],
            ['x-amz-expires' => $expires],
        ]
    ];
    $base64Policy = base64_encode(json_encode($policy));
    // Step 3: Signing your Request (Making a Signature)
    $dateKey = hash_hmac('sha256', $shortDate, 'AWS4' . $awsSecret, true);
    $dateRegionKey = hash_hmac('sha256', $region, $dateKey, true);
    $dateRegionServiceKey = hash_hmac('sha256', $service, $dateRegionKey, true);
    $signingKey = hash_hmac('sha256', $requestType, $dateRegionServiceKey, true);
    $signature = hash_hmac('sha256', $base64Policy, $signingKey);
    // Step 4: Build form inputs
    // This is the data that will get sent with the form to S3
    $inputs = [
        'Content-Type' => '',
        'Content-Length' => '',
        'acl' => $acl,
        'success_action_status' => $successStatus,
        'policy' => $base64Policy,
        'X-amz-credential' => $credentials,
        'X-amz-algorithm' => $algorithm,
        'X-amz-date' => $date,
        'X-amz-expires' => $expires,
        'X-amz-signature' => $signature
    ];
    return compact('url', 'inputs');
}

function direct_s3_upload_scripts(){
    $s3FormDetails = getS3Details();
    ?>

    <script>
        if ( jQuery(".remove-direct-upload").length ){
            jQuery('.download-file-div').hide();
        }

        jQuery('.count-progress-bar').hide();
        jQuery('#download_files').val('');
        jQuery('#download_files').change(function(e){
            jQuery('.upload-success').text('');
            jQuery('.count-progress-bar').show('slow');
            var file_data = jQuery("#download_files").prop("files")[0];
            var form_data = new FormData();
            var filename = e.target.files[0].name.replace(/ /g,"_");
            <?php
            foreach ($s3FormDetails['inputs'] as $name => $value) { ?>
            form_data.append("<?php echo $name ?>", "<?php echo $value ?>");
            <?php } ?>
            var key_path = 'uploads/download_files/' + filename;
            form_data.append("key", key_path);
            form_data.append("file", file_data);
            jQuery.ajax({
                url: "<?php echo $s3FormDetails['url'] ?>", // Upload Script
                method:"POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                success: function( data) {
                    jQuery('#download_files').val('');
                },
                complete: function(data){
                    parser = new DOMParser();
                    xmlDoc = parser.parseFromString(data.responseText,"text/xml");
                    var amazon_url = xmlDoc.getElementsByTagName("Location")[0].childNodes[0].nodeValue;
                    var media_data = {
                        action: 'after_direct_s3_upload',
                        amazon_url: amazon_url,
                        filename: filename
                    };
                    jQuery.post(ajaxurl, media_data, function(media_post_id) {
                        jQuery('<input>', {
                            type: 'hidden',
                            name: 'wpuf_files[_woo_files][]',
                            id: 'wpuf_files_input_' + media_post_id,
                            value: media_post_id
                        }).appendTo('.wpuf-form-add');

                        jQuery('.count-progress-bar').hide();
                        jQuery('.upload-success').text(' Uploaded successfully.');
                        jQuery('.download-file-div').hide('slow');
                        jQuery('.upload-success').after('<div> * ' + filename + '<a href="#" class="remove-direct-upload" data-key-path="'+ key_path +'" data-media="'+ media_post_id +'"> remove</a></div>');

                    });
                },
                xhr: function() {
                    var xhr = new window.XMLHttpRequest();
                    xhr.upload.addEventListener("progress", function(evt) {
                        if (evt.lengthComputable) {
                            var percentComplete = evt.loaded / evt.total;
                            percentComplete = parseInt(percentComplete * 100);
                            jQuery('.count-progress-bar').show().text('Uploading... ' + percentComplete + '%');
                        }
                    }, false);
                    return xhr;
                }
            });
        });

        jQuery(document).on("click",".remove-direct-upload",function(e) {
            e.preventDefault();
            var media_post_id = jQuery(this).data('media');
            var key_path = jQuery(this).data('key-path');
            var remove_direct_upload_li = this;

            var media_data = {
                action: 'delete_file_s3',
                key_path: key_path,
                media_post_id: media_post_id
            };

            jQuery('.upload-success').text('Deleting...').css("color","red");

            jQuery.post(ajaxurl, media_data, function() {
                jQuery('#wpuf_files_input_' + media_post_id).remove();
                jQuery(remove_direct_upload_li).parent('div').remove();
                jQuery('.download-file-div').show('slow');
                jQuery('.upload-success').text('Deleted. Upload New file.').css("color","inherit");
            });
        });
    </script>

<?php }


add_action('wp_ajax_delete_file_s3', 'delete_file_s3' );
add_action('wp_ajax_nopriv_delete_file_s3', 'delete_file_s3' );

// require the AWS SDK for PHP library
require 'aws/aws-autoloader.php';

use Aws\S3\S3Client;

function delete_file_s3(){

    $key_path = $_POST['key_path'];
    $media_post_id = $_POST['media_post_id'];

// Establish connection with DreamObjects with an S3 client.
    $client = new Aws\S3\S3Client([
        'version'     => '2006-03-01',
        'region'      => DIRECT_AWS_REGION,
        'credentials' => [
            'key'      => DIRECT_AWS_ACCESS_KEY,
            'secret'   => DIRECT_AWS_SECRET,
        ]
    ]);

    $response = $client->deleteObject(array(
        'Bucket' => DIRECT_AWS_BUCKET,
        'Key'    => $key_path,
    ));

    wp_delete_post($media_post_id, true);
}
