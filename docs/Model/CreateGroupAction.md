# # CreateGroupAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**group_name** | **string** | Name of the group being created | 
**chat_ids** | **string[]** | **Required if phones is not set**  An array of new participients chatIds. | [optional] 
**phones** | **int[]** | **Required if chatIds is not set**  An array of phones starting with the country code. You do not need to add your number.   USA example: [17472822486&#39;]. | [optional] 
**message_text** | **string** | The text of the message that will be sent to the group when it is created. If you do not set a parameter, the message will not be sent | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


