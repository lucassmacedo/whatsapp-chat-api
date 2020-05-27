# WhatsAppChatApi\Class7TestingApi

All URIs are relative to *https://api.chat-api.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**instanceStatuses**](Class7TestingApi.md#instanceStatuses) | **GET** /instanceStatuses | Returns instance status changes history.
[**webhookStatuses**](Class7TestingApi.md#webhookStatuses) | **GET** /webhookStatus | Returns webhook status for message.



## instanceStatuses

> \WhatsAppChatApi\Model\Statuses instanceStatuses($min_time, $max_time)

Returns instance status changes history.

Requires enable \"instanceStatuses\" option for collecting data.

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


$apiInstance = new WhatsAppChatApi\Api\Class7TestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$min_time = 946684800; // int | Filter statuses received after specified date. Example: 946684800.
$max_time = 946684800; // int | Filter statuses received before specified date. Example: 946684800.

try {
    $result = $apiInstance->instanceStatuses($min_time, $max_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class7TestingApi->instanceStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **min_time** | **int**| Filter statuses received after specified date. Example: 946684800. | [optional]
 **max_time** | **int**| Filter statuses received before specified date. Example: 946684800. | [optional]

### Return type

[**\WhatsAppChatApi\Model\Statuses**](../Model/Statuses.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhookStatuses

> \WhatsAppChatApi\Model\WebhookStatus webhookStatuses($msg_id)

Returns webhook status for message.

Requires enable \"webhookStatuses\" option for collecting data.

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


$apiInstance = new WhatsAppChatApi\Api\Class7TestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$msg_id = false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F; // string | Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F.

try {
    $result = $apiInstance->webhookStatuses($msg_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class7TestingApi->webhookStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msg_id** | **string**| Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. |

### Return type

[**\WhatsAppChatApi\Model\WebhookStatus**](../Model/WebhookStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

