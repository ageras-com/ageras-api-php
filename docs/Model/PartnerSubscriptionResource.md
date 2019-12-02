# PartnerSubscriptionResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Subscription id. | [optional] 
**partner_id** | **int** | The subscribed partner id. | [optional] 
**package_id** | **int** | The package subscribed to. | [optional] 
**payment_solution** | [**\Ageras\Api\PaymentSolutionResource**](PaymentSolutionResource.md) |  | [optional] 
**monthly_price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**current_monthly_price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**starts_at** | **string** | When the package should start. | [optional] 
**expires_at** | **string** |  | [optional] 
**canceled_at** | **string** |  | [optional] 
**created_at** | **string** | Package created at time stamp. | [optional] 
**updated_at** | **string** | Package update at time stamp. | [optional] 
**package_type** | **string** | Package type | [optional] 
**churned_at** | **string** | When the package churned. | [optional] 
**extension_period_months** | **int** | Length of each extension when this package is extended. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


