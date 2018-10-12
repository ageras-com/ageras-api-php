# LeadQuotesInfoResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**max** | **int** | Max Offer count. | [optional] 
**count** | **int** | Number of offers. | [optional] 
**reserved** | **int** | Number of reserved spots. | [optional] 
**open_for_quotes** | **bool** | Open for quotes. | [optional] [default to false]
**open_for_reservations** | **bool** | Status of the reservation | [optional] [default to false]
**accepted_quote** | [**\Ageras\Api\LeadQuoteInfoEntryResource**](LeadQuoteInfoEntryResource.md) |  | [optional] 
**quotes** | [**\Ageras\Api\LeadQuoteInfoEntryResource[]**](LeadQuoteInfoEntryResource.md) | List of offers. | [optional] 
**client_decision_postponed_to** | **string** | Date the client match decision is postponed to. | [optional] 
**client_decision_postponed_reason** | **string** | Reason the client postponed the decision. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


