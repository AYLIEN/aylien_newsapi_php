# Aylien\NewsApi\DefaultApi

All URIs are relative to *https://api.newsapi.aylien.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAutocompletes**](DefaultApi.md#listAutocompletes) | **GET** /autocompletes | List autocompletes
[**listCoverages**](DefaultApi.md#listCoverages) | **POST** /coverages | List coverages
[**listHistograms**](DefaultApi.md#listHistograms) | **GET** /histograms | List histograms
[**listRelatedStories**](DefaultApi.md#listRelatedStories) | **POST** /related_stories | List related stories
[**listStories**](DefaultApi.md#listStories) | **GET** /stories | List Stories
[**listTimeSeries**](DefaultApi.md#listTimeSeries) | **GET** /time_series | List time series
[**listTrends**](DefaultApi.md#listTrends) | **GET** /trends | List trends


# **listAutocompletes**
> \Aylien\NewsApi\Models\Autocompletes listAutocompletes($type, $term, $opts)

List autocompletes

This endpoint is used for getting list of autocompletes by providing a specific term and type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$type = "type_example"; // string | This parameter is used for defining the type of autocompletes.
$term = "term_example"; // string | This parameter is used for finding autocomplete objects that contain the specified value.
$language = "en"; // string | This parameter is used for autocompletes whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$per_page = 3; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $api_instance->listAutocompletes($type, $term, array(
        'language' => $language,
        'per_page' => $per_page
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAutocompletes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| This parameter is used for defining the type of autocompletes. |
 **term** | **string**| This parameter is used for finding autocomplete objects that contain the specified value. |
 **language** | **string**| This parameter is used for autocompletes whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to en]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

### Return type

[**\Aylien\NewsApi\Models\Autocompletes**](../Model/Autocompletes.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCoverages**
> \Aylien\NewsApi\Models\Coverages listCoverages($opts)

List coverages

This endpoint is used for finding story coverages based on the parameters provided. The maximum number of related stories returned is 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$id = array(56); // int[] | This parameter is used for finding stroies by story id.
$title = "title_example"; // string | This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$body = "body_example"; // string | This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$text = "text_example"; // string | This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$language = array("language_example"); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$published_at_start = "published_at_start_example"; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$published_at_end = "published_at_end_example"; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$categories_taxonomy = "categories_taxonomy_example"; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries.
$categories_confident = true; // bool | This parameter is used for finding stories whose categories are confident.
$categories_id = array("categories_id_example"); // string[] | This parameter is used for finding stories by categories id.
$categories_level = array(56); // int[] | This parameter is used for finding stories by categories level.
$entities_title_text = array("entities_title_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles.
$entities_title_type = array("entities_title_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles.
$entities_title_links_dbpedia = array("entities_title_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles.
$entities_body_text = array("entities_body_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories.
$entities_body_type = array("entities_body_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories.
$entities_body_links_dbpedia = array("entities_body_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories.
$sentiment_title_polarity = "sentiment_title_polarity_example"; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$sentiment_body_polarity = "sentiment_body_polarity_example"; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$media_images_count_min = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$media_images_count_max = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$media_videos_count_min = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$media_videos_count_max = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$author_id = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$author_name = "author_name_example"; // string | This parameter is used for finding stories whose author full name contains the specified value.
$source_id = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$source_name = array("source_name_example"); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$source_domain = array("source_domain_example"); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$source_locations_country = array("source_locations_country_example"); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_state = array("source_locations_state_example"); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_city = array("source_locations_city_example"); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_country = array("source_scopes_country_example"); // string[] | This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_state = array("source_scopes_state_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_city = array("source_scopes_city_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_level = array("source_scopes_level_example"); // string[] | This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_links_in_count_min = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_links_in_count_max = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_rankings_alexa_rank_min = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_rank_max = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_country = array("source_rankings_alexa_country_example"); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$cluster = false; // bool | This parameter enables clustering for the returned stories.
$cluster_algorithm = "lingo"; // string | This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms.
$return = array("return_example"); // string[] | This parameter is used for specifying return fields.
$story_id = 789; // int | A story id
$story_url = "story_url_example"; // string | An article or webpage
$story_title = "story_title_example"; // string | Title of the article
$story_body = "story_body_example"; // string | Body of the article
$story_published_at = new \DateTime(); // \DateTime | Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime).
$story_language = "auto"; // string | This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$per_page = 3; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $api_instance->listCoverages(array(
        'id' => $id,
        'title' => $title,
        'body' => $body,
        'text' => $text,
        'language' => $language,
        'published_at_start' => $published_at_start,
        'published_at_end' => $published_at_end,
        'categories_taxonomy' => $categories_taxonomy,
        'categories_confident' => $categories_confident,
        'categories_id' => $categories_id,
        'categories_level' => $categories_level,
        'entities_title_text' => $entities_title_text,
        'entities_title_type' => $entities_title_type,
        'entities_title_links_dbpedia' => $entities_title_links_dbpedia,
        'entities_body_text' => $entities_body_text,
        'entities_body_type' => $entities_body_type,
        'entities_body_links_dbpedia' => $entities_body_links_dbpedia,
        'sentiment_title_polarity' => $sentiment_title_polarity,
        'sentiment_body_polarity' => $sentiment_body_polarity,
        'media_images_count_min' => $media_images_count_min,
        'media_images_count_max' => $media_images_count_max,
        'media_videos_count_min' => $media_videos_count_min,
        'media_videos_count_max' => $media_videos_count_max,
        'author_id' => $author_id,
        'author_name' => $author_name,
        'source_id' => $source_id,
        'source_name' => $source_name,
        'source_domain' => $source_domain,
        'source_locations_country' => $source_locations_country,
        'source_locations_state' => $source_locations_state,
        'source_locations_city' => $source_locations_city,
        'source_scopes_country' => $source_scopes_country,
        'source_scopes_state' => $source_scopes_state,
        'source_scopes_city' => $source_scopes_city,
        'source_scopes_level' => $source_scopes_level,
        'source_links_in_count_min' => $source_links_in_count_min,
        'source_links_in_count_max' => $source_links_in_count_max,
        'source_rankings_alexa_rank_min' => $source_rankings_alexa_rank_min,
        'source_rankings_alexa_rank_max' => $source_rankings_alexa_rank_max,
        'source_rankings_alexa_country' => $source_rankings_alexa_country,
        'cluster' => $cluster,
        'cluster_algorithm' => $cluster_algorithm,
        'return' => $return,
        'story_id' => $story_id,
        'story_url' => $story_url,
        'story_title' => $story_title,
        'story_body' => $story_body,
        'story_published_at' => $story_published_at,
        'story_language' => $story_language,
        'per_page' => $per_page
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCoverages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stroies by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **cluster** | **bool**| This parameter enables clustering for the returned stories. | [optional] [default to false]
 **cluster_algorithm** | **string**| This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. | [optional] [default to lingo]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **story_id** | **int**| A story id | [optional]
 **story_url** | **string**| An article or webpage | [optional]
 **story_title** | **string**| Title of the article | [optional]
 **story_body** | **string**| Body of the article | [optional]
 **story_published_at** | **\DateTime**| Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime). | [optional]
 **story_language** | **string**| This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to auto]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

### Return type

[**\Aylien\NewsApi\Models\Coverages**](../Model/Coverages.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listHistograms**
> \Aylien\NewsApi\Models\Histograms listHistograms($opts)

List histograms

This endpoint is used for getting histograms based on the `field` parameter passed to the API.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$id = array(56); // int[] | This parameter is used for finding stroies by story id.
$title = "title_example"; // string | This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$body = "body_example"; // string | This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$text = "text_example"; // string | This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$language = array("language_example"); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$published_at_start = "published_at_start_example"; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$published_at_end = "published_at_end_example"; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$categories_taxonomy = "categories_taxonomy_example"; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries.
$categories_confident = true; // bool | This parameter is used for finding stories whose categories are confident.
$categories_id = array("categories_id_example"); // string[] | This parameter is used for finding stories by categories id.
$categories_level = array(56); // int[] | This parameter is used for finding stories by categories level.
$entities_title_text = array("entities_title_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles.
$entities_title_type = array("entities_title_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles.
$entities_title_links_dbpedia = array("entities_title_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles.
$entities_body_text = array("entities_body_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories.
$entities_body_type = array("entities_body_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories.
$entities_body_links_dbpedia = array("entities_body_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories.
$sentiment_title_polarity = "sentiment_title_polarity_example"; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$sentiment_body_polarity = "sentiment_body_polarity_example"; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$media_images_count_min = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$media_images_count_max = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$media_videos_count_min = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$media_videos_count_max = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$author_id = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$author_name = "author_name_example"; // string | This parameter is used for finding stories whose author full name contains the specified value.
$source_id = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$source_name = array("source_name_example"); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$source_domain = array("source_domain_example"); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$source_locations_country = array("source_locations_country_example"); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_state = array("source_locations_state_example"); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_city = array("source_locations_city_example"); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_country = array("source_scopes_country_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_state = array("source_scopes_state_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_city = array("source_scopes_city_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_level = array("source_scopes_level_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_links_in_count_min = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_links_in_count_max = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_rankings_alexa_rank_min = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_rank_max = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_country = array("source_rankings_alexa_country_example"); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$interval_start = 56; // int | This parameter is used for setting the start data point of histogram intervals.
$interval_end = 56; // int | This parameter is used for setting the end data point of histogram intervals.
$interval_width = 56; // int | This parameter is used for setting the width of histogram intervals.
$field = "social_shares_count"; // string | This parameter is used for specifying the y-axis variable for the histogram.

try {
    $result = $api_instance->listHistograms(array(
        'id' => $id,
        'title' => $title,
        'body' => $body,
        'text' => $text,
        'language' => $language,
        'published_at_start' => $published_at_start,
        'published_at_end' => $published_at_end,
        'categories_taxonomy' => $categories_taxonomy,
        'categories_confident' => $categories_confident,
        'categories_id' => $categories_id,
        'categories_level' => $categories_level,
        'entities_title_text' => $entities_title_text,
        'entities_title_type' => $entities_title_type,
        'entities_title_links_dbpedia' => $entities_title_links_dbpedia,
        'entities_body_text' => $entities_body_text,
        'entities_body_type' => $entities_body_type,
        'entities_body_links_dbpedia' => $entities_body_links_dbpedia,
        'sentiment_title_polarity' => $sentiment_title_polarity,
        'sentiment_body_polarity' => $sentiment_body_polarity,
        'media_images_count_min' => $media_images_count_min,
        'media_images_count_max' => $media_images_count_max,
        'media_videos_count_min' => $media_videos_count_min,
        'media_videos_count_max' => $media_videos_count_max,
        'author_id' => $author_id,
        'author_name' => $author_name,
        'source_id' => $source_id,
        'source_name' => $source_name,
        'source_domain' => $source_domain,
        'source_locations_country' => $source_locations_country,
        'source_locations_state' => $source_locations_state,
        'source_locations_city' => $source_locations_city,
        'source_scopes_country' => $source_scopes_country,
        'source_scopes_state' => $source_scopes_state,
        'source_scopes_city' => $source_scopes_city,
        'source_scopes_level' => $source_scopes_level,
        'source_links_in_count_min' => $source_links_in_count_min,
        'source_links_in_count_max' => $source_links_in_count_max,
        'source_rankings_alexa_rank_min' => $source_rankings_alexa_rank_min,
        'source_rankings_alexa_rank_max' => $source_rankings_alexa_rank_max,
        'source_rankings_alexa_country' => $source_rankings_alexa_country,
        'interval_start' => $interval_start,
        'interval_end' => $interval_end,
        'interval_width' => $interval_width,
        'field' => $field,
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listHistograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stroies by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **interval_start** | **int**| This parameter is used for setting the start data point of histogram intervals. | [optional]
 **interval_end** | **int**| This parameter is used for setting the end data point of histogram intervals. | [optional]
 **interval_width** | **int**| This parameter is used for setting the width of histogram intervals. | [optional]
 **field** | **string**| This parameter is used for specifying the y-axis variable for the histogram. | [optional] [default to social_shares_count]

### Return type

[**\Aylien\NewsApi\Models\Histograms**](../Model/Histograms.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listRelatedStories**
> \Aylien\NewsApi\Models\RelatedStories listRelatedStories($opts)

List related stories

This endpoint is used for finding related stories based on the parameters provided. The maximum number of related stories returned is 100.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$id = array(56); // int[] | This parameter is used for finding stroies by story id.
$title = "title_example"; // string | This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$body = "body_example"; // string | This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$text = "text_example"; // string | This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$language = array("language_example"); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$published_at_start = "published_at_start_example"; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$published_at_end = "published_at_end_example"; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$categories_taxonomy = "categories_taxonomy_example"; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries.
$categories_confident = true; // bool | This parameter is used for finding stories whose categories are confident.
$categories_id = array("categories_id_example"); // string[] | This parameter is used for finding stories by categories id.
$categories_level = array(56); // int[] | This parameter is used for finding stories by categories level.
$entities_title_text = array("entities_title_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles.
$entities_title_type = array("entities_title_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles.
$entities_title_links_dbpedia = array("entities_title_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles.
$entities_body_text = array("entities_body_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories.
$entities_body_type = array("entities_body_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories.
$entities_body_links_dbpedia = array("entities_body_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories.
$sentiment_title_polarity = "sentiment_title_polarity_example"; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$sentiment_body_polarity = "sentiment_body_polarity_example"; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$media_images_count_min = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$media_images_count_max = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$media_videos_count_min = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$media_videos_count_max = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$author_id = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$author_name = "author_name_example"; // string | This parameter is used for finding stories whose author full name contains the specified value.
$source_id = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$source_name = array("source_name_example"); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$source_domain = array("source_domain_example"); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$source_locations_country = array("source_locations_country_example"); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_state = array("source_locations_state_example"); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_city = array("source_locations_city_example"); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_country = array("source_scopes_country_example"); // string[] | This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_state = array("source_scopes_state_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_city = array("source_scopes_city_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_level = array("source_scopes_level_example"); // string[] | This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_links_in_count_min = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_links_in_count_max = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_rankings_alexa_rank_min = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_rank_max = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_country = array("source_rankings_alexa_country_example"); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$cluster = false; // bool | This parameter enables clustering for the returned stories.
$cluster_algorithm = "lingo"; // string | This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms.
$return = array("return_example"); // string[] | This parameter is used for specifying return fields.
$story_id = 789; // int | A story id
$story_url = "story_url_example"; // string | An article or webpage
$story_title = "story_title_example"; // string | Title of the article
$story_body = "story_body_example"; // string | Body of the article
$boost_by = "boost_by_example"; // string | This parameter is used for boosting the result by the specified value.
$story_language = "auto"; // string | This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$per_page = 3; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $api_instance->listRelatedStories(array(
        'id' => $id,
        'title' => $title,
        'body' => $body,
        'text' => $text,
        'language' => $language,
        'published_at_start' => $published_at_start,
        'published_at_end' => $published_at_end,
        'categories_taxonomy' => $categories_taxonomy,
        'categories_confident' => $categories_confident,
        'categories_id' => $categories_id,
        'categories_level' => $categories_level,
        'entities_title_text' => $entities_title_text,
        'entities_title_type' => $entities_title_type,
        'entities_title_links_dbpedia' => $entities_title_links_dbpedia,
        'entities_body_text' => $entities_body_text,
        'entities_body_type' => $entities_body_type,
        'entities_body_links_dbpedia' => $entities_body_links_dbpedia,
        'sentiment_title_polarity' => $sentiment_title_polarity,
        'sentiment_body_polarity' => $sentiment_body_polarity,
        'media_images_count_min' => $media_images_count_min,
        'media_images_count_max' => $media_images_count_max,
        'media_videos_count_min' => $media_videos_count_min,
        'media_videos_count_max' => $media_videos_count_max,
        'author_id' => $author_id,
        'author_name' => $author_name,
        'source_id' => $source_id,
        'source_name' => $source_name,
        'source_domain' => $source_domain,
        'source_locations_country' => $source_locations_country,
        'source_locations_state' => $source_locations_state,
        'source_locations_city' => $source_locations_city,
        'source_scopes_country' => $source_scopes_country,
        'source_scopes_state' => $source_scopes_state,
        'source_scopes_city' => $source_scopes_city,
        'source_scopes_level' => $source_scopes_level,
        'source_links_in_count_min' => $source_links_in_count_min,
        'source_links_in_count_max' => $source_links_in_count_max,
        'source_rankings_alexa_rank_min' => $source_rankings_alexa_rank_min,
        'source_rankings_alexa_rank_max' => $source_rankings_alexa_rank_max,
        'source_rankings_alexa_country' => $source_rankings_alexa_country,
        'cluster' => $cluster,
        'cluster_algorithm' => $cluster_algorithm,
        'return' => $return,
        'story_id' => $story_id,
        'story_url' => $story_url,
        'story_title' => $story_title,
        'story_body' => $story_body,
        'boost_by' => $boost_by,
        'story_language' => $story_language,
        'per_page' => $per_page
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRelatedStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stroies by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **cluster** | **bool**| This parameter enables clustering for the returned stories. | [optional] [default to false]
 **cluster_algorithm** | **string**| This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. | [optional] [default to lingo]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **story_id** | **int**| A story id | [optional]
 **story_url** | **string**| An article or webpage | [optional]
 **story_title** | **string**| Title of the article | [optional]
 **story_body** | **string**| Body of the article | [optional]
 **boost_by** | **string**| This parameter is used for boosting the result by the specified value. | [optional]
 **story_language** | **string**| This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to auto]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

### Return type

[**\Aylien\NewsApi\Models\RelatedStories**](../Model/RelatedStories.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStories**
> \Aylien\NewsApi\Models\Stories listStories($opts)

List Stories

This endpoint is used for getting a list of stories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$id = array(56); // int[] | This parameter is used for finding stroies by story id.
$title = "title_example"; // string | This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$body = "body_example"; // string | This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$text = "text_example"; // string | This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$language = array("language_example"); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$published_at_start = "published_at_start_example"; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$published_at_end = "published_at_end_example"; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$categories_taxonomy = "categories_taxonomy_example"; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries.
$categories_confident = true; // bool | This parameter is used for finding stories whose categories are confident.
$categories_id = array("categories_id_example"); // string[] | This parameter is used for finding stories by categories id.
$categories_level = array(56); // int[] | This parameter is used for finding stories by categories level.
$entities_title_text = array("entities_title_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles.
$entities_title_type = array("entities_title_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles.
$entities_title_links_dbpedia = array("entities_title_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles.
$entities_body_text = array("entities_body_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories.
$entities_body_type = array("entities_body_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories.
$entities_body_links_dbpedia = array("entities_body_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories.
$sentiment_title_polarity = "sentiment_title_polarity_example"; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$sentiment_body_polarity = "sentiment_body_polarity_example"; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$media_images_count_min = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$media_images_count_max = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$media_videos_count_min = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$media_videos_count_max = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$author_id = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$author_name = "author_name_example"; // string | This parameter is used for finding stories whose author full name contains the specified value.
$source_id = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$source_name = array("source_name_example"); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$source_domain = array("source_domain_example"); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$source_locations_country = array("source_locations_country_example"); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_state = array("source_locations_state_example"); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_city = array("source_locations_city_example"); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_country = array("source_scopes_country_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_state = array("source_scopes_state_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_city = array("source_scopes_city_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_level = array("source_scopes_level_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_links_in_count_min = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_links_in_count_max = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_rankings_alexa_rank_min = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_rank_max = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_country = array("source_rankings_alexa_country_example"); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$cluster = false; // bool | This parameter enables clustering for the returned stories.
$cluster_algorithm = "lingo"; // string | This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms.
$return = array("return_example"); // string[] | This parameter is used for specifying return fields.
$sort_by = "published_at"; // string | This parameter is used for changing the order column of the results.
$sort_direction = "desc"; // string | This parameter is used for changing the order direction of the result.
$cursor = "*"; // string | This parameter is used for finding a specific page.
$per_page = 10; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $api_instance->listStories(array(
        'id' => $id,
        'title' => $title,
        'body' => $body,
        'text' => $text,
        'language' => $language,
        'published_at_start' => $published_at_start,
        'published_at_end' => $published_at_end,
        'categories_taxonomy' => $categories_taxonomy,
        'categories_confident' => $categories_confident,
        'categories_id' => $categories_id,
        'categories_level' => $categories_level,
        'entities_title_text' => $entities_title_text,
        'entities_title_type' => $entities_title_type,
        'entities_title_links_dbpedia' => $entities_title_links_dbpedia,
        'entities_body_text' => $entities_body_text,
        'entities_body_type' => $entities_body_type,
        'entities_body_links_dbpedia' => $entities_body_links_dbpedia,
        'sentiment_title_polarity' => $sentiment_title_polarity,
        'sentiment_body_polarity' => $sentiment_body_polarity,
        'media_images_count_min' => $media_images_count_min,
        'media_images_count_max' => $media_images_count_max,
        'media_videos_count_min' => $media_videos_count_min,
        'media_videos_count_max' => $media_videos_count_max,
        'author_id' => $author_id,
        'author_name' => $author_name,
        'source_id' => $source_id,
        'source_name' => $source_name,
        'source_domain' => $source_domain,
        'source_locations_country' => $source_locations_country,
        'source_locations_state' => $source_locations_state,
        'source_locations_city' => $source_locations_city,
        'source_scopes_country' => $source_scopes_country,
        'source_scopes_state' => $source_scopes_state,
        'source_scopes_city' => $source_scopes_city,
        'source_scopes_level' => $source_scopes_level,
        'source_links_in_count_min' => $source_links_in_count_min,
        'source_links_in_count_max' => $source_links_in_count_max,
        'source_rankings_alexa_rank_min' => $source_rankings_alexa_rank_min,
        'source_rankings_alexa_rank_max' => $source_rankings_alexa_rank_max,
        'source_rankings_alexa_country' => $source_rankings_alexa_country,
        'cluster' => $cluster,
        'cluster_algorithm' => $cluster_algorithm,
        'return' => $return,
        'sort_by' => $sort_by,
        'sort_direction' => $sort_direction,
        'cursor' => $cursor,
        'per_page' => $per_page
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stroies by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **cluster** | **bool**| This parameter enables clustering for the returned stories. | [optional] [default to false]
 **cluster_algorithm** | **string**| This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. | [optional] [default to lingo]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **sort_by** | **string**| This parameter is used for changing the order column of the results. | [optional] [default to published_at]
 **sort_direction** | **string**| This parameter is used for changing the order direction of the result. | [optional] [default to desc]
 **cursor** | **string**| This parameter is used for finding a specific page. | [optional] [default to *]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 10]

### Return type

[**\Aylien\NewsApi\Models\Stories**](../Model/Stories.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTimeSeries**
> \Aylien\NewsApi\Models\TimeSeriesList listTimeSeries($opts)

List time series

This endpoint is used for getting time series by stories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$id = array(56); // int[] | This parameter is used for finding stroies by story id.
$title = "title_example"; // string | This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$body = "body_example"; // string | This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$text = "text_example"; // string | This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$language = array("language_example"); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$categories_taxonomy = "categories_taxonomy_example"; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries.
$categories_confident = true; // bool | This parameter is used for finding stories whose categories are confident.
$categories_id = array("categories_id_example"); // string[] | This parameter is used for finding stories by categories id.
$categories_level = array(56); // int[] | This parameter is used for finding stories by categories level.
$entities_title_text = array("entities_title_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles.
$entities_title_type = array("entities_title_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles.
$entities_title_links_dbpedia = array("entities_title_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles.
$entities_body_text = array("entities_body_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories.
$entities_body_type = array("entities_body_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories.
$entities_body_links_dbpedia = array("entities_body_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories.
$sentiment_title_polarity = "sentiment_title_polarity_example"; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$sentiment_body_polarity = "sentiment_body_polarity_example"; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$media_images_count_min = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$media_images_count_max = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$media_videos_count_min = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$media_videos_count_max = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$author_id = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$author_name = "author_name_example"; // string | This parameter is used for finding stories whose author full name contains the specified value.
$source_id = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$source_name = array("source_name_example"); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$source_domain = array("source_domain_example"); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$source_locations_country = array("source_locations_country_example"); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_state = array("source_locations_state_example"); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_city = array("source_locations_city_example"); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_country = array("source_scopes_country_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_state = array("source_scopes_state_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_city = array("source_scopes_city_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_level = array("source_scopes_level_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_links_in_count_min = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_links_in_count_max = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_rankings_alexa_rank_min = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_rank_max = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_country = array("source_rankings_alexa_country_example"); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$published_at_start = "NOW-7DAYS/DAY"; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$published_at_end = "NOW/DAY"; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$period = "+1DAY"; // string | The size of each date range is expressed as an interval to be added to the lower bound. It supports Date Math Syntax. Valid options are `+` following an integer number greater than 0 and one of the Date Math keywords. e.g. `+1DAY`, `+2MINUTES` and `+1MONTH`. Here are [Supported keywords](https://newsapi.aylien.com/docs/working-with-dates#date-math).

try {
    $result = $api_instance->listTimeSeries(array(
        'id' => $id,
        'title' => $title,
        'body' => $body,
        'text' => $text,
        'language' => $language,
        'categories_taxonomy' => $categories_taxonomy,
        'categories_confident' => $categories_confident,
        'categories_id' => $categories_id,
        'categories_level' => $categories_level,
        'entities_title_text' => $entities_title_text,
        'entities_title_type' => $entities_title_type,
        'entities_title_links_dbpedia' => $entities_title_links_dbpedia,
        'entities_body_text' => $entities_body_text,
        'entities_body_type' => $entities_body_type,
        'entities_body_links_dbpedia' => $entities_body_links_dbpedia,
        'sentiment_title_polarity' => $sentiment_title_polarity,
        'sentiment_body_polarity' => $sentiment_body_polarity,
        'media_images_count_min' => $media_images_count_min,
        'media_images_count_max' => $media_images_count_max,
        'media_videos_count_min' => $media_videos_count_min,
        'media_videos_count_max' => $media_videos_count_max,
        'author_id' => $author_id,
        'author_name' => $author_name,
        'source_id' => $source_id,
        'source_name' => $source_name,
        'source_domain' => $source_domain,
        'source_locations_country' => $source_locations_country,
        'source_locations_state' => $source_locations_state,
        'source_locations_city' => $source_locations_city,
        'source_scopes_country' => $source_scopes_country,
        'source_scopes_state' => $source_scopes_state,
        'source_scopes_city' => $source_scopes_city,
        'source_scopes_level' => $source_scopes_level,
        'source_links_in_count_min' => $source_links_in_count_min,
        'source_links_in_count_max' => $source_links_in_count_max,
        'source_rankings_alexa_rank_min' => $source_rankings_alexa_rank_min,
        'source_rankings_alexa_rank_max' => $source_rankings_alexa_rank_max,
        'source_rankings_alexa_country' => $source_rankings_alexa_country,
        'published_at_start' => $published_at_start,
        'published_at_end' => $published_at_end,
        'period' => $period
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTimeSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stroies by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional] [default to NOW-7DAYS/DAY]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional] [default to NOW/DAY]
 **period** | **string**| The size of each date range is expressed as an interval to be added to the lower bound. It supports Date Math Syntax. Valid options are &#x60;+&#x60; following an integer number greater than 0 and one of the Date Math keywords. e.g. &#x60;+1DAY&#x60;, &#x60;+2MINUTES&#x60; and &#x60;+1MONTH&#x60;. Here are [Supported keywords](https://newsapi.aylien.com/docs/working-with-dates#date-math). | [optional] [default to +1DAY]

### Return type

[**\Aylien\NewsApi\Models\TimeSeriesList**](../Model/TimeSeriesList.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listTrends**
> \Aylien\NewsApi\Models\Trends listTrends($opts)

List trends

This endpoint is used for finding trends based on stories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$id = array(56); // int[] | This parameter is used for finding stroies by story id.
$title = "title_example"; // string | This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$body = "body_example"; // string | This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$text = "text_example"; // string | This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$language = array("language_example"); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$published_at_start = "published_at_start_example"; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$published_at_end = "published_at_end_example"; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$categories_taxonomy = "categories_taxonomy_example"; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries.
$categories_confident = true; // bool | This parameter is used for finding stories whose categories are confident.
$categories_id = array("categories_id_example"); // string[] | This parameter is used for finding stories by categories id.
$categories_level = array(56); // int[] | This parameter is used for finding stories by categories level.
$entities_title_text = array("entities_title_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles.
$entities_title_type = array("entities_title_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles.
$entities_title_links_dbpedia = array("entities_title_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles.
$entities_body_text = array("entities_body_text_example"); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories.
$entities_body_type = array("entities_body_type_example"); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories.
$entities_body_links_dbpedia = array("entities_body_links_dbpedia_example"); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories.
$sentiment_title_polarity = "sentiment_title_polarity_example"; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$sentiment_body_polarity = "sentiment_body_polarity_example"; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$media_images_count_min = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$media_images_count_max = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$media_videos_count_min = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$media_videos_count_max = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$author_id = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$author_name = "author_name_example"; // string | This parameter is used for finding stories whose author full name contains the specified value.
$source_id = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$source_name = array("source_name_example"); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$source_domain = array("source_domain_example"); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$source_locations_country = array("source_locations_country_example"); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_state = array("source_locations_state_example"); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_locations_city = array("source_locations_city_example"); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_country = array("source_scopes_country_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_state = array("source_scopes_state_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_city = array("source_scopes_city_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_scopes_level = array("source_scopes_level_example"); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$source_links_in_count_min = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_links_in_count_max = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count).
$source_rankings_alexa_rank_min = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_rank_max = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$source_rankings_alexa_country = array("source_rankings_alexa_country_example"); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$field = "field_example"; // string | This parameter is used to specify the trend field.

try {
    $result = $api_instance->listTrends(array(
        'id' => $id,
        'title' => $title,
        'body' => $body,
        'text' => $text,
        'language' => $language,
        'published_at_start' => $published_at_start,
        'published_at_end' => $published_at_end,
        'categories_taxonomy' => $categories_taxonomy,
        'categories_confident' => $categories_confident,
        'categories_id' => $categories_id,
        'categories_level' => $categories_level,
        'entities_title_text' => $entities_title_text,
        'entities_title_type' => $entities_title_type,
        'entities_title_links_dbpedia' => $entities_title_links_dbpedia,
        'entities_body_text' => $entities_body_text,
        'entities_body_type' => $entities_body_type,
        'entities_body_links_dbpedia' => $entities_body_links_dbpedia,
        'sentiment_title_polarity' => $sentiment_title_polarity,
        'sentiment_body_polarity' => $sentiment_body_polarity,
        'media_images_count_min' => $media_images_count_min,
        'media_images_count_max' => $media_images_count_max,
        'media_videos_count_min' => $media_videos_count_min,
        'media_videos_count_max' => $media_videos_count_max,
        'author_id' => $author_id,
        'author_name' => $author_name,
        'source_id' => $source_id,
        'source_name' => $source_name,
        'source_domain' => $source_domain,
        'source_locations_country' => $source_locations_country,
        'source_locations_state' => $source_locations_state,
        'source_locations_city' => $source_locations_city,
        'source_scopes_country' => $source_scopes_country,
        'source_scopes_state' => $source_scopes_state,
        'source_scopes_city' => $source_scopes_city,
        'source_scopes_level' => $source_scopes_level,
        'source_links_in_count_min' => $source_links_in_count_min,
        'source_links_in_count_max' => $source_links_in_count_max,
        'source_rankings_alexa_rank_min' => $source_rankings_alexa_rank_min,
        'source_rankings_alexa_rank_max' => $source_rankings_alexa_rank_max,
        'source_rankings_alexa_country' => $source_rankings_alexa_country,
        'field' => $field
    ));
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTrends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stroies by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count here [https://newsapi.aylien.com/docs/working-with-links-in-count](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks here [https://newsapi.aylien.com/docs/working-with-alexa-ranks](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **field** | **string**| This parameter is used to specify the trend field. | [optional]

### Return type

[**\Aylien\NewsApi\Models\Trends**](../Model/Trends.md)

### Authorization

[app_key](../../README.md#app_key), [app_id](../../README.md#app_id)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
