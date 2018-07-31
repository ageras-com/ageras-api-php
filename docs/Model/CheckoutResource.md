# CheckoutResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Client id. | [optional] 
**created_at** | **string** |  | [optional] 
**updated_at** | **string** |  | [optional] 
**geo_code** | **string** |  | [optional] 
**status** | **string** |  | [optional] [default to 'unknown']
**scope** | **string** |  | [optional] 
**validation_summary** | **string[]** |  | [optional] 
**payments** | [**\Ageras\Api\Model\CheckoutPaymentResource**](CheckoutPaymentResource.md) |  | [optional] 
**creator** | [**\Ageras\Api\Model\CheckoutConsumerResource**](CheckoutConsumerResource.md) |  | [optional] 
**buyer** | [**\Ageras\Api\Model\CheckoutConsumerResource**](CheckoutConsumerResource.md) |  | [optional] 
**lines** | [**\Ageras\Api\Model\CheckoutLineResource[]**](CheckoutLineResource.md) |  | [optional] 
**total_vat_amount** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**total_price_incl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**total_price_excl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


