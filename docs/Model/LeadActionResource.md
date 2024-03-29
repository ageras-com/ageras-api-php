# LeadActionResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Lead action | [optional] [default to 'unknown']
**date** | **string** | Date | [optional] 
**quote_id** | **int** | Quote id | [optional] 
**rejection_reasons** | [**\Ageras\Api\LeadActionQuoteReasonResource[]**](LeadActionQuoteReasonResource.md) | Reasons for each quote&#39;s rejection | [optional] 
**reason** | **string** | The reason for a particular action | [optional] [default to 'unknown']
**reason_completed** | **string** | @var The reason to complete lead | [optional] [default to 'unknown']
**discard_status** | **string** | Mark a lead with a status. | [optional] [default to 'unknown']
**discard_status_reason** | **string** | Reason the status was set to what it is. | [optional] 
**discard_status_note** | **string** | Note the status was set to what it is. | [optional] 
**client_decision_postponed_reason** | **string** | Reason for the postponement. | [optional] 
**partner_id** | **int** |  | [optional] 
**custom_fee** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


