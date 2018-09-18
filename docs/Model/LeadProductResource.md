# LeadProductResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | LeadProduct id | [optional] 
**lead_id** | **int** | Lead id | [optional] 
**product** | [**\Ageras\Api\ProductResource**](ProductResource.md) |  | [optional] 
**description** | **string** | Product description specific to this lead | [optional] 
**type** | **string** | Yearly, quarterly, monthly, unit etc | [optional] [default to 'unknown']
**quantity** | **int** | Quantity | [optional] 
**subsequent_years** | **bool** | Subsequent years | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


