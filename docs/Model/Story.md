# # Story

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | [**\Aylien\NewsApi\Models\Author**](Author.md) |  | [optional] 
**body** | **string** | Body of the story | [optional] 
**categories** | [**\Aylien\NewsApi\Models\Category[]**](Category.md) | Suggested categories for the story | [optional] 
**characters_count** | **int** | Character count of the story body | [optional] 
**clusters** | **int[]** | An array of clusters the story is associated with | [optional] 
**entities** | [**\Aylien\NewsApi\Models\Entities**](Entities.md) |  | [optional] 
**hashtags** | **string[]** | An array of suggested Story hashtags | [optional] 
**id** | **int** | ID of the story which is a unique identification | [optional] 
**keywords** | **string[]** | Extracted keywords mentioned in the story title or body | [optional] 
**language** | **string** | Language of the story | [optional] 
**links** | [**\Aylien\NewsApi\Models\StoryLinks**](StoryLinks.md) |  | [optional] 
**media** | [**\Aylien\NewsApi\Models\Media[]**](Media.md) | An array of extracted media such as images and videos | [optional] 
**paragraphs_count** | **int** | Paragraph count of the story body | [optional] 
**published_at** | [**\DateTime**](\DateTime.md) | Published date of the story | [optional] 
**sentences_count** | **int** | Sentence count of the story body | [optional] 
**sentiment** | [**\Aylien\NewsApi\Models\Sentiments**](Sentiments.md) |  | [optional] 
**social_shares_count** | [**\Aylien\NewsApi\Models\ShareCounts**](ShareCounts.md) |  | [optional] 
**source** | [**\Aylien\NewsApi\Models\Source**](Source.md) |  | [optional] 
**summary** | [**\Aylien\NewsApi\Models\Summary**](Summary.md) |  | [optional] 
**title** | **string** | Title of the story | [optional] 
**translations** | [**\Aylien\NewsApi\Models\StoryTranslations**](StoryTranslations.md) |  | [optional] 
**words_count** | **int** | Word count of the story body | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


