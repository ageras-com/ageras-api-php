# InvoiceResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Invoice ID. | [optional] 
**parent_id** | **int** | Parent ID. | [optional] 
**status** | **string** | Payment status. | [optional] 
**invoice_number** | **int** | Invoice number. | [optional] 
**type** | **string** | Invoice type. | [optional] 
**geo_code** | **string** | geo code for invoice. | [optional] 
**created_at** | **string** | Invoice created at date. | [optional] 
**updated_at** | **string** | Invoice last update. | [optional] 
**due_at** | **string** | Invoice due date. | [optional] 
**credited_at** | **string** | Invoice has been credited at date. | [optional] 
**paid_at** | **string** | Invoice was paid at date. | [optional] 
**employee_id** | **int** | Invoice created by employee (ID). | [optional] 
**amounts** | **string** | Invoice amount. | [optional] 
**partner_id** | **int** | Invoice for partner ID. | [optional] 
**partner_data** | **string** | Invoice un mutable data. | [optional] 
**on_behalf_of_employee_id** | **int** | Invoice was created in behalf of another employee. | [optional] 
**address** | **string** | Billing address. | [optional] 
**city_name** | **string** | Billing city. | [optional] 
**code** | **string** | Billing code. | [optional] 
**zip_code** | **string** | Billing post code. | [optional] 
**invoice_lines** | [**\Ageras\Api\InvoiceLineResource[]**](InvoiceLineResource.md) | Invoice lines. | [optional] 
**dunning_1** | **string** | Invoice entered in dunning one at. | [optional] 
**dunning_2** | **string** | Invoice entered in dunning two at. | [optional] 
**dunning_3** | **string** | Invoice entered in dunning three at. | [optional] 
**dunning_4** | **string** | Invoice entered in dunning four at. | [optional] 
**dunning_5** | **string** | Invoice entered in dunning five at. | [optional] 
**dunning_6** | **string** | Invoice entered in dunning six at. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


