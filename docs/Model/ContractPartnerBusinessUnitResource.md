# ContractPartnerBusinessUnitResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary ID of the business unit. | [optional] 
**action** | **string** | Is this business unit created, updated or deleted? | [optional] [default to 'unknown']
**partner_user** | [**\Ageras\Api\ContractComponentResource**](ContractComponentResource.md) |  | [optional] 
**partner_business_unit_grouping_id** | **int** | Partner business unit grouping ID. | [optional] 
**disable_digital_leads** | **bool** | Does the business unit accept digial leads? | [optional] [default to false]
**display_name** | **string** | Display name. | [optional] 
**geo** | [**\Ageras\Api\PartnerBusinessUnitGeoResource**](PartnerBusinessUnitGeoResource.md) |  | [optional] 
**revenues** | [**\Ageras\Api\PartnerBusinessUnitRevenueRangeResource**](PartnerBusinessUnitRevenueRangeResource.md) |  | [optional] 
**sectors** | [**\Ageras\Api\SectorResource[]**](SectorResource.md) | Desired sectors. | [optional] 
**industries** | [**\Ageras\Api\IndustryResource[]**](IndustryResource.md) | Desired industries. | [optional] 
**client_types** | [**\Ageras\Api\LeadTypeResource[]**](LeadTypeResource.md) | Desired client types. | [optional] 
**geo_regions** | [**\Ageras\Api\PartnerBusinessUnitSegmentationGeoRegionResource[]**](PartnerBusinessUnitSegmentationGeoRegionResource.md) | Desired geo regions. | [optional] 
**business_models** | [**\Ageras\Api\ContractBusinessModelResource[]**](ContractBusinessModelResource.md) | Business models to be applied to the business unit. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


