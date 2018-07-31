# LeadResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id for the Lead. | [optional] 
**created_at** | **string** | Date the Lead was created. | [optional] 
**updated_at** | **string** | Date the Lead was updated. | [optional] 
**validated_at** | **string** | Date the Lead was Updated. | [optional] 
**expires_at** | **string** | Date the Lead Expires. | [optional] 
**expiration_boosted_at** | **string** | Date where a lead has been extended/boosted. | [optional] 
**working_hours_expires_at** | **string** | Date the Lead Expires taking into account only working hours. | [optional] 
**status** | **string** | Current Validation Status of the Lead. | [optional] [default to 'unknown']
**reservation_status** | **string** | Current reservation status of the Lead. | [optional] 
**progress** | [**\Ageras\Api\Model\LeadProgressResource[]**](LeadProgressResource.md) | Progress | [optional] 
**title** | **string** | Title for the Lead. | [optional] 
**description** | **string** | A description of the given Lead. | [optional] 
**client** | [**\Ageras\Api\Model\LeadClientResource**](LeadClientResource.md) |  | [optional] 
**customer_info** | [**\Ageras\Api\Model\LeadCustomerInfoResource**](LeadCustomerInfoResource.md) |  | [optional] 
**requirements** | [**\Ageras\Api\Model\LeadRequirementsResource**](LeadRequirementsResource.md) |  | [optional] 
**punch_price** | **int** | The price for the given lead. | [optional] 
**service_fee** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**service_fee_subsequent_years_amount_excl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**minimum_quote_amount_excl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**geo** | [**\Ageras\Api\Model\LeadGeoResource**](LeadGeoResource.md) |  | [optional] 
**attributes** | [**\Ageras\Api\Model\LeadAttributeResource[]**](LeadAttributeResource.md) | Attributes for the lead. | [optional] 
**industries** | [**\Ageras\Api\Model\LeadIndustriesResource**](LeadIndustriesResource.md) |  | [optional] 
**products** | [**\Ageras\Api\Model\LeadProductResource[]**](LeadProductResource.md) | What products are connected to this Lead. | [optional] 
**meeting** | [**\Ageras\Api\Model\LeadMeetingResource**](LeadMeetingResource.md) |  | [optional] 
**accepted** | [**\Ageras\Api\Model\LeadAcceptedResource**](LeadAcceptedResource.md) |  | [optional] 
**offers_info** | [**\Ageras\Api\Model\LeadOffersInfoResource**](LeadOffersInfoResource.md) |  | [optional] 
**quotes_info** | [**\Ageras\Api\Model\LeadQuotesInfoResource**](LeadQuotesInfoResource.md) |  | [optional] 
**affiliate_campaign** | [**\Ageras\Api\Model\AffiliateCampaignResource**](AffiliateCampaignResource.md) |  | [optional] 
**feedback** | [**\Ageras\Api\Model\LeadFeedbackResource**](LeadFeedbackResource.md) |  | [optional] 
**validator** | [**\Ageras\Api\Model\LeadEmployeeResource**](LeadEmployeeResource.md) |  | [optional] 
**custom_variables** | [**\Ageras\Api\Model\KeyValueResource[]**](KeyValueResource.md) | Colleciton of custom key-value pairs. | [optional] 
**category** | [**\Ageras\Api\Model\LeadCategoryResource**](LeadCategoryResource.md) |  | [optional] 
**revenue_amount_excl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**is_service_fee** | **bool** | Does this lead have a service fee | [optional] [default to false]
**wants_local_partner** | **bool** | Does the lead want a local partner | [optional] [default to false]
**is_digital** | **bool** | Digital communication? | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


