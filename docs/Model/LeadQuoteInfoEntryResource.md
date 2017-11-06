# LeadQuoteInfoEntryResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The quote&#39;s id. | [optional] 
**status** | **string** |  | [optional] [default to 'new']
**created_at** | **string** |  | [optional] 
**paid_at** | **string** |  | [optional] 
**expires_at** | **string** |  | [optional] 
**published_at** | **string** |  | [optional] 
**partner** | [**\Ageras\Api\LeadPartnerResource**](LeadPartnerResource.md) |  | [optional] 
**partner_lead_offer_id** | **int** | For the given partner and lead, | [optional] 
**title** | **string** | Title | [optional] 
**description** | **string** | Description | [optional] 
**items** | [**\Ageras\Api\LeadQuoteItemResource[]**](LeadQuoteItemResource.md) | List of quote items. | [optional] 
**payment** | [**\Ageras\Api\LeadQuotePaymentResource**](LeadQuotePaymentResource.md) |  | [optional] 
**total_vat_amount** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


