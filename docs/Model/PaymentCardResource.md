# PaymentCardResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | User Id. | [optional] 
**owner** | [**\Ageras\Api\PaymentCardOwnerResource**](PaymentCardOwnerResource.md) |  | [optional] 
**provider** | [**\Ageras\Api\PaymentProviderResource**](PaymentProviderResource.md) |  | [optional] 
**card_name** | **string** | Card name. | [optional] 
**card_type** | **string** | Type of card | [optional] 
**card_mask** | **string** | Card mask. | [optional] 
**expiration** | [**\Ageras\Api\PaymentCardExpirationResource**](PaymentCardExpirationResource.md) |  | [optional] 
**is_being_used** | **bool** | Is payment card is being used in any package. | [optional] [default to false]
**data** | [**\Ageras\Api\PaymentCardDataResource**](PaymentCardDataResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


