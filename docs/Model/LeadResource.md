# LeadResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id for the Lead. | [optional] 
**created_at** | **string** | Date the Lead was created. | [optional] 
**updated_at** | **string** | Date the Lead was updated. | [optional] 
**validated_at** | **string** | Date the Lead was Updated. | [optional] 
**status** | **string** | Current Validation Status of the Lead. | [optional] [default to 'unknown']
**open_for_offers** | **bool** | Is the current lead open for offers. | [optional] [default to false]
**title** | **string** | Title for the Lead. | [optional] 
**description** | **string** | A description of the given Lead. | [optional] 
**customer** | [**\Swagger\Client\Model\LeadCustomerResource**](LeadCustomerResource.md) |  | [optional] 
**punch_price** | **int** | The price for the given lead. | [optional] 
**geo** | [**\Swagger\Client\Model\LeadGeoResource**](LeadGeoResource.md) |  | [optional] 
**attributes** | [**\Swagger\Client\Model\LeadAttributeResource[]**](LeadAttributeResource.md) | Attributes for the lead. | [optional] 
**industries** | [**\Swagger\Client\Model\LeadIndustryPairResource**](LeadIndustryPairResource.md) |  | [optional] 
**meeting** | [**\Swagger\Client\Model\LeadMeetingResource**](LeadMeetingResource.md) |  | [optional] 
**accepted** | [**\Swagger\Client\Model\LeadAcceptedResource**](LeadAcceptedResource.md) |  | [optional] 
**offers_info** | [**\Swagger\Client\Model\LeadOfferInfoResource**](LeadOfferInfoResource.md) |  | [optional] 
**affiliate_campaign** | [**\Swagger\Client\Model\AffiliateCampaignResource**](AffiliateCampaignResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


