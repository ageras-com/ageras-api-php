# OrderLineResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id for the line | [optional] 
**item** | [**\Ageras\Api\OrderItemResource**](OrderItemResource.md) |  | [optional] 
**quantity** | **int** | Quantity per price. | [optional] 
**name** | **string** | Title for the line | [optional] 
**item_vat_percent** | **float** | Vat percent on item | [optional] 
**item_vat_amount** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**item_price_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**item_price_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**vat_amount** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**price_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**price_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**seller** | [**\Ageras\Api\OrderLineSellerResource**](OrderLineSellerResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


