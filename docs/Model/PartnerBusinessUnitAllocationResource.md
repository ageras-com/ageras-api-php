# PartnerBusinessUnitAllocationResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**normal_quota_allocation_count** | **int** | Number of allocations fulfilled by the normal quota. | [optional] 
**normal_allocation_quota** | **int** | Count of allocations added each refill period from the normal allocation quota. | [optional] 
**pay_per_spot_allocation_count** | **int** | Number of allocations fulfilled by the pay per spot limit. | [optional] 
**pay_per_spot_allocation_limit** | **int** | Count of allocations added each refill period from the pay per spot limit. | [optional] 
**pay_per_spot_allocation_price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**just_in_time_allocation_count** | **int** | Number of allocations fulfilled by just in time fulfillment. | [optional] 
**allocation_count** | **int** | Sum of norma quota count and just in time count. | [optional] 
**allocation_quota_per_refill** | **int** | Synonym for normal_allocation_quota. | [optional] 
**overdelivery_allocation_count** | **int** | Count of allocations that were overdelivered, i.e. above the applicable quota | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


