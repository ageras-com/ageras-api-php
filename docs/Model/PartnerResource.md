# PartnerResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The partner&#39;s id. | [optional] 
**created_at** | **string** | When was the partner created in the system. | [optional] 
**updated_at** | **string** | At what date was the partner last updated. | [optional] 
**reserved_at** | **string** | reserved at. | [optional] 
**company_name** | **string** | The company name of the partner. | [optional] 
**title** | **string** | Partner&#39;s title based on industry | [optional] 
**slug** | **string** | The slug for the given partner | [optional] 
**is_enabled** | **bool** | Has the partner been disabled. | [optional] [default to false]
**is_public** | **bool** | Is it a public partner | [optional] [default to false]
**has_subscription** | **bool** | Has the partner an active subscription. | [optional] [default to false]
**state** | **string** | What is the current state of the partner. | [optional] [default to 'unknown']
**access** | **string** | Access information regarding the partner. | [optional] 
**company_information** | **string** | Information regarding the partner company. | [optional] 
**company_information_html** | **string** | Formatted Company Information. | [optional] 
**vat_number** | **string** | Vat information about he company. | [optional] 
**website** | **string** | Website for the partner. | [optional] 
**logo** | **string** | Logo for the partner. | [optional] 
**phone** | **string** | Phone number to contact the partner. | [optional] 
**geo** | [**\Ageras\Api\Model\PartnerGeoResource**](PartnerGeoResource.md) |  | [optional] 
**rating** | [**\Ageras\Api\Model\PartnerRatingResource**](PartnerRatingResource.md) |  | [optional] 
**employee** | [**\Ageras\Api\Model\PartnerEmployeeResource**](PartnerEmployeeResource.md) |  | [optional] 
**subscription_employee** | [**\Ageras\Api\Model\PartnerEmployeeResource**](PartnerEmployeeResource.md) |  | [optional] 
**lead_types** | [**\Ageras\Api\Model\PartnerLeadTypeResource[]**](PartnerLeadTypeResource.md) | Lead Types. | [optional] 
**industry** | [**\Ageras\Api\Model\PartnerIndustryResource**](PartnerIndustryResource.md) |  | [optional] 
**satisfaction** | [**\Ageras\Api\Model\PartnerSatisfactionResource**](PartnerSatisfactionResource.md) |  | [optional] 
**alerts** | [**\Ageras\Api\Model\PartnerAlertResource[]**](PartnerAlertResource.md) | Partner Alerts. | [optional] 
**kpi** | [**\Ageras\Api\Model\PartnerKPIResource**](PartnerKPIResource.md) |  | [optional] 
**invoicing** | [**\Ageras\Api\Model\PartnerInvoicingResource**](PartnerInvoicingResource.md) |  | [optional] 
**preferences** | [**\Ageras\Api\Model\PartnerPreferencesResource**](PartnerPreferencesResource.md) |  | [optional] 
**demo** | [**\Ageras\Api\Model\PartnerDemoResource**](PartnerDemoResource.md) |  | [optional] 
**canvas** | [**\Ageras\Api\Model\PartnerCanvasResource**](PartnerCanvasResource.md) |  | [optional] 
**tasks** | [**\Ageras\Api\Model\PartnerTasksResource**](PartnerTasksResource.md) |  | [optional] 
**subscription** | [**\Ageras\Api\Model\PartnerSubscriptionResource[]**](PartnerSubscriptionResource.md) | Partner subscription data | [optional] 
**preferred_payment_solution** | [**\Ageras\Api\Model\PaymentSolutionResource**](PaymentSolutionResource.md) |  | [optional] 
**payment_schedule** | **string** | Partner payment schedule | [optional] [default to 'immediate']
**attributes** | [**\Ageras\Api\Model\PartnerAttributeResource[]**](PartnerAttributeResource.md) | Attributes for the partner. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


