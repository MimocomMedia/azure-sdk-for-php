<?php
require dirname(__DIR__) . '/src/autoload.php';

spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'azurequeuemessagetest' => '/unit/WindowsAzure/Services/Queue/Models/AzureQueueMessageTest.php',
            'azureutilitiestest' => '/unit/WindowsAzure/Core/AzureUtilitiesTest.php',
            'configurationtest' => '/unit/WindowsAzure/Services/Core/ConfigurationTest.php',
            'createmessageoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/CreateMessageOptionsTest.php',
            'getqueuemetadataresulttest' => '/unit/WindowsAzure/Services/Queue/Models/GetQueueMetadataResultTest.php',
            'getservicepropertiesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/GetServicePropertiesResultTest.php',
            'httpclienttest' => '/unit/WindowsAzure/Core/HttpClientTest.php',
            'invalidargumenttypeexceptiontest' => '/unit/WindowsAzure/Core/InvalidArgumentTypeExceptionTest.php',
            'listmessagesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/ListMessagesOptionsTest.php',
            'listmessagesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/ListMessagesResultTest.php',
            'listqueueoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/ListQueueOptionsTest.php',
            'loggingtest' => '/unit/WindowsAzure/Services/Queue/Models/LoggingTest.php',
            'metricstest' => '/unit/WindowsAzure/Services/Queue/Models/MetricsTest.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\authentication\\sharedkeyauthenticationschememock' => '/mock/WindowsAzure/Services/Core/Authentication/SharedKeyAuthenticationSchemeMock.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\authentication\\storageauthenticationschememock' => '/mock/WindowsAzure/Services/Core/Authentication/StorageAuthenticationSchemeMock.php',
            'pear2\\tests\\mock\\windowsazure\\services\\core\\filters\\simplefiltermock' => '/mock/WindowsAzure/Services/Core/Filters/SimpleFilterMock.php',
            'pear2\\tests\\unit\\testresources' => '/unit/TestResources.php',
            'peekmessagesoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/PeekMessagesOptionsTest.php',
            'peekmessagesresulttest' => '/unit/WindowsAzure/Services/Queue/Models/PeekMessagesResultTest.php',
            'queuemessagetest' => '/unit/WindowsAzure/Services/Queue/Models/QueueMessageTest.php',
            'queuerestproxytest' => '/unit/WindowsAzure/Services/Queue/QueueRestProxyTest.php',
            'queueserviceoptionstest' => '/unit/WindowsAzure/Services/Queue/Models/QueueServiceOptionsTest.php',
            'queuetest' => '/unit/WindowsAzure/Services/Queue/Models/QueueTest.php',
            'resttestbase' => '/unit/RestTestBase.php',
            'retentionpolicytest' => '/unit/WindowsAzure/Services/Queue/Models/RetentionPolicyTest.php',
            'serviceexceptiontest' => '/unit/WindowsAzure/Core/ServiceExceptionTest.php',
            'servicepropertiestest' => '/unit/WindowsAzure/Services/Queue/Models/ServicePropertiesTest.php',
            'sharedkeyauthenticationschemetest' => '/unit/WindowsAzure/Services/Core/Authentication/SharedKeyAuthenticationSchemeTest.php',
            'storageauthenticationschemetest' => '/unit/WindowsAzure/Services/Core/Authentication/StorageAuthenticationSchemeTest.php',
            'urltest' => '/unit/WindowsAzure/Core/UrlTest.php',
            'utilitiestest' => '/unit/WindowsAzure/UtilitiesTest.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
