# ActivityResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | id for activity. | [optional] 
**created_at** | **string** | Date and time of the creation of the activity. | [optional] 
**geo_code** | **string** | Geo Code for the activity. | [optional] 
**type** | **string** | Type of activity. | [optional] [default to 'unknown']
**invoker** | **string** | Whom did initiate the activity. | [optional] 
**employee** | [**\Swagger\Client\Model\ActivityEmployeeResource**](ActivityEmployeeResource.md) |  | [optional] 
**lead** | [**\Swagger\Client\Model\ActivityLeadResource**](ActivityLeadResource.md) |  | [optional] 
**partner** | [**\Swagger\Client\Model\ActivityPartnerResource**](ActivityPartnerResource.md) |  | [optional] 
**partneruser** | [**\Swagger\Client\Model\ActivityPartnerUserResource**](ActivityPartnerUserResource.md) |  | [optional] 
**call** | [**\Swagger\Client\Model\ActivityCallResource**](ActivityCallResource.md) |  | [optional] 
**note** | [**\Swagger\Client\Model\ActivityNoteResource**](ActivityNoteResource.md) |  | [optional] 
**satisfaction** | [**\Swagger\Client\Model\ActivitySatisfactionResource**](ActivitySatisfactionResource.md) |  | [optional] 
**invoice** | [**\Swagger\Client\Model\ActivityInvoiceResource**](ActivityInvoiceResource.md) |  | [optional] 
**rating** | [**\Swagger\Client\Model\ActivityRatingResource**](ActivityRatingResource.md) |  | [optional] 
**on_behalf_of** | [**\Swagger\Client\Model\ActivityBehalfResource**](ActivityBehalfResource.md) |  | [optional] 
**partner_lead_offer** | [**\Swagger\Client\Model\ActivityPartnerLeadOfferResource**](ActivityPartnerLeadOfferResource.md) |  | [optional] 
**task** | [**\Swagger\Client\Model\ActivityTaskResource**](ActivityTaskResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


