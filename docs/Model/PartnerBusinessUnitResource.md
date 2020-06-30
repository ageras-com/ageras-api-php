# PartnerBusinessUnitResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary ID. | [optional] 
**partner_id** | **int** | Partner ID. | [optional] 
**partner_user_id** | **int** | Partner user ID. | [optional] 
**partner_business_unit_grouping_id** | **int** | Grouping ID. | [optional] 
**geo** | [**\Ageras\Api\PartnerBusinessUnitGeoResource**](PartnerBusinessUnitGeoResource.md) |  | [optional] 
**disable_digital_leads** | **bool** | Does this business unit disable digital leads? | [optional] [default to false]
**display_name** | **string** | Human-readable name. | [optional] 
**geo_range** | **int** | Distance this business unit is willing to look for leads. | [optional] 
**current_allocation** | [**\Ageras\Api\PartnerBusinessUnitAllocationResource**](PartnerBusinessUnitAllocationResource.md) |  | [optional] 
**accumulated_allocation** | [**\Ageras\Api\PartnerBusinessUnitAccumulatedAllocationResource**](PartnerBusinessUnitAccumulatedAllocationResource.md) |  | [optional] 
**desired_revenue_range** | [**\Ageras\Api\PartnerBusinessUnitRevenueRangeResource**](PartnerBusinessUnitRevenueRangeResource.md) |  | [optional] 
**desired_sectors** | [**\Ageras\Api\SectorResource[]**](SectorResource.md) | Desired sectors. | [optional] 
**revenue_segment** | [**\Ageras\Api\RevenueSegmentResource**](RevenueSegmentResource.md) |  | [optional] 
**desired_types** | [**\Ageras\Api\LeadTypeResource[]**](LeadTypeResource.md) | Desired lead types. | [optional] 
**desired_industries** | [**\Ageras\Api\IndustryResource[]**](IndustryResource.md) | Desired industries. | [optional] 
**employee** | [**\Ageras\Api\PartnerEmployeeResource**](PartnerEmployeeResource.md) |  | [optional] 
**partner** | [**\Ageras\Api\PartnerBusinessUnitPartnerResource**](PartnerBusinessUnitPartnerResource.md) |  | [optional] 
**business_models** | [**\Ageras\Api\PartnerBusinessUnitBusinessModelResource[]**](PartnerBusinessUnitBusinessModelResource.md) | Business models of the business units. | [optional] 
**is_active** | **bool** | If the business unit is active | [optional] [default to false]
**retired_at** | **string** | When the business unit is considered retired | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


