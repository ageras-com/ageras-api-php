# LeadResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id for the Lead. | [optional] 
**created_at** | **string** | Date the Lead was created. | [optional] 
**updated_at** | **string** | Date the Lead was updated. | [optional] 
**validated_at** | **string** | Date the Lead was Updated. | [optional] 
**expires_at** | **string** | Date the Lead Expires. | [optional] 
**status** | **string** | Current Validation Status of the Lead. | [optional] [default to 'unknown']
**progress** | [**\Ageras\Api\LeadProgressResource[]**](LeadProgressResource.md) | Progress | [optional] 
**title** | **string** | Title for the Lead. | [optional] 
**description** | **string** | A description of the given Lead. | [optional] 
**client** | [**\Ageras\Api\LeadClientResource**](LeadClientResource.md) |  | [optional] 
**customer_info** | [**\Ageras\Api\LeadCustomerInfoResource**](LeadCustomerInfoResource.md) |  | [optional] 
**requirements** | [**\Ageras\Api\LeadRequirementsResource**](LeadRequirementsResource.md) |  | [optional] 
**punch_price** | **int** | The price for the given lead. | [optional] 
**service_fee** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**geo** | [**\Ageras\Api\LeadGeoResource**](LeadGeoResource.md) |  | [optional] 
**attributes** | [**\Ageras\Api\LeadAttributeResource[]**](LeadAttributeResource.md) | Attributes for the lead. | [optional] 
**industries** | [**\Ageras\Api\LeadIndustryPairResource**](LeadIndustryPairResource.md) |  | [optional] 
**meeting** | [**\Ageras\Api\LeadMeetingResource**](LeadMeetingResource.md) |  | [optional] 
**accepted** | [**\Ageras\Api\LeadAcceptedResource**](LeadAcceptedResource.md) |  | [optional] 
**offers_info** | [**\Ageras\Api\LeadOffersInfoResource**](LeadOffersInfoResource.md) |  | [optional] 
**quotes_info** | [**\Ageras\Api\LeadQuotesInfoResource**](LeadQuotesInfoResource.md) |  | [optional] 
**affiliate_campaign** | [**\Ageras\Api\AffiliateCampaignResource**](AffiliateCampaignResource.md) |  | [optional] 
**feedback** | [**\Ageras\Api\LeadFeedbackResource**](LeadFeedbackResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


