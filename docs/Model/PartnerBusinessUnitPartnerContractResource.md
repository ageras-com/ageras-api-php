# PartnerBusinessUnitPartnerContractResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Primary ID. | [optional] 
**start_at** | **string** | When the contract starts. | [optional] 
**accepted_at** | **string** | When the contract was accepted. | [optional] 
**canceled_at** | **string** | When the contract was canceled. | [optional] 
**churn_at** | **string** | When the contract churns. | [optional] 
**binding_period_months** | **int** | How long the contract last for each contract period. | [optional] 
**billing_frequency_months** | **int** | How many months the partner pays for at a time. | [optional] 
**current_partner_contract_period** | [**\Ageras\Api\PartnerBusinessUnitPartnerContractPeriodResource**](PartnerBusinessUnitPartnerContractPeriodResource.md) |  | [optional] 
**allocation_pauses** | [**\Ageras\Api\DateSpanResource[]**](DateSpanResource.md) | List of allocation pauses. | [optional] 
**business_unit_mrr** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


