# PartnerBusinessUnitPartnerResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary ID. | [optional] 
**company_name** | **string** | Partner company name. | [optional] 
**company_information** | **string** |  | [optional] 
**slug** | **string** |  | [optional] 
**logo** | **string** |  | [optional] 
**has_marketing_package** | **bool** | Does the partner have a marketing package? | [optional] [default to false]
**is_subscription_paused** | **bool** | Is the partner&#39;s subscription paused? | [optional] [default to false]
**features** | **string[]** | An array of the partner&#39;s features | [optional] 
**rating** | [**\Ageras\Api\PartnerRatingResource**](PartnerRatingResource.md) |  | [optional] 
**badges** | [**\Ageras\Api\PartnerBadgeResource[]**](PartnerBadgeResource.md) |  | [optional] 
**geo** | [**\Ageras\Api\PartnerGeoResource**](PartnerGeoResource.md) |  | [optional] 
**public_employees** | [**\Ageras\Api\PartnerBusinessUnitPartnerUserResource[]**](PartnerBusinessUnitPartnerUserResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


