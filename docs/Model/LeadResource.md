# LeadResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id for the Lead. | [optional] 
**created_at** | **string** | Date the Lead was created. | [optional] 
**updated_at** | **string** | Date the Lead was updated. | [optional] 
**validated_at** | **string** | Date the Lead was Updated. | [optional] 
**status** | **string** | Current Validation Status of the Lead. | [optional] [default to 'unknown']
**progress** | [**\Ageras\Api\Model\LeadProgressResource[]**](LeadProgressResource.md) | Progress | [optional] 
**title** | **string** | Title for the Lead. | [optional] 
**description** | **string** | A description of the given Lead. | [optional] 
**client** | [**\Ageras\Api\Model\LeadClientResource**](LeadClientResource.md) |  | [optional] 
**customer_info** | [**\Ageras\Api\Model\LeadCustomerInfoResource**](LeadCustomerInfoResource.md) |  | [optional] 
**requirements** | [**\Ageras\Api\Model\LeadRequirementsResource**](LeadRequirementsResource.md) |  | [optional] 
**punch_price** | **int** | The price for the given lead. | [optional] 
**service_fee** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**geo** | [**\Ageras\Api\Model\LeadGeoResource**](LeadGeoResource.md) |  | [optional] 
**attributes** | [**\Ageras\Api\Model\LeadAttributeResource[]**](LeadAttributeResource.md) | Attributes for the lead. | [optional] 
**industries** | [**\Ageras\Api\Model\LeadIndustryPairResource**](LeadIndustryPairResource.md) |  | [optional] 
**meeting** | [**\Ageras\Api\Model\LeadMeetingResource**](LeadMeetingResource.md) |  | [optional] 
**accepted** | [**\Ageras\Api\Model\LeadAcceptedResource**](LeadAcceptedResource.md) |  | [optional] 
**offers_info** | [**\Ageras\Api\Model\LeadOffersInfoResource**](LeadOffersInfoResource.md) |  | [optional] 
**quotes_info** | [**\Ageras\Api\Model\LeadQuotesInfoResource**](LeadQuotesInfoResource.md) |  | [optional] 
**affiliate_campaign** | [**\Ageras\Api\Model\AffiliateCampaignResource**](AffiliateCampaignResource.md) |  | [optional] 
**feedback** | [**\Ageras\Api\Model\LeadFeedbackResource**](LeadFeedbackResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


