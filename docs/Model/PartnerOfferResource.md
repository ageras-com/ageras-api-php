# PartnerOfferResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Offer ID. | [optional] 
**created_at** | **string** | Offer created at date. | [optional] 
**updated_at** | **string** | Offer updated at date. | [optional] 
**accepted_at** | **string** | Offer accepted at date. | [optional] 
**expires_at** | **string** | Offer expired at date. | [optional] 
**type** | **string** | Offer type. | [optional] [default to 'partner']
**sale_type** | **string** | Sale type. | [optional] 
**name** | **string** | Name. | [optional] 
**punches** | **int** | Offer number of punches. | [optional] 
**due_days** | **int** | Number of days from offer accept to payment is due. | [optional] 
**price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**avg_punch_price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**status** | **string** | Status. | [optional] [default to 'new']
**employee** | [**\Ageras\Api\EmployeeResource**](EmployeeResource.md) |  | [optional] 
**is_activated** | **bool** | Is offer activated. | [optional] [default to false]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


