# EmployeeResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id for the Employee. | [optional] 
**sort** | **string** | Sort the employee. | [optional] 
**name** | **string** | Employees name. | [optional] 
**title** | **string** | Title for the employee. | [optional] 
**external_job_title** | **string** | Job title shown to clients and partners. | [optional] 
**geo_code** | **string** | Location for the employee. | [optional] 
**wanted_geo_code** | **string** | Wanted geo code. | [optional] 
**image** | **string** | Photo of the employee. | [optional] 
**email** | **string** | Email for the employee. | [optional] 
**phone_work** | **string** | Work Phone Number for the employee. | [optional] 
**phone_private** | **string** | Private Phone Number for employee. | [optional] 
**signature** | [**\Ageras\Api\EmployeeSignatureResource**](EmployeeSignatureResource.md) |  | [optional] 
**roles** | [**\Ageras\Api\EmployeeRoleResource[]**](EmployeeRoleResource.md) | The list of roles that the employee is member of. | [optional] 
**initials** | **string** | Employee Initials. | [optional] 
**is_active** | **bool** | Is the Employee active ? | [optional] [default to false]
**current_call_activity** | [**\Ageras\Api\EmployeeCurrentCallActivityResource**](EmployeeCurrentCallActivityResource.md) |  | [optional] 
**social** | [**\Ageras\Api\EmployeeSocialResource**](EmployeeSocialResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


