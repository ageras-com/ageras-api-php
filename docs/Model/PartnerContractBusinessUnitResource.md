# PartnerContractBusinessUnitResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary ID of the business unit. | [optional] 
**partner_user** | [**\Ageras\Api\PartnerContractBusinessUnitPartnerUserResource**](PartnerContractBusinessUnitPartnerUserResource.md) |  | [optional] 
**partner_business_unit_grouping_id** | **int** | Partner business unit grouping ID. | [optional] 
**wants_digital_leads** | **bool** | Does the business unit accept digial leads? | [optional] [default to false]
**display_name** | **string** | Display name. | [optional] 
**geo** | [**\Ageras\Api\PartnerBusinessUnitGeoResource**](PartnerBusinessUnitGeoResource.md) |  | [optional] 
**revenues** | [**\Ageras\Api\PartnerBusinessUnitRevenueRangeResource**](PartnerBusinessUnitRevenueRangeResource.md) |  | [optional] 
**sectors** | [**\Ageras\Api\SectorResource[]**](SectorResource.md) | Desired sectors. | [optional] 
**industries** | [**\Ageras\Api\IndustryResource[]**](IndustryResource.md) | Desired industries. | [optional] 
**client_types** | [**\Ageras\Api\LeadTypeResource[]**](LeadTypeResource.md) | Desired client types. | [optional] 
**geo_regions** | [**\Ageras\Api\PartnerBusinessUnitSegmentationGeoRegionResource[]**](PartnerBusinessUnitSegmentationGeoRegionResource.md) | Desired geo regions. | [optional] 
**allocation_quota** | [**\Ageras\Api\PartnerContractBusinessUnitQuotaResource**](PartnerContractBusinessUnitQuotaResource.md) |  | [optional] 
**allocation_limit** | [**\Ageras\Api\PartnerContractBusinessUnitQuotaResource**](PartnerContractBusinessUnitQuotaResource.md) |  | [optional] 
**wants_exclusive_leads** | **bool** | Flag whether business unit wants exclusive leads | [optional] [default to false]
**revenue_segment** | [**\Ageras\Api\RevenueSegmentResource**](RevenueSegmentResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


