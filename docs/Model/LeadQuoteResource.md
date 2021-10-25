# LeadQuoteResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The quote&#39;s id. | [optional] 
**status** | **string** | Quote status | [optional] [default to 'new']
**progress** | **string** | Description of progress from partner&#39;s perspective. | [optional] [default to 'unknown']
**created_at** | **string** | Created time | [optional] 
**updated_at** | **string** | When the quote was updated | [optional] 
**accepted_at** | **string** | Quote accepted at | [optional] 
**rejected_at** | **string** | Quote rejected at | [optional] 
**paid_at** | **string** | Created time | [optional] 
**expires_at** | **string** | Created time | [optional] 
**published_at** | **string** | Created time | [optional] 
**lead_id** | **int** | Lead Id | [optional] 
**lead** | [**\Ageras\Api\ProjectLeadResource**](ProjectLeadResource.md) |  | [optional] 
**partner** | [**\Ageras\Api\PartnerSuggestResource**](PartnerSuggestResource.md) |  | [optional] 
**partner_lead_offer_id** | **int** | For the given partner and lead, | [optional] 
**partner_terms** | **string** | Partners terms for the given quote | [optional] 
**title** | **string** | Title | [optional] 
**description** | **string** | Description | [optional] 
**items** | [**\Ageras\Api\LeadQuoteItemResource[]**](LeadQuoteItemResource.md) | Quote Items | [optional] 
**loans** | [**\Ageras\Api\LeadQuoteLoanResource[]**](LeadQuoteLoanResource.md) | Quote loans | [optional] 
**payment** | [**\Ageras\Api\LeadQuotePaymentResource**](LeadQuotePaymentResource.md) |  | [optional] 
**total_vat_amount** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**client** | [**\Ageras\Api\LeadClientResource**](LeadClientResource.md) |  | [optional] 
**service_fee** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**reservation_expires_at** | **string** | Reservation time expiry date | [optional] 
**revenue_share_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**revenue_share_subsequent_years_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**is_below_minimum_amount** | **bool** | If the total quote amount is below the minimum quote amount specified on the lead | [optional] [default to false]
**accepted_by_actioner** | [**\Ageras\Api\ActionerResource**](ActionerResource.md) |  | [optional] 
**lead_products** | [**\Ageras\Api\LeadProductResource[]**](LeadProductResource.md) | List of lead products. | [optional] 
**quote_fee_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


