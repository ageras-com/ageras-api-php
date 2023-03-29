# AuthResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | Token provided the by the Ageras API, used to access. | [optional] 
**expires_at** | **string** | The date that the token expires. | [optional] 
**user_id** | **string** | Id for the given user. @deprecated See $employee, $partner_user, $client | [optional] 
**user_type** | **string** | The type of user that currently is associated to the token. | [optional] 
**employee** | [**\Ageras\Api\EmployeeResource**](EmployeeResource.md) |  | [optional] 
**partner_user** | [**\Ageras\Api\PartnerUserResource**](PartnerUserResource.md) |  | [optional] 
**client** | [**\Ageras\Api\ClientResource**](ClientResource.md) |  | [optional] 
**partner_sign_up** | [**\Ageras\Api\PartnerSignUpResource**](PartnerSignUpResource.md) |  | [optional] 
**client_sign_up** | [**\Ageras\Api\ClientSignUpResource**](ClientSignUpResource.md) |  | [optional] 
**email** | **string** | Email for the given user associated with the token. | [optional] 
**password** | **string** | Password used to post when logging in, will always be blank when resource is retrieved from server. | [optional] 
**permissions** | **string[]** | Available permissions | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


