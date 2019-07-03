# PartnerSubscriptionAgreementResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary ID. | [optional] 
**created_by_employee_id** | **int** | Employee who created the agreement. | [optional] 
**subscription_type_id** | **int** | Subscription type this agreement is for. | [optional] 
**subject_to_terms_id** | **int** | Additional terms this agreement includes. | [optional] 
**is_available_for_agreement** | **bool** | Is this agreement available for agreeing? | [optional] [default to false]
**monthly_price** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**agreement_terms** | **string** | Free form text describing the agreement. | [optional] 
**accepted_at** | **string** | When the agreement was accepted. | [optional] 
**accepted_by_partner_user_id** | **int** | Partner user who accepted the agreement. | [optional] 
**created_at** | **string** | Date agreement was created. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


