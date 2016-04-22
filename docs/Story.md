# Story

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the story which is unique identification | [optional] 
**title** | **string** | Title of the story | [optional] 
**body** | **string** | Body of the story | [optional] 
**summary** | [**\Aylien\NewsApi\Models\Summary**](Summary.md) | The suggested story summary | [optional] 
**source** | [**\Aylien\NewsApi\Models\Source**](Source.md) | The story source | [optional] 
**author** | [**\Aylien\NewsApi\Models\Author**](Author.md) | The story author | [optional] 
**entities** | [**\Aylien\NewsApi\Models\Entities**](Entities.md) | Extracted entities from the story title or body | [optional] 
**keywords** | **string[]** | Extracted keywords mentioned in the story title or body | [optional] 
**hashtags** | **string[]** | An array of suggested Story hashtags | [optional] 
**characters_count** | **int** | Characters count of the story body | [optional] 
**words_count** | **int** | Words count of the story body | [optional] 
**sentences_count** | **int** | Sentences count of the story body | [optional] 
**paragraphs_count** | **int** | Paragraphs count of the story body | [optional] 
**categories** | [**\Aylien\NewsApi\Models\Category[]**](Category.md) | Suggested categories for the story | [optional] 
**social_shares_count** | [**\Aylien\NewsApi\Models\ShareCounts**](ShareCounts.md) | Social shares count for the story | [optional] 
**media** | [**\Aylien\NewsApi\Models\Media[]**](Media.md) | An array of extracted media such as images and videos | [optional] 
**sentiment** | [**\Aylien\NewsApi\Models\Sentiments**](Sentiments.md) | Suggested sentiments for the story title or body | [optional] 
**language** | **string** | Language of the story | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | Published date of the story | [optional] 
**links** | [**\Aylien\NewsApi\Models\StoryLinks**](StoryLinks.md) | Links which is related to the story | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


