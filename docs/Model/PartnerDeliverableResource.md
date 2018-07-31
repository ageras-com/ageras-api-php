# PartnerDeliverableResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id for partner deliverable | [optional] 
**created_at** | **string** | created | [optional] 
**updated_at** | **string** | updated | [optional] 
**status** | **string** | status of the deliverable | [optional] [default to 'unknown']
**partner_id** | **int** | partner id | [optional] 
**lead** | [**\Ageras\Api\Model\PartnerDeliverableLeadResource**](PartnerDeliverableLeadResource.md) |  | [optional] 
**description** | **string** | description of the deliverable | [optional] 
**lines** | [**\Ageras\Api\Model\PartnerDeliverableLineResource[]**](PartnerDeliverableLineResource.md) | lines | [optional] 
**attachments** | [**\Ageras\Api\Model\AttachmentResource[]**](AttachmentResource.md) | Attachment to the deliverable like invoices, etc. | [optional] 
**total_vat_amount** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_excl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 
**total_amount_incl_vat** | [**\Ageras\Api\Model\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


