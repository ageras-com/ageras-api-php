# LeadQuoteItemResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id for the Quote Item | [optional] 
**title** | **string** | Title | [optional] 
**created_at** | **string** | When the quote item is created | [optional] 
**updated_at** | **string** | When the quote item was updated | [optional] 
**type** | **string** | Type of quote item | [optional] [default to 'unknown']
**lead_product_id** | **int** | Lead product id of quote item | [optional] 
**lead_product** | [**\Ageras\Api\LeadProductResource**](LeadProductResource.md) |  | [optional] 
**is_product** | **string** | Determine if quote is standard product | [optional] 
**quantity** | **int** | Quantity of this item | [optional] 
**amount_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**amount_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**partner_product_comment** | [**\Ageras\Api\PartnerQuoteProductCommentResource**](PartnerQuoteProductCommentResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


