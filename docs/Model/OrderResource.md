# OrderResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Order ID. | [optional] 
**geo_code** | **string** | order geo code | [optional] 
**status** | **string** | order status | [optional] 
**created_at** | **string** | Order creation date. | [optional] 
**updated_at** | **string** | Order Last update. | [optional] 
**paid_at** | **string** | Order payment date. | [optional] 
**due_at** | **string** | Order due date | [optional] 
**buyer** | [**\Ageras\Api\OrderConsumerResource**](OrderConsumerResource.md) |  | [optional] 
**lines** | [**\Ageras\Api\OrderLineResource[]**](OrderLineResource.md) | order lines | [optional] 
**installments** | [**\Ageras\Api\OrderInstallmentResource[]**](OrderInstallmentResource.md) | Installments. | [optional] 
**total_vat_amount** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_incl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


