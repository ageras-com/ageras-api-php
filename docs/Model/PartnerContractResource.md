# PartnerContractResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The contract ID. | [optional] 
**partner** | [**\Ageras\Api\PartnerContractPartnerResource**](PartnerContractPartnerResource.md) |  | [optional] 
**created_at** | **string** | When the contract was created. | [optional] 
**binding_period_months** | **int** | Number of months contract is bound for, i.e. how often is the contract renewed. | [optional] 
**billing_frequency_months** | **int** | How often is the contract billed. | [optional] 
**allocation_frequency_months** | **int** | How often are the allocations populated. | [optional] 
**cancellation_period_months** | **int** | How many months before contract end can partner cancel. | [optional] 
**accepted_at** | **string** | When the contract was accepted start. | [optional] 
**canceled_at** | **string** | When the contract was canceled. | [optional] 
**has_been_replaced** | **bool** | If the contract has been replaced by another contract. | [optional] [default to false]
**starts_at** | **string** | When the contract should start. | [optional] 
**signed_at** | **string** | When the contract was signed. | [optional] 
**business_units** | [**\Ageras\Api\PartnerContractBusinessUnitResource[]**](PartnerContractBusinessUnitResource.md) | Business units on this contract. | [optional] 
**current_partner_contract_period** | [**\Ageras\Api\PartnerContractPeriodResource**](PartnerContractPeriodResource.md) |  | [optional] 
**churns_at** | **string** | The end date of the last created period on a canceled contract, marking when the contract will truly end. | [optional] 
**intending_to_replace_partner_contract_id** | **int** | ID of the contract that this contract intends to replace. | [optional] 
**replaces_partner_contract_id** | **int** | ID of the contract being replaced by this contract. | [optional] 
**category** | [**\Ageras\Api\PartnerCategoryResource**](PartnerCategoryResource.md) |  | [optional] 
**allocation_pauses** | [**\Ageras\Api\PartnerContractAllocationPauseResource[]**](PartnerContractAllocationPauseResource.md) | List of allocation pauses. | [optional] 
**binding_period_amount_excl_vat** | [**\Ageras\Api\AmountResource**](AmountResource.md) |  | [optional] 
**kpi** | [**\Ageras\Api\PartnerContractKpiResource**](PartnerContractKpiResource.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


