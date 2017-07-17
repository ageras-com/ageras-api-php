# LeadOfferResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The offer&#39;s id. | [optional] 
**won** | **bool** | Is the offer won. | [optional] [default to false]
**partner_id** | **int** | The Partner associated to the given Offer. | [optional] 
**punch_price** | **int** | Price for a given punch. | [optional] 
**method** | **string** | Access method to partner lead offer. | [optional] [default to 'unknown']
**created_at** | **string** | When was the Lead Offer created. | [optional] 
**updated_at** | **string** | When was the Lead Offer last updated. | [optional] 
**meeting** | [**\Ageras\Api\Model\LeadMeetingResource**](LeadMeetingResource.md) |  | [optional] 
**lead_id** | **int** | Lead ID. | [optional] 
**punch_revenue** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


