# PartnerResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The partner&#39;s id. | [optional] 
**created_at** | **string** | When was the partner created in the system. | [optional] 
**updated_at** | **string** | At what date was the partner last updated. | [optional] 
**reserved_at** | **string** | reserved at. | [optional] 
**company_name** | **string** | The company name of the partner. | [optional] 
**is_enabled** | **bool** | Has the partner been disabled. | [optional] [default to false]
**has_subscription** | **bool** | Has the partner an active subscription. | [optional] [default to false]
**state** | **string** | What is the current state of the partner. | [optional] [default to 'unknown']
**access** | **string** | Access information regarding the partner. | [optional] 
**company_information** | **string** | Information regarding the partner company. | [optional] 
**company_information_html** | **string** | Formatted Company Information. | [optional] 
**vat_number** | **string** | Vat information about he company. | [optional] 
**website** | **string** | Website for the partner. | [optional] 
**logo** | **string** | Logo for the partner. | [optional] 
**phone** | **string** | Phone number to contact the partner. | [optional] 
**geo** | [**\Swagger\Client\Model\PartnerGeoResource**](PartnerGeoResource.md) |  | [optional] 
**rating** | [**\Swagger\Client\Model\PartnerRatingResource**](PartnerRatingResource.md) |  | [optional] 
**employee** | [**\Swagger\Client\Model\PartnerEmployeeResource**](PartnerEmployeeResource.md) |  | [optional] 
**subscription_employee** | [**\Swagger\Client\Model\PartnerEmployeeResource**](PartnerEmployeeResource.md) |  | [optional] 
**lead_types** | [**\Swagger\Client\Model\PartnerLeadTypeResource[]**](PartnerLeadTypeResource.md) | Lead Types. | [optional] 
**industry** | [**\Swagger\Client\Model\PartnerIndustryResource**](PartnerIndustryResource.md) |  | [optional] 
**satisfaction** | [**\Swagger\Client\Model\PartnerSatisfactionResource**](PartnerSatisfactionResource.md) |  | [optional] 
**alerts** | [**\Swagger\Client\Model\PartnerAlertResource[]**](PartnerAlertResource.md) | Partner Alerts. | [optional] 
**kpi** | [**\Swagger\Client\Model\PartnerKPIResource**](PartnerKPIResource.md) |  | [optional] 
**invoicing** | [**\Swagger\Client\Model\PartnerInvoicingResource**](PartnerInvoicingResource.md) |  | [optional] 
**preferences** | [**\Swagger\Client\Model\PartnerPreferencesResource**](PartnerPreferencesResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


