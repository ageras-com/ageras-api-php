# RatingResource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Review ID. | [optional] 
**partner** | [**\Ageras\Api\PartnerSuggestResource**](PartnerSuggestResource.md) |  | [optional] 
**name** | **string** | Name of the person who wrote the review. | [optional] 
**score** | [**\Ageras\Api\RatingScoreResource**](RatingScoreResource.md) |  | [optional] 
**stars** | **int** | Stars for the given rating | [optional] 
**reply** | [**\Ageras\Api\RatingReplyResource**](RatingReplyResource.md) |  | [optional] 
**title** | **string** | Title of the review. | [optional] 
**comment** | **string** | The comment left by the reviewer. | [optional] 
**created_at** | **string** | Time of creation of the rating. | [optional] 
**updated_at** | **string** | Time of last update. | [optional] 
**deleted_at** | **string** | Time of deletion. | [optional] 
**is_approved** | **bool** | Is the rating approved? | [optional] [default to false]
**is_active** | **bool** | Is the rating active? | [optional] [default to false]
**is_validated** | **bool** | Is the rating validated? | [optional] [default to false]
**is_featured** | **bool** | Is the rating featured? | [optional] [default to false]
**featured_at** | **string** | If the rating is featured, the time the rating was featured. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


