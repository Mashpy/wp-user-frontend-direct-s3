<?php
namespace Aws;

/**
 * Builds AWS clients based on configuration settings.
 *
 * @method \Aws\ACMPCA\ACMPCAClient createACMPCA(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionACMPCA(array $args = [])
 * @method \Aws\Acm\AcmClient createAcm(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAcm(array $args = [])
 * @method \Aws\AlexaForBusiness\AlexaForBusinessClient createAlexaForBusiness(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAlexaForBusiness(array $args = [])
 * @method \Aws\Amplify\AmplifyClient createAmplify(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAmplify(array $args = [])
 * @method \Aws\ApiGateway\ApiGatewayClient createApiGateway(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionApiGateway(array $args = [])
 * @method \Aws\ApiGatewayManagementApi\ApiGatewayManagementApiClient createApiGatewayManagementApi(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionApiGatewayManagementApi(array $args = [])
 * @method \Aws\ApiGatewayV2\ApiGatewayV2Client createApiGatewayV2(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionApiGatewayV2(array $args = [])
 * @method \Aws\AppMesh\AppMeshClient createAppMesh(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAppMesh(array $args = [])
 * @method \Aws\AppSync\AppSyncClient createAppSync(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAppSync(array $args = [])
 * @method \Aws\ApplicationAutoScaling\ApplicationAutoScalingClient createApplicationAutoScaling(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionApplicationAutoScaling(array $args = [])
 * @method \Aws\ApplicationDiscoveryService\ApplicationDiscoveryServiceClient createApplicationDiscoveryService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionApplicationDiscoveryService(array $args = [])
 * @method \Aws\ApplicationInsights\ApplicationInsightsClient createApplicationInsights(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionApplicationInsights(array $args = [])
 * @method \Aws\Appstream\AppstreamClient createAppstream(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAppstream(array $args = [])
 * @method \Aws\Athena\AthenaClient createAthena(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAthena(array $args = [])
 * @method \Aws\AutoScaling\AutoScalingClient createAutoScaling(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAutoScaling(array $args = [])
 * @method \Aws\AutoScalingPlans\AutoScalingPlansClient createAutoScalingPlans(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionAutoScalingPlans(array $args = [])
 * @method \Aws\Backup\BackupClient createBackup(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionBackup(array $args = [])
 * @method \Aws\Batch\BatchClient createBatch(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionBatch(array $args = [])
 * @method \Aws\Budgets\BudgetsClient createBudgets(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionBudgets(array $args = [])
 * @method \Aws\Chime\ChimeClient createChime(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionChime(array $args = [])
 * @method \Aws\Cloud9\Cloud9Client createCloud9(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloud9(array $args = [])
 * @method \Aws\CloudDirectory\CloudDirectoryClient createCloudDirectory(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudDirectory(array $args = [])
 * @method \Aws\CloudFormation\CloudFormationClient createCloudFormation(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudFormation(array $args = [])
 * @method \Aws\CloudFront\CloudFrontClient createCloudFront(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudFront(array $args = [])
 * @method \Aws\CloudHSMV2\CloudHSMV2Client createCloudHSMV2(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudHSMV2(array $args = [])
 * @method \Aws\CloudHsm\CloudHsmClient createCloudHsm(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudHsm(array $args = [])
 * @method \Aws\CloudSearch\CloudSearchClient createCloudSearch(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudSearch(array $args = [])
 * @method \Aws\CloudSearchDomain\CloudSearchDomainClient createCloudSearchDomain(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudSearchDomain(array $args = [])
 * @method \Aws\CloudTrail\CloudTrailClient createCloudTrail(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudTrail(array $args = [])
 * @method \Aws\CloudWatch\CloudWatchClient createCloudWatch(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudWatch(array $args = [])
 * @method \Aws\CloudWatchEvents\CloudWatchEventsClient createCloudWatchEvents(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudWatchEvents(array $args = [])
 * @method \Aws\CloudWatchLogs\CloudWatchLogsClient createCloudWatchLogs(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCloudWatchLogs(array $args = [])
 * @method \Aws\CodeBuild\CodeBuildClient createCodeBuild(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCodeBuild(array $args = [])
 * @method \Aws\CodeCommit\CodeCommitClient createCodeCommit(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCodeCommit(array $args = [])
 * @method \Aws\CodeDeploy\CodeDeployClient createCodeDeploy(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCodeDeploy(array $args = [])
 * @method \Aws\CodePipeline\CodePipelineClient createCodePipeline(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCodePipeline(array $args = [])
 * @method \Aws\CodeStar\CodeStarClient createCodeStar(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCodeStar(array $args = [])
 * @method \Aws\CognitoIdentity\CognitoIdentityClient createCognitoIdentity(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCognitoIdentity(array $args = [])
 * @method \Aws\CognitoIdentityProvider\CognitoIdentityProviderClient createCognitoIdentityProvider(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCognitoIdentityProvider(array $args = [])
 * @method \Aws\CognitoSync\CognitoSyncClient createCognitoSync(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCognitoSync(array $args = [])
 * @method \Aws\Comprehend\ComprehendClient createComprehend(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionComprehend(array $args = [])
 * @method \Aws\ComprehendMedical\ComprehendMedicalClient createComprehendMedical(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionComprehendMedical(array $args = [])
 * @method \Aws\ConfigService\ConfigServiceClient createConfigService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionConfigService(array $args = [])
 * @method \Aws\Connect\ConnectClient createConnect(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionConnect(array $args = [])
 * @method \Aws\CostExplorer\CostExplorerClient createCostExplorer(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCostExplorer(array $args = [])
 * @method \Aws\CostandUsageReportService\CostandUsageReportServiceClient createCostandUsageReportService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionCostandUsageReportService(array $args = [])
 * @method \Aws\DAX\DAXClient createDAX(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDAX(array $args = [])
 * @method \Aws\DLM\DLMClient createDLM(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDLM(array $args = [])
 * @method \Aws\DataPipeline\DataPipelineClient createDataPipeline(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDataPipeline(array $args = [])
 * @method \Aws\DataSync\DataSyncClient createDataSync(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDataSync(array $args = [])
 * @method \Aws\DatabaseMigrationService\DatabaseMigrationServiceClient createDatabaseMigrationService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDatabaseMigrationService(array $args = [])
 * @method \Aws\DeviceFarm\DeviceFarmClient createDeviceFarm(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDeviceFarm(array $args = [])
 * @method \Aws\DirectConnect\DirectConnectClient createDirectConnect(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDirectConnect(array $args = [])
 * @method \Aws\DirectoryService\DirectoryServiceClient createDirectoryService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDirectoryService(array $args = [])
 * @method \Aws\DocDB\DocDBClient createDocDB(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDocDB(array $args = [])
 * @method \Aws\DynamoDb\DynamoDbClient createDynamoDb(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDynamoDb(array $args = [])
 * @method \Aws\DynamoDbStreams\DynamoDbStreamsClient createDynamoDbStreams(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionDynamoDbStreams(array $args = [])
 * @method \Aws\EC2InstanceConnect\EC2InstanceConnectClient createEC2InstanceConnect(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEC2InstanceConnect(array $args = [])
 * @method \Aws\EKS\EKSClient createEKS(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEKS(array $args = [])
 * @method \Aws\Ec2\Ec2Client createEc2(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEc2(array $args = [])
 * @method \Aws\Ecr\EcrClient createEcr(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEcr(array $args = [])
 * @method \Aws\Ecs\EcsClient createEcs(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEcs(array $args = [])
 * @method \Aws\Efs\EfsClient createEfs(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEfs(array $args = [])
 * @method \Aws\ElastiCache\ElastiCacheClient createElastiCache(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionElastiCache(array $args = [])
 * @method \Aws\ElasticBeanstalk\ElasticBeanstalkClient createElasticBeanstalk(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionElasticBeanstalk(array $args = [])
 * @method \Aws\ElasticLoadBalancing\ElasticLoadBalancingClient createElasticLoadBalancing(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionElasticLoadBalancing(array $args = [])
 * @method \Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client createElasticLoadBalancingV2(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionElasticLoadBalancingV2(array $args = [])
 * @method \Aws\ElasticTranscoder\ElasticTranscoderClient createElasticTranscoder(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionElasticTranscoder(array $args = [])
 * @method \Aws\ElasticsearchService\ElasticsearchServiceClient createElasticsearchService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionElasticsearchService(array $args = [])
 * @method \Aws\Emr\EmrClient createEmr(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEmr(array $args = [])
 * @method \Aws\EventBridge\EventBridgeClient createEventBridge(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionEventBridge(array $args = [])
 * @method \Aws\FMS\FMSClient createFMS(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionFMS(array $args = [])
 * @method \Aws\FSx\FSxClient createFSx(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionFSx(array $args = [])
 * @method \Aws\Firehose\FirehoseClient createFirehose(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionFirehose(array $args = [])
 * @method \Aws\ForecastQueryService\ForecastQueryServiceClient createForecastQueryService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionForecastQueryService(array $args = [])
 * @method \Aws\ForecastService\ForecastServiceClient createForecastService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionForecastService(array $args = [])
 * @method \Aws\GameLift\GameLiftClient createGameLift(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGameLift(array $args = [])
 * @method \Aws\Glacier\GlacierClient createGlacier(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGlacier(array $args = [])
 * @method \Aws\GlobalAccelerator\GlobalAcceleratorClient createGlobalAccelerator(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGlobalAccelerator(array $args = [])
 * @method \Aws\Glue\GlueClient createGlue(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGlue(array $args = [])
 * @method \Aws\Greengrass\GreengrassClient createGreengrass(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGreengrass(array $args = [])
 * @method \Aws\GroundStation\GroundStationClient createGroundStation(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGroundStation(array $args = [])
 * @method \Aws\GuardDuty\GuardDutyClient createGuardDuty(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionGuardDuty(array $args = [])
 * @method \Aws\Health\HealthClient createHealth(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionHealth(array $args = [])
 * @method \Aws\Iam\IamClient createIam(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIam(array $args = [])
 * @method \Aws\ImportExport\ImportExportClient createImportExport(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionImportExport(array $args = [])
 * @method \Aws\Inspector\InspectorClient createInspector(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionInspector(array $args = [])
 * @method \Aws\IoT1ClickDevicesService\IoT1ClickDevicesServiceClient createIoT1ClickDevicesService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoT1ClickDevicesService(array $args = [])
 * @method \Aws\IoT1ClickProjects\IoT1ClickProjectsClient createIoT1ClickProjects(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoT1ClickProjects(array $args = [])
 * @method \Aws\IoTAnalytics\IoTAnalyticsClient createIoTAnalytics(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoTAnalytics(array $args = [])
 * @method \Aws\IoTEvents\IoTEventsClient createIoTEvents(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoTEvents(array $args = [])
 * @method \Aws\IoTEventsData\IoTEventsDataClient createIoTEventsData(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoTEventsData(array $args = [])
 * @method \Aws\IoTJobsDataPlane\IoTJobsDataPlaneClient createIoTJobsDataPlane(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoTJobsDataPlane(array $args = [])
 * @method \Aws\IoTThingsGraph\IoTThingsGraphClient createIoTThingsGraph(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIoTThingsGraph(array $args = [])
 * @method \Aws\Iot\IotClient createIot(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIot(array $args = [])
 * @method \Aws\IotDataPlane\IotDataPlaneClient createIotDataPlane(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionIotDataPlane(array $args = [])
 * @method \Aws\Kafka\KafkaClient createKafka(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKafka(array $args = [])
 * @method \Aws\Kinesis\KinesisClient createKinesis(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKinesis(array $args = [])
 * @method \Aws\KinesisAnalytics\KinesisAnalyticsClient createKinesisAnalytics(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKinesisAnalytics(array $args = [])
 * @method \Aws\KinesisAnalyticsV2\KinesisAnalyticsV2Client createKinesisAnalyticsV2(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKinesisAnalyticsV2(array $args = [])
 * @method \Aws\KinesisVideo\KinesisVideoClient createKinesisVideo(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKinesisVideo(array $args = [])
 * @method \Aws\KinesisVideoArchivedMedia\KinesisVideoArchivedMediaClient createKinesisVideoArchivedMedia(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKinesisVideoArchivedMedia(array $args = [])
 * @method \Aws\KinesisVideoMedia\KinesisVideoMediaClient createKinesisVideoMedia(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKinesisVideoMedia(array $args = [])
 * @method \Aws\Kms\KmsClient createKms(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionKms(array $args = [])
 * @method \Aws\LakeFormation\LakeFormationClient createLakeFormation(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionLakeFormation(array $args = [])
 * @method \Aws\Lambda\LambdaClient createLambda(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionLambda(array $args = [])
 * @method \Aws\LexModelBuildingService\LexModelBuildingServiceClient createLexModelBuildingService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionLexModelBuildingService(array $args = [])
 * @method \Aws\LexRuntimeService\LexRuntimeServiceClient createLexRuntimeService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionLexRuntimeService(array $args = [])
 * @method \Aws\LicenseManager\LicenseManagerClient createLicenseManager(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionLicenseManager(array $args = [])
 * @method \Aws\Lightsail\LightsailClient createLightsail(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionLightsail(array $args = [])
 * @method \Aws\MQ\MQClient createMQ(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMQ(array $args = [])
 * @method \Aws\MTurk\MTurkClient createMTurk(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMTurk(array $args = [])
 * @method \Aws\MachineLearning\MachineLearningClient createMachineLearning(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMachineLearning(array $args = [])
 * @method \Aws\Macie\MacieClient createMacie(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMacie(array $args = [])
 * @method \Aws\ManagedBlockchain\ManagedBlockchainClient createManagedBlockchain(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionManagedBlockchain(array $args = [])
 * @method \Aws\MarketplaceCommerceAnalytics\MarketplaceCommerceAnalyticsClient createMarketplaceCommerceAnalytics(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMarketplaceCommerceAnalytics(array $args = [])
 * @method \Aws\MarketplaceEntitlementService\MarketplaceEntitlementServiceClient createMarketplaceEntitlementService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMarketplaceEntitlementService(array $args = [])
 * @method \Aws\MarketplaceMetering\MarketplaceMeteringClient createMarketplaceMetering(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMarketplaceMetering(array $args = [])
 * @method \Aws\MediaConnect\MediaConnectClient createMediaConnect(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaConnect(array $args = [])
 * @method \Aws\MediaConvert\MediaConvertClient createMediaConvert(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaConvert(array $args = [])
 * @method \Aws\MediaLive\MediaLiveClient createMediaLive(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaLive(array $args = [])
 * @method \Aws\MediaPackage\MediaPackageClient createMediaPackage(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaPackage(array $args = [])
 * @method \Aws\MediaPackageVod\MediaPackageVodClient createMediaPackageVod(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaPackageVod(array $args = [])
 * @method \Aws\MediaStore\MediaStoreClient createMediaStore(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaStore(array $args = [])
 * @method \Aws\MediaStoreData\MediaStoreDataClient createMediaStoreData(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaStoreData(array $args = [])
 * @method \Aws\MediaTailor\MediaTailorClient createMediaTailor(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMediaTailor(array $args = [])
 * @method \Aws\MigrationHub\MigrationHubClient createMigrationHub(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMigrationHub(array $args = [])
 * @method \Aws\Mobile\MobileClient createMobile(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionMobile(array $args = [])
 * @method \Aws\Neptune\NeptuneClient createNeptune(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionNeptune(array $args = [])
 * @method \Aws\OpsWorks\OpsWorksClient createOpsWorks(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionOpsWorks(array $args = [])
 * @method \Aws\OpsWorksCM\OpsWorksCMClient createOpsWorksCM(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionOpsWorksCM(array $args = [])
 * @method \Aws\Organizations\OrganizationsClient createOrganizations(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionOrganizations(array $args = [])
 * @method \Aws\PI\PIClient createPI(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPI(array $args = [])
 * @method \Aws\Personalize\PersonalizeClient createPersonalize(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPersonalize(array $args = [])
 * @method \Aws\PersonalizeEvents\PersonalizeEventsClient createPersonalizeEvents(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPersonalizeEvents(array $args = [])
 * @method \Aws\PersonalizeRuntime\PersonalizeRuntimeClient createPersonalizeRuntime(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPersonalizeRuntime(array $args = [])
 * @method \Aws\Pinpoint\PinpointClient createPinpoint(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPinpoint(array $args = [])
 * @method \Aws\PinpointEmail\PinpointEmailClient createPinpointEmail(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPinpointEmail(array $args = [])
 * @method \Aws\PinpointSMSVoice\PinpointSMSVoiceClient createPinpointSMSVoice(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPinpointSMSVoice(array $args = [])
 * @method \Aws\Polly\PollyClient createPolly(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPolly(array $args = [])
 * @method \Aws\Pricing\PricingClient createPricing(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionPricing(array $args = [])
 * @method \Aws\QLDB\QLDBClient createQLDB(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionQLDB(array $args = [])
 * @method \Aws\QLDBSession\QLDBSessionClient createQLDBSession(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionQLDBSession(array $args = [])
 * @method \Aws\QuickSight\QuickSightClient createQuickSight(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionQuickSight(array $args = [])
 * @method \Aws\RAM\RAMClient createRAM(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRAM(array $args = [])
 * @method \Aws\RDSDataService\RDSDataServiceClient createRDSDataService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRDSDataService(array $args = [])
 * @method \Aws\Rds\RdsClient createRds(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRds(array $args = [])
 * @method \Aws\Redshift\RedshiftClient createRedshift(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRedshift(array $args = [])
 * @method \Aws\Rekognition\RekognitionClient createRekognition(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRekognition(array $args = [])
 * @method \Aws\ResourceGroups\ResourceGroupsClient createResourceGroups(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionResourceGroups(array $args = [])
 * @method \Aws\ResourceGroupsTaggingAPI\ResourceGroupsTaggingAPIClient createResourceGroupsTaggingAPI(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionResourceGroupsTaggingAPI(array $args = [])
 * @method \Aws\RoboMaker\RoboMakerClient createRoboMaker(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRoboMaker(array $args = [])
 * @method \Aws\Route53\Route53Client createRoute53(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRoute53(array $args = [])
 * @method \Aws\Route53Domains\Route53DomainsClient createRoute53Domains(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRoute53Domains(array $args = [])
 * @method \Aws\Route53Resolver\Route53ResolverClient createRoute53Resolver(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionRoute53Resolver(array $args = [])
 * @method \Aws\S3\S3Client createS3(array $args = [])
 * @method \Aws\S3\S3MultiRegionClient createMultiRegionS3(array $args = [])
 * @method \Aws\S3Control\S3ControlClient createS3Control(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionS3Control(array $args = [])
 * @method \Aws\SageMaker\SageMakerClient createSageMaker(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSageMaker(array $args = [])
 * @method \Aws\SageMakerRuntime\SageMakerRuntimeClient createSageMakerRuntime(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSageMakerRuntime(array $args = [])
 * @method \Aws\SecretsManager\SecretsManagerClient createSecretsManager(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSecretsManager(array $args = [])
 * @method \Aws\SecurityHub\SecurityHubClient createSecurityHub(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSecurityHub(array $args = [])
 * @method \Aws\ServerlessApplicationRepository\ServerlessApplicationRepositoryClient createServerlessApplicationRepository(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionServerlessApplicationRepository(array $args = [])
 * @method \Aws\ServiceCatalog\ServiceCatalogClient createServiceCatalog(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionServiceCatalog(array $args = [])
 * @method \Aws\ServiceDiscovery\ServiceDiscoveryClient createServiceDiscovery(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionServiceDiscovery(array $args = [])
 * @method \Aws\ServiceQuotas\ServiceQuotasClient createServiceQuotas(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionServiceQuotas(array $args = [])
 * @method \Aws\Ses\SesClient createSes(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSes(array $args = [])
 * @method \Aws\Sfn\SfnClient createSfn(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSfn(array $args = [])
 * @method \Aws\Shield\ShieldClient createShield(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionShield(array $args = [])
 * @method \Aws\Sms\SmsClient createSms(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSms(array $args = [])
 * @method \Aws\SnowBall\SnowBallClient createSnowBall(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSnowBall(array $args = [])
 * @method \Aws\Sns\SnsClient createSns(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSns(array $args = [])
 * @method \Aws\Sqs\SqsClient createSqs(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSqs(array $args = [])
 * @method \Aws\Ssm\SsmClient createSsm(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSsm(array $args = [])
 * @method \Aws\StorageGateway\StorageGatewayClient createStorageGateway(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionStorageGateway(array $args = [])
 * @method \Aws\Sts\StsClient createSts(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSts(array $args = [])
 * @method \Aws\Support\SupportClient createSupport(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSupport(array $args = [])
 * @method \Aws\Swf\SwfClient createSwf(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionSwf(array $args = [])
 * @method \Aws\Textract\TextractClient createTextract(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionTextract(array $args = [])
 * @method \Aws\TranscribeService\TranscribeServiceClient createTranscribeService(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionTranscribeService(array $args = [])
 * @method \Aws\Transfer\TransferClient createTransfer(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionTransfer(array $args = [])
 * @method \Aws\Translate\TranslateClient createTranslate(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionTranslate(array $args = [])
 * @method \Aws\Waf\WafClient createWaf(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWaf(array $args = [])
 * @method \Aws\WafRegional\WafRegionalClient createWafRegional(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWafRegional(array $args = [])
 * @method \Aws\WorkDocs\WorkDocsClient createWorkDocs(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWorkDocs(array $args = [])
 * @method \Aws\WorkLink\WorkLinkClient createWorkLink(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWorkLink(array $args = [])
 * @method \Aws\WorkMail\WorkMailClient createWorkMail(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWorkMail(array $args = [])
 * @method \Aws\WorkMailMessageFlow\WorkMailMessageFlowClient createWorkMailMessageFlow(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWorkMailMessageFlow(array $args = [])
 * @method \Aws\WorkSpaces\WorkSpacesClient createWorkSpaces(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionWorkSpaces(array $args = [])
 * @method \Aws\XRay\XRayClient createXRay(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionXRay(array $args = [])
 * @method \Aws\signer\signerClient createsigner(array $args = [])
 * @method \Aws\MultiRegionClient createMultiRegionsigner(array $args = [])
 */
