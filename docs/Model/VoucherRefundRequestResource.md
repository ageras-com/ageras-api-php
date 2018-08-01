# VoucherRefundRequestResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Voucher refund request ID. | [optional] 
**invoice** | [**\Ageras\Api\VoucherRefundRequestVoucherResource**](VoucherRefundRequestVoucherResource.md) |  | [optional] 
**partner** | [**\Ageras\Api\InvoicePartnerResource**](InvoicePartnerResource.md) |  | [optional] 
**partner_user** | [**\Ageras\Api\InvoicePartnerUserResource**](InvoicePartnerUserResource.md) |  | [optional] 
**status** | **string** | Status. | [optional] [default to 'pending']
**request_reason** | **string** | Request reason. | [optional] 
**partner_request_description** | **string** | Request details. | [optional] 
**employee_decision_reason** | **string** | Employee&#39;s reason for their decision. | [optional] 
**requested_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**accepted_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**created_at** | **string** | Created at date. | [optional] 
**updated_at** | **string** | Last update. | [optional] 
**documentation** | **string** | Base64-encoded supporting documentation. | [optional] 
**documentation_url** | **string** | URL to stored documentation file. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


