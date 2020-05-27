# WhatsAppChatApi\Class6BanApi

All URIs are relative to *https://api.chat-api.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**banTest**](Class6BanApi.md#banTest) | **POST** /banTest | Test ban settings
[**getBanSettings**](Class6BanApi.md#getBanSettings) | **GET** /banSettings | Get settings
[**setBanSettings**](Class6BanApi.md#setBanSettings) | **POST** /banSettings | Set settings



## banTest

> \WhatsAppChatApi\Model\BanTestStatus banTest($ban_test_action)

Test ban settings

Send the phone number to find out if the instance is banning it

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new WhatsAppChatApi\Api\Class6BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ban_test_action = new \WhatsAppChatApi\Model\BanTestAction(); // \WhatsAppChatApi\Model\BanTestAction | 

try {
    $result = $apiInstance->banTest($ban_test_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class6BanApi->banTest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ban_test_action** | [**\WhatsAppChatApi\Model\BanTestAction**](../Model/BanTestAction.md)|  |

### Return type

[**\WhatsAppChatApi\Model\BanTestStatus**](../Model/BanTestStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getBanSettings

> \WhatsAppChatApi\Model\BanSettings getBanSettings()

Get settings

**banPhoneMask** - Regular expression on which bans on numbers will be sent  **preBanMessage** - Warning message If it is set, a message will be sent before sending the ban.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new WhatsAppChatApi\Api\Class6BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBanSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class6BanApi->getBanSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\WhatsAppChatApi\Model\BanSettings**](../Model/BanSettings.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setBanSettings

> \WhatsAppChatApi\Model\BanSettings setBanSettings($ban_settings)

Set settings

**banPhoneMask** - Regular expression on which bans on numbers will be sent  **preBanMessage** - Warning message If it is set, a message will be sent before sending the ban.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = WhatsAppChatApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new WhatsAppChatApi\Api\Class6BanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ban_settings = new \WhatsAppChatApi\Model\BanSettings(); // \WhatsAppChatApi\Model\BanSettings | 

try {
    $result = $apiInstance->setBanSettings($ban_settings);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class6BanApi->setBanSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ban_settings** | [**\WhatsAppChatApi\Model\BanSettings**](../Model/BanSettings.md)|  |

### Return type

[**\WhatsAppChatApi\Model\BanSettings**](../Model/BanSettings.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/json, application/x-www-form-urlencoded
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

