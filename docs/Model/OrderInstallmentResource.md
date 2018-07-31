# OrderInstallmentResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**type** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**vat** | **float** |  | [optional] 
**amount_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**amount_excl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**amount_incl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**payment_solution** | [**\Ageras\Api\Model\PaymentMethodResource**](PaymentMethodResource.md) |  | [optional] 
**payment_provider** | [**\Ageras\Api\Model\PaymentProviderResource**](PaymentProviderResource.md) |  | [optional] 
**payment_card** | [**\Ageras\Api\Model\PaymentCardResource**](PaymentCardResource.md) |  | [optional] 
**ready_for_payment** | **bool** |  | [optional] [default to false]
**paid_at** | **string** |  | [optional] 
**created_at** | **string** |  | [optional] 
**updated_at** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


