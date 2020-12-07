# PartnerBusinessUnitMonthAllocationResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**current_month_allocation_count** | **int** | Number of lead budget allocations allocated in current month. | [optional] 
**suggested_allocation_quota** | **int** | Suggested lead budget quota for current month based on number of unused period allocations and number of remaining months. | [optional] 
**pay_per_spot_allocation_count** | **int** | Number of allocations fulfilled by the pay per spot limit in current month. | [optional] 
**pay_per_spot_allocation_limit** | **int** | Count of remaining pey-per-spot spots in current period allocation limit. | [optional] 
**pay_per_spot_allocation_price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**overdelivery_allocation_count** | **int** | Count of allocations that were overdelivered, i.e. above the applicable period quota | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