class Sdk
{
    const VERSION = '3.112.31';

    /** @var array Arguments for creating clients */
    private $args;

    /**
     * Constructs a new SDK object with an associative array of default
     * client settings.
     *
     * @param array $args
     *
     * @throws \InvalidArgumentException
     * @see Aws\AwsClient::__construct for a list of available options.
     */
    public function __construct(array $args = [])
    {
        $this->args = $args;

        if (!isset($args['handler']) && !isset($args['http_handler'])) {
            $this->args['http_handler'] = default_http_handler();
        }
    }

    public function __call($name, array $args)
    {
        $args = isset($args[0]) ? $args[0] : [];
        if (strpos($name, 'createMultiRegion') === 0) {
            return $this->createMultiRegionClient(substr($name, 17), $args);
        }

        if (strpos($name, 'create') === 0) {
            return $this->createClient(substr($name, 6), $args);
        }

        throw new \BadMethodCallException("Unknown method: {$name}.");
    }

    /**
     * Get a client by name using an array of constructor options.
     *
     * @param string $name Service name or namespace (e.g., DynamoDb, s3).
     * @param array  $args Arguments to configure the client.
     *
     * @return AwsClientInterface
     * @throws \InvalidArgumentException if any required options are missing or
     *                                   the service is not supported.
     * @see Aws\AwsClient::__construct for a list of available options for args.
     */
    public function createClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        // Instantiate the client class.
        $client = "Aws\\{$namespace}\\{$namespace}Client";
        return new $client($this->mergeArgs($namespace, $service, $args));
    }

    public function createMultiRegionClient($name, array $args = [])
    {
        // Get information about the service from the manifest file.
        $service = manifest($name);
        $namespace = $service['namespace'];

        $klass = "Aws\\{$namespace}\\{$namespace}MultiRegionClient";
        $klass = class_exists($klass) ? $klass : 'Aws\\MultiRegionClient';

        return new $klass($this->mergeArgs($namespace, $service, $args));
    }

    /**
     * Clone existing SDK instance with ability to pass an associative array
     * of extra client settings.
     *
     * @param array $args
     *
     * @return self
     */
    public function copy(array $args = [])
    {
        return new self($args + $this->args);
    }

    private function mergeArgs($namespace, array $manifest, array $args = [])
    {
        // Merge provided args with stored, service-specific args.
        if (isset($this->args[$namespace])) {
            $args += $this->args[$namespace];
        }

        // Provide the endpoint prefix in the args.
        if (!isset($args['service'])) {
            $args['service'] = $manifest['endpoint'];
        }

        return $args + $this->args;
    }

    /**
     * Determine the endpoint prefix from a client namespace.
     *
     * @param string $name Namespace name
     *
     * @return string
     * @internal
     * @deprecated Use the `\Aws\manifest()` function instead.
     */
    public static function getEndpointPrefix($name)
    {
        return manifest($name)['endpoint'];
    }
}
