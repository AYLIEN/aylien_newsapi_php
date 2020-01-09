# Aylien\NewsApi\DefaultApi

All URIs are relative to *https://api.aylien.com/news*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listAutocompletes**](DefaultApi.md#listAutocompletes) | **GET** /autocompletes | List autocompletes
[**listClusters**](DefaultApi.md#listClusters) | **GET** /clusters | List Clusters
[**listCoverages**](DefaultApi.md#listCoverages) | **GET** /coverages | List coverages
[**listHistograms**](DefaultApi.md#listHistograms) | **GET** /histograms | List histograms
[**listRelatedStories**](DefaultApi.md#listRelatedStories) | **GET** /related_stories | List related stories
[**listStories**](DefaultApi.md#listStories) | **GET** /stories | List Stories
[**listTimeSeries**](DefaultApi.md#listTimeSeries) | **GET** /time_series | List time series
[**listTrends**](DefaultApi.md#listTrends) | **GET** /trends | List trends



## listAutocompletes

> \Aylien\NewsApi\Models\Autocompletes listAutocompletes($type, $term, $language, $per_page)

List autocompletes

The autocompletes endpoint a string of characters provided to it, and then returns suggested terms that are the most likely full words or strings. The terms returned by the News API are based on parameters the type parameters you can see below. For example, if you provide the autocompletes endpoint with the term `New York C` and select the type `dbpedia_resources`, the API will return links to the DBpedia resources `New_York_City`, `New_York_City_Subway`, `New_York_City_Police_Department`, and so on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['type'] = source_names; // string | This parameter is used for defining the type of autocompletes.
$associate_array['term'] = News; // string | This parameter is used for finding autocomplete objects that contain the specified value.
$associate_array['language'] = 'en'; // string | This parameter is used for autocompletes whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['per_page'] = 3; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $apiInstance->listAutocompletes($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAutocompletes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| This parameter is used for defining the type of autocompletes. |
 **term** | **string**| This parameter is used for finding autocomplete objects that contain the specified value. |
 **language** | **string**| This parameter is used for autocompletes whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to &#39;en&#39;]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

### Return type

[**\Aylien\NewsApi\Models\Autocompletes**](../Model/Autocompletes.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listClusters

> \Aylien\NewsApi\Models\Clusters listClusters($id, $not_id, $story_count_min, $story_count_max, $time_start, $time_end, $earliest_story_start, $earliest_story_end, $latest_story_start, $latest_story_end, $location_country, $not_location_country)

List Clusters

The clusters endpoint is used to return clusters based on parameters you set in your query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = array(56); // int[] | This parameter is used for finding clusters by cluster id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding clusters by cluster id.
$associate_array['story_count_min'] = 56; // int | This parameter is used for finding clusters with more than or equal to a specific amount of stories associated with them.
$associate_array['story_count_max'] = 56; // int | This parameter is used for finding clusters with less than or equal to a specific amount of stories associated with them.
$associate_array['time_start'] = 'time_start_example'; // string | This parameter is used for finding clusters whose creation time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['time_end'] = 'time_end_example'; // string | This parameter is used for finding clusters whose creation time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['earliest_story_start'] = 'earliest_story_start_example'; // string | This parameter is used for finding clusters whose publication date of its earliest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['earliest_story_end'] = 'earliest_story_end_example'; // string | This parameter is used for finding clusters whose publication date of its earliest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['latest_story_start'] = 'latest_story_start_example'; // string | This parameter is used for finding clusters whose publication date of its latest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['latest_story_end'] = 'latest_story_end_example'; // string | This parameter is used for finding clusters whose publication date of its latest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['location_country'] = array('location_country_example'); // string[] | This parameter is used for finding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_location_country'] = array('location_country_example'); // string[] | This parameter is used for excluding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).

try {
    $result = $apiInstance->listClusters($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listClusters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding clusters by cluster id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding clusters by cluster id. | [optional]
 **story_count_min** | **int**| This parameter is used for finding clusters with more than or equal to a specific amount of stories associated with them. | [optional]
 **story_count_max** | **int**| This parameter is used for finding clusters with less than or equal to a specific amount of stories associated with them. | [optional]
 **time_start** | **string**| This parameter is used for finding clusters whose creation time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **time_end** | **string**| This parameter is used for finding clusters whose creation time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **earliest_story_start** | **string**| This parameter is used for finding clusters whose publication date of its earliest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **earliest_story_end** | **string**| This parameter is used for finding clusters whose publication date of its earliest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **latest_story_start** | **string**| This parameter is used for finding clusters whose publication date of its latest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **latest_story_end** | **string**| This parameter is used for finding clusters whose publication date of its latest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **location_country** | [**string[]**](../Model/string.md)| This parameter is used for finding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_location_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]

### Return type

[**\Aylien\NewsApi\Models\Clusters**](../Model/Clusters.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listCoverages

> \Aylien\NewsApi\Models\Coverages listCoverages($id, $not_id, $title, $body, $text, $translations_en_title, $translations_en_body, $translations_en_text, $links_permalink, $not_links_permalink, $language, $not_language, $published_at_start, $published_at_end, $categories_taxonomy, $categories_confident, $categories_id, $not_categories_id, $categories_level, $not_categories_level, $entities_title_text, $not_entities_title_text, $entities_title_type, $not_entities_title_type, $entities_title_links_dbpedia, $not_entities_title_links_dbpedia, $entities_body_text, $not_entities_body_text, $entities_body_type, $not_entities_body_type, $entities_body_links_dbpedia, $not_entities_body_links_dbpedia, $sentiment_title_polarity, $not_sentiment_title_polarity, $sentiment_body_polarity, $not_sentiment_body_polarity, $media_images_count_min, $media_images_count_max, $media_images_width_min, $media_images_width_max, $media_images_height_min, $media_images_height_max, $media_images_content_length_min, $media_images_content_length_max, $media_images_format, $not_media_images_format, $media_videos_count_min, $media_videos_count_max, $author_id, $not_author_id, $author_name, $not_author_name, $source_id, $not_source_id, $source_name, $not_source_name, $source_domain, $not_source_domain, $source_locations_country, $not_source_locations_country, $source_locations_state, $not_source_locations_state, $source_locations_city, $not_source_locations_city, $source_scopes_country, $not_source_scopes_country, $source_scopes_state, $not_source_scopes_state, $source_scopes_city, $not_source_scopes_city, $source_scopes_level, $not_source_scopes_level, $source_links_in_count_min, $source_links_in_count_max, $source_rankings_alexa_rank_min, $source_rankings_alexa_rank_max, $source_rankings_alexa_country, $social_shares_count_facebook_min, $social_shares_count_facebook_max, $social_shares_count_google_plus_min, $social_shares_count_google_plus_max, $social_shares_count_linkedin_min, $social_shares_count_linkedin_max, $social_shares_count_reddit_min, $social_shares_count_reddit_max, $clusters, $return, $story_id, $story_url, $story_title, $story_body, $story_published_at, $story_language, $per_page)

List coverages

The coverages endpoint allows you to understand the reach a document has had. For example, you can track the coverage of a press release or a Tweet based on how many times it has been mentioned in stories.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = array(56); // int[] | This parameter is used for finding stories by story id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_title'] = 'translations_en_title_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_body'] = 'translations_en_body_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_text'] = 'translations_en_text_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to find stories based on their url.
$associate_array['not_links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to exclude stories based on their url.
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['not_language'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['published_at_start'] = 'published_at_start_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['published_at_end'] = 'published_at_end_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categories_taxonomy'] = 'categories_taxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_confident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_id'] = array('categories_id_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_id'] = array('categories_id_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_level'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_level'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['not_sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['not_sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['media_images_count_min'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['media_images_count_max'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['media_images_width_min'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['media_images_width_max'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['media_images_height_min'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['media_images_height_max'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['media_images_content_length_min'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['media_images_content_length_max'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['not_media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['media_videos_count_min'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['media_videos_count_max'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['author_id'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['not_author_id'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['author_name'] = 'author_name_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['not_author_name'] = 'author_name_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['source_id'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['not_source_id'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['source_name'] = array('source_name_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['not_source_name'] = array('source_name_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['source_domain'] = array('source_domain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['not_source_domain'] = array('source_domain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_links_in_count_min'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_links_in_count_max'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_rankings_alexa_rank_min'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_rank_max'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_country'] = array('source_rankings_alexa_country_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['social_shares_count_facebook_min'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_facebook_max'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_google_plus_min'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_google_plus_max'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_linkedin_min'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_linkedin_max'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_reddit_min'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_reddit_max'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['clusters'] = array('clusters_example'); // string[] | This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering).
$associate_array['return'] = array('return_example'); // string[] | This parameter is used for specifying return fields.
$associate_array['story_id'] = 56; // int | A story id
$associate_array['story_url'] = 'story_url_example'; // string | An article or webpage
$associate_array['story_title'] = 'story_title_example'; // string | Title of the article
$associate_array['story_body'] = 'story_body_example'; // string | Body of the article
$associate_array['story_published_at'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime).
$associate_array['story_language'] = 'auto'; // string | This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['per_page'] = 3; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $apiInstance->listCoverages($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCoverages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by story id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_title** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_body** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_text** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on their url. | [optional]
 **not_links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on their url. | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **not_language** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_id** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_level** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **not_sentiment_title_polarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **not_sentiment_body_polarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_images_width_min** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **media_images_width_max** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **media_images_height_min** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **media_images_height_max** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **media_images_content_length_min** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **media_images_content_length_max** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **not_media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **not_author_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **not_author_name** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **not_source_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **not_source_name** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **not_source_domain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **social_shares_count_facebook_min** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_facebook_max** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_min** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_max** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_min** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_max** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_reddit_min** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_reddit_max** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **clusters** | [**string[]**](../Model/string.md)| This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). | [optional]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **story_id** | **int**| A story id | [optional]
 **story_url** | **string**| An article or webpage | [optional]
 **story_title** | **string**| Title of the article | [optional]
 **story_body** | **string**| Body of the article | [optional]
 **story_published_at** | **\DateTime**| Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime). | [optional]
 **story_language** | **string**| This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to &#39;auto&#39;]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

### Return type

[**\Aylien\NewsApi\Models\Coverages**](../Model/Coverages.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listHistograms

> \Aylien\NewsApi\Models\Histograms listHistograms($id, $not_id, $title, $body, $text, $translations_en_title, $translations_en_body, $translations_en_text, $links_permalink, $not_links_permalink, $language, $not_language, $published_at_start, $published_at_end, $categories_taxonomy, $categories_confident, $categories_id, $not_categories_id, $categories_level, $not_categories_level, $entities_title_text, $not_entities_title_text, $entities_title_type, $not_entities_title_type, $entities_title_links_dbpedia, $not_entities_title_links_dbpedia, $entities_body_text, $not_entities_body_text, $entities_body_type, $not_entities_body_type, $entities_body_links_dbpedia, $not_entities_body_links_dbpedia, $sentiment_title_polarity, $not_sentiment_title_polarity, $sentiment_body_polarity, $not_sentiment_body_polarity, $media_images_count_min, $media_images_count_max, $media_images_width_min, $media_images_width_max, $media_images_height_min, $media_images_height_max, $media_images_content_length_min, $media_images_content_length_max, $media_images_format, $not_media_images_format, $media_videos_count_min, $media_videos_count_max, $author_id, $not_author_id, $author_name, $not_author_name, $source_id, $not_source_id, $source_name, $not_source_name, $source_domain, $not_source_domain, $source_locations_country, $not_source_locations_country, $source_locations_state, $not_source_locations_state, $source_locations_city, $not_source_locations_city, $source_scopes_country, $not_source_scopes_country, $source_scopes_state, $not_source_scopes_state, $source_scopes_city, $not_source_scopes_city, $source_scopes_level, $not_source_scopes_level, $source_links_in_count_min, $source_links_in_count_max, $source_rankings_alexa_rank_min, $source_rankings_alexa_rank_max, $source_rankings_alexa_country, $social_shares_count_facebook_min, $social_shares_count_facebook_max, $social_shares_count_google_plus_min, $social_shares_count_google_plus_max, $social_shares_count_linkedin_min, $social_shares_count_linkedin_max, $social_shares_count_reddit_min, $social_shares_count_reddit_max, $interval_start, $interval_end, $interval_width, $field)

List histograms

For the numerical metadata that the News API gathers (such as word counts or social shares for example), you can use the histograms endpoint to access and display this information. As this endpoint does not return actual stories, the results you are given will not count towards your story allowance provided by your subscription, so you can effectively query this endpoint free of charge.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = array(56); // int[] | This parameter is used for finding stories by story id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_title'] = 'translations_en_title_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_body'] = 'translations_en_body_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_text'] = 'translations_en_text_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to find stories based on their url.
$associate_array['not_links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to exclude stories based on their url.
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['not_language'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['published_at_start'] = 'published_at_start_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['published_at_end'] = 'published_at_end_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categories_taxonomy'] = 'categories_taxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_confident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_id'] = array('categories_id_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_id'] = array('categories_id_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_level'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_level'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['not_sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['not_sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['media_images_count_min'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['media_images_count_max'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['media_images_width_min'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['media_images_width_max'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['media_images_height_min'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['media_images_height_max'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['media_images_content_length_min'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['media_images_content_length_max'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['not_media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['media_videos_count_min'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['media_videos_count_max'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['author_id'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['not_author_id'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['author_name'] = 'author_name_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['not_author_name'] = 'author_name_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['source_id'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['not_source_id'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['source_name'] = array('source_name_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['not_source_name'] = array('source_name_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['source_domain'] = array('source_domain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['not_source_domain'] = array('source_domain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_links_in_count_min'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_links_in_count_max'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_rankings_alexa_rank_min'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_rank_max'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_country'] = array('source_rankings_alexa_country_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['social_shares_count_facebook_min'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_facebook_max'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_google_plus_min'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_google_plus_max'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_linkedin_min'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_linkedin_max'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_reddit_min'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_reddit_max'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['interval_start'] = 56; // int | This parameter is used for setting the start data point of histogram intervals.
$associate_array['interval_end'] = 56; // int | This parameter is used for setting the end data point of histogram intervals.
$associate_array['interval_width'] = 56; // int | This parameter is used for setting the width of histogram intervals.
$associate_array['field'] = 'social_shares_count'; // string | This parameter is used for specifying the y-axis variable for the histogram.

try {
    $result = $apiInstance->listHistograms($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listHistograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by story id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_title** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_body** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_text** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on their url. | [optional]
 **not_links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on their url. | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **not_language** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_id** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_level** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **not_sentiment_title_polarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **not_sentiment_body_polarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_images_width_min** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **media_images_width_max** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **media_images_height_min** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **media_images_height_max** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **media_images_content_length_min** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **media_images_content_length_max** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **not_media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **not_author_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **not_author_name** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **not_source_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **not_source_name** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **not_source_domain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **social_shares_count_facebook_min** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_facebook_max** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_min** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_max** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_min** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_max** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_reddit_min** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_reddit_max** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **interval_start** | **int**| This parameter is used for setting the start data point of histogram intervals. | [optional]
 **interval_end** | **int**| This parameter is used for setting the end data point of histogram intervals. | [optional]
 **interval_width** | **int**| This parameter is used for setting the width of histogram intervals. | [optional]
 **field** | **string**| This parameter is used for specifying the y-axis variable for the histogram. | [optional] [default to &#39;social_shares_count&#39;]

### Return type

[**\Aylien\NewsApi\Models\Histograms**](../Model/Histograms.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listRelatedStories

> \Aylien\NewsApi\Models\RelatedStories listRelatedStories($id, $not_id, $title, $body, $text, $translations_en_title, $translations_en_body, $translations_en_text, $links_permalink, $not_links_permalink, $language, $not_language, $published_at_start, $published_at_end, $categories_taxonomy, $categories_confident, $categories_id, $not_categories_id, $categories_level, $not_categories_level, $entities_title_text, $not_entities_title_text, $entities_title_type, $not_entities_title_type, $entities_title_links_dbpedia, $not_entities_title_links_dbpedia, $entities_body_text, $not_entities_body_text, $entities_body_type, $not_entities_body_type, $entities_body_links_dbpedia, $not_entities_body_links_dbpedia, $sentiment_title_polarity, $not_sentiment_title_polarity, $sentiment_body_polarity, $not_sentiment_body_polarity, $media_images_count_min, $media_images_count_max, $media_images_width_min, $media_images_width_max, $media_images_height_min, $media_images_height_max, $media_images_content_length_min, $media_images_content_length_max, $media_images_format, $not_media_images_format, $media_videos_count_min, $media_videos_count_max, $author_id, $not_author_id, $author_name, $not_author_name, $source_id, $not_source_id, $source_name, $not_source_name, $source_domain, $not_source_domain, $source_locations_country, $not_source_locations_country, $source_locations_state, $not_source_locations_state, $source_locations_city, $not_source_locations_city, $source_scopes_country, $not_source_scopes_country, $source_scopes_state, $not_source_scopes_state, $source_scopes_city, $not_source_scopes_city, $source_scopes_level, $not_source_scopes_level, $source_links_in_count_min, $source_links_in_count_max, $source_rankings_alexa_rank_min, $source_rankings_alexa_rank_max, $source_rankings_alexa_country, $social_shares_count_facebook_min, $social_shares_count_facebook_max, $social_shares_count_google_plus_min, $social_shares_count_google_plus_max, $social_shares_count_linkedin_min, $social_shares_count_linkedin_max, $social_shares_count_reddit_min, $social_shares_count_reddit_max, $clusters, $return, $story_id, $story_url, $story_title, $story_body, $boost_by, $story_language, $per_page)

List related stories

This endpoint is used for finding semantically similar stories based on the parameters you provide as inputs. For example, if you want to find stories similar to a Tweet or any text extract you input, the related stories endpoint will analyze the entities present and the meaning of the text, and find stories with a similar meaning. The maximum number of related stories returned is 100.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = array(56); // int[] | This parameter is used for finding stories by story id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_title'] = 'translations_en_title_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_body'] = 'translations_en_body_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_text'] = 'translations_en_text_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to find stories based on their url.
$associate_array['not_links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to exclude stories based on their url.
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['not_language'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['published_at_start'] = 'published_at_start_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['published_at_end'] = 'published_at_end_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categories_taxonomy'] = 'categories_taxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_confident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_id'] = array('categories_id_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_id'] = array('categories_id_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_level'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_level'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['not_sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['not_sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['media_images_count_min'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['media_images_count_max'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['media_images_width_min'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['media_images_width_max'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['media_images_height_min'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['media_images_height_max'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['media_images_content_length_min'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['media_images_content_length_max'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['not_media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['media_videos_count_min'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['media_videos_count_max'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['author_id'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['not_author_id'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['author_name'] = 'author_name_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['not_author_name'] = 'author_name_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['source_id'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['not_source_id'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['source_name'] = array('source_name_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['not_source_name'] = array('source_name_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['source_domain'] = array('source_domain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['not_source_domain'] = array('source_domain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_links_in_count_min'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_links_in_count_max'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_rankings_alexa_rank_min'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_rank_max'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_country'] = array('source_rankings_alexa_country_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['social_shares_count_facebook_min'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_facebook_max'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_google_plus_min'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_google_plus_max'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_linkedin_min'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_linkedin_max'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_reddit_min'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_reddit_max'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['clusters'] = array('clusters_example'); // string[] | This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering).
$associate_array['return'] = array('return_example'); // string[] | This parameter is used for specifying return fields.
$associate_array['story_id'] = 56; // int | A story id
$associate_array['story_url'] = 'story_url_example'; // string | An article or webpage
$associate_array['story_title'] = 'story_title_example'; // string | Title of the article
$associate_array['story_body'] = 'story_body_example'; // string | Body of the article
$associate_array['boost_by'] = 'boost_by_example'; // string | This parameter is used for boosting the result by the specified value.
$associate_array['story_language'] = 'auto'; // string | This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['per_page'] = 3; // int | This parameter is used for specifying number of items in each page.

try {
    $result = $apiInstance->listRelatedStories($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRelatedStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by story id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_title** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_body** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_text** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on their url. | [optional]
 **not_links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on their url. | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **not_language** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_id** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_level** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **not_sentiment_title_polarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **not_sentiment_body_polarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_images_width_min** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **media_images_width_max** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **media_images_height_min** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **media_images_height_max** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **media_images_content_length_min** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **media_images_content_length_max** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **not_media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **not_author_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **not_author_name** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **not_source_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **not_source_name** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **not_source_domain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **social_shares_count_facebook_min** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_facebook_max** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_min** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_max** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_min** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_max** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_reddit_min** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_reddit_max** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **clusters** | [**string[]**](../Model/string.md)| This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). | [optional]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **story_id** | **int**| A story id | [optional]
 **story_url** | **string**| An article or webpage | [optional]
 **story_title** | **string**| Title of the article | [optional]
 **story_body** | **string**| Body of the article | [optional]
 **boost_by** | **string**| This parameter is used for boosting the result by the specified value. | [optional]
 **story_language** | **string**| This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to &#39;auto&#39;]
 **per_page** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

### Return type

[**\Aylien\NewsApi\Models\RelatedStories**](../Model/RelatedStories.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listStories

> \Aylien\NewsApi\Models\Stories listStories($id, $not_id, $title, $body, $text, $translations_en_title, $translations_en_body, $translations_en_text, $language, $not_language, $links_permalink, $not_links_permalink, $published_at_start, $published_at_end, $categories_taxonomy, $categories_confident, $categories_id, $not_categories_id, $categories_level, $not_categories_level, $entities_title_text, $not_entities_title_text, $entities_title_type, $not_entities_title_type, $entities_title_links_dbpedia, $not_entities_title_links_dbpedia, $entities_body_text, $not_entities_body_text, $entities_body_type, $not_entities_body_type, $entities_body_links_dbpedia, $not_entities_body_links_dbpedia, $sentiment_title_polarity, $not_sentiment_title_polarity, $sentiment_body_polarity, $not_sentiment_body_polarity, $media_images_count_min, $media_images_count_max, $media_images_width_min, $media_images_width_max, $media_images_height_min, $media_images_height_max, $media_images_content_length_min, $media_images_content_length_max, $media_images_format, $not_media_images_format, $media_videos_count_min, $media_videos_count_max, $author_id, $not_author_id, $author_name, $not_author_name, $source_id, $not_source_id, $source_name, $not_source_name, $source_domain, $not_source_domain, $source_locations_country, $not_source_locations_country, $source_locations_state, $not_source_locations_state, $source_locations_city, $not_source_locations_city, $source_scopes_country, $not_source_scopes_country, $source_scopes_state, $not_source_scopes_state, $source_scopes_city, $not_source_scopes_city, $source_scopes_level, $not_source_scopes_level, $source_links_in_count_min, $source_links_in_count_max, $source_rankings_alexa_rank_min, $source_rankings_alexa_rank_max, $source_rankings_alexa_country, $social_shares_count_facebook_min, $social_shares_count_facebook_max, $social_shares_count_google_plus_min, $social_shares_count_google_plus_max, $social_shares_count_linkedin_min, $social_shares_count_linkedin_max, $social_shares_count_reddit_min, $social_shares_count_reddit_max, $clusters, $return, $sort_by, $sort_direction, $cursor, $per_page)

List Stories

The stories endpoint is used to return stories based on parameters you set in your query. The News API crawler gathers articles in near real-time and stores information about them, or metadata. Below you can see all of the query parameters, which you can use to narrow down your query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = array(56); // int[] | This parameter is used for finding stories by story id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_title'] = 'translations_en_title_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_body'] = 'translations_en_body_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_text'] = 'translations_en_text_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['not_language'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to find stories based on their url.
$associate_array['not_links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to exclude stories based on their url.
$associate_array['published_at_start'] = 'published_at_start_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['published_at_end'] = 'published_at_end_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categories_taxonomy'] = 'categories_taxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_confident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_id'] = array('categories_id_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_id'] = array('categories_id_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_level'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_level'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['not_sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['not_sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['media_images_count_min'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['media_images_count_max'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['media_images_width_min'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['media_images_width_max'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['media_images_height_min'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['media_images_height_max'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['media_images_content_length_min'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['media_images_content_length_max'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['not_media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['media_videos_count_min'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['media_videos_count_max'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['author_id'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['not_author_id'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['author_name'] = 'author_name_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['not_author_name'] = 'author_name_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['source_id'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['not_source_id'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['source_name'] = array('source_name_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['not_source_name'] = array('source_name_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['source_domain'] = array('source_domain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['not_source_domain'] = array('source_domain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_links_in_count_min'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_links_in_count_max'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_rankings_alexa_rank_min'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_rank_max'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_country'] = array('source_rankings_alexa_country_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['social_shares_count_facebook_min'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_facebook_max'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_google_plus_min'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_google_plus_max'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_linkedin_min'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_linkedin_max'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_reddit_min'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_reddit_max'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['clusters'] = array('clusters_example'); // string[] | This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering).
$associate_array['return'] = array('return_example'); // string[] | This parameter is used for specifying return fields.
$associate_array['sort_by'] = 'published_at'; // string | This parameter is used for changing the order column of the results. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results).
$associate_array['sort_direction'] = 'desc'; // string | This parameter is used for changing the order direction of the result. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results).
$associate_array['cursor'] = '*'; // string | This parameter is used for finding a specific page. You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results).
$associate_array['per_page'] = 10; // int | This parameter is used for specifying number of items in each page You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results)

try {
    $result = $apiInstance->listStories($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by story id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_title** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_body** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_text** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **not_language** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on their url. | [optional]
 **not_links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on their url. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_id** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_level** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **not_sentiment_title_polarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **not_sentiment_body_polarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_images_width_min** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **media_images_width_max** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **media_images_height_min** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **media_images_height_max** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **media_images_content_length_min** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **media_images_content_length_max** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **not_media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **not_author_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **not_author_name** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **not_source_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **not_source_name** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **not_source_domain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **social_shares_count_facebook_min** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_facebook_max** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_min** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_max** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_min** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_max** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_reddit_min** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_reddit_max** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **clusters** | [**string[]**](../Model/string.md)| This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). | [optional]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **sort_by** | **string**| This parameter is used for changing the order column of the results. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results). | [optional] [default to &#39;published_at&#39;]
 **sort_direction** | **string**| This parameter is used for changing the order direction of the result. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results). | [optional] [default to &#39;desc&#39;]
 **cursor** | **string**| This parameter is used for finding a specific page. You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results). | [optional] [default to &#39;*&#39;]
 **per_page** | **int**| This parameter is used for specifying number of items in each page You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results) | [optional] [default to 10]

### Return type

[**\Aylien\NewsApi\Models\Stories**](../Model/Stories.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTimeSeries

> \Aylien\NewsApi\Models\TimeSeriesList listTimeSeries($id, $not_id, $title, $body, $text, $translations_en_title, $translations_en_body, $translations_en_text, $language, $not_language, $categories_taxonomy, $categories_confident, $categories_id, $not_categories_id, $categories_level, $not_categories_level, $entities_title_text, $not_entities_title_text, $entities_title_type, $not_entities_title_type, $entities_title_links_dbpedia, $not_entities_title_links_dbpedia, $entities_body_text, $not_entities_body_text, $entities_body_type, $not_entities_body_type, $entities_body_links_dbpedia, $not_entities_body_links_dbpedia, $sentiment_title_polarity, $not_sentiment_title_polarity, $sentiment_body_polarity, $not_sentiment_body_polarity, $media_images_count_min, $media_images_count_max, $media_images_width_min, $media_images_width_max, $media_images_height_min, $media_images_height_max, $media_images_content_length_min, $media_images_content_length_max, $media_images_format, $not_media_images_format, $media_videos_count_min, $media_videos_count_max, $author_id, $not_author_id, $author_name, $not_author_name, $source_id, $not_source_id, $source_name, $not_source_name, $source_domain, $not_source_domain, $source_locations_country, $not_source_locations_country, $source_locations_state, $not_source_locations_state, $source_locations_city, $not_source_locations_city, $source_scopes_country, $not_source_scopes_country, $source_scopes_state, $not_source_scopes_state, $source_scopes_city, $not_source_scopes_city, $source_scopes_level, $not_source_scopes_level, $source_links_in_count_min, $source_links_in_count_max, $source_rankings_alexa_rank_min, $source_rankings_alexa_rank_max, $source_rankings_alexa_country, $social_shares_count_facebook_min, $social_shares_count_facebook_max, $social_shares_count_google_plus_min, $social_shares_count_google_plus_max, $social_shares_count_linkedin_min, $social_shares_count_linkedin_max, $social_shares_count_reddit_min, $social_shares_count_reddit_max, $published_at_start, $published_at_end, $period)

List time series

The time series endpoint allows you to track information contained in stories over time. This information can be anything from mentions of a topic or entities, sentiment about a topic, or the volume of stories published by a source, to name but a few. The full list of parameters is given below. Using the [Date Math Syntax](https://newsapi.aylien.com/docs/working-with-dates), you can easily set your query to return information from any time period, from the current point in time to when the News API started collecting stories. The returned information can be rounded to a time also specified by you, for example by setting the results into hourly, daily, or weekly data points.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['id'] = array(56); // int[] | This parameter is used for finding stories by story id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_title'] = 'translations_en_title_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_body'] = 'translations_en_body_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_text'] = 'translations_en_text_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['not_language'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['categories_taxonomy'] = 'categories_taxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_confident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_id'] = array('categories_id_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_id'] = array('categories_id_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_level'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_level'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['not_sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['not_sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['media_images_count_min'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['media_images_count_max'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['media_images_width_min'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['media_images_width_max'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['media_images_height_min'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['media_images_height_max'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['media_images_content_length_min'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['media_images_content_length_max'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['not_media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['media_videos_count_min'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['media_videos_count_max'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['author_id'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['not_author_id'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['author_name'] = 'author_name_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['not_author_name'] = 'author_name_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['source_id'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['not_source_id'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['source_name'] = array('source_name_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['not_source_name'] = array('source_name_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['source_domain'] = array('source_domain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['not_source_domain'] = array('source_domain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_links_in_count_min'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_links_in_count_max'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_rankings_alexa_rank_min'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_rank_max'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_country'] = array('source_rankings_alexa_country_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['social_shares_count_facebook_min'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_facebook_max'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_google_plus_min'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_google_plus_max'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_linkedin_min'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_linkedin_max'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_reddit_min'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_reddit_max'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['published_at_start'] = 'NOW-7DAYS/DAY'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['published_at_end'] = 'NOW/DAY'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['period'] = '+1DAY'; // string | The size of each date range is expressed as an interval to be added to the lower bound. It supports Date Math Syntax. Valid options are `+` following an integer number greater than 0 and one of the Date Math keywords. e.g. `+1DAY`, `+2MINUTES` and `+1MONTH`. Here are [Supported keywords](https://newsapi.aylien.com/docs/working-with-dates#date-math).

try {
    $result = $apiInstance->listTimeSeries($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTimeSeries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by story id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_title** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_body** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_text** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **not_language** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_id** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_level** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **not_sentiment_title_polarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **not_sentiment_body_polarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_images_width_min** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **media_images_width_max** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **media_images_height_min** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **media_images_height_max** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **media_images_content_length_min** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **media_images_content_length_max** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **not_media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **not_author_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **not_author_name** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **not_source_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **not_source_name** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **not_source_domain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **social_shares_count_facebook_min** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_facebook_max** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_min** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_max** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_min** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_max** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_reddit_min** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_reddit_max** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional] [default to &#39;NOW-7DAYS/DAY&#39;]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional] [default to &#39;NOW/DAY&#39;]
 **period** | **string**| The size of each date range is expressed as an interval to be added to the lower bound. It supports Date Math Syntax. Valid options are &#x60;+&#x60; following an integer number greater than 0 and one of the Date Math keywords. e.g. &#x60;+1DAY&#x60;, &#x60;+2MINUTES&#x60; and &#x60;+1MONTH&#x60;. Here are [Supported keywords](https://newsapi.aylien.com/docs/working-with-dates#date-math). | [optional] [default to &#39;+1DAY&#39;]

### Return type

[**\Aylien\NewsApi\Models\TimeSeriesList**](../Model/TimeSeriesList.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTrends

> \Aylien\NewsApi\Models\Trends listTrends($field, $id, $not_id, $title, $body, $text, $translations_en_title, $translations_en_body, $translations_en_text, $links_permalink, $not_links_permalink, $language, $not_language, $published_at_start, $published_at_end, $categories_taxonomy, $categories_confident, $categories_id, $not_categories_id, $categories_level, $not_categories_level, $entities_title_text, $not_entities_title_text, $entities_title_type, $not_entities_title_type, $entities_title_links_dbpedia, $not_entities_title_links_dbpedia, $entities_body_text, $not_entities_body_text, $entities_body_type, $not_entities_body_type, $entities_body_links_dbpedia, $not_entities_body_links_dbpedia, $sentiment_title_polarity, $not_sentiment_title_polarity, $sentiment_body_polarity, $not_sentiment_body_polarity, $media_images_count_min, $media_images_count_max, $media_images_width_min, $media_images_width_max, $media_images_height_min, $media_images_height_max, $media_images_content_length_min, $media_images_content_length_max, $media_images_format, $not_media_images_format, $media_videos_count_min, $media_videos_count_max, $author_id, $not_author_id, $author_name, $not_author_name, $source_id, $not_source_id, $source_name, $not_source_name, $source_domain, $not_source_domain, $source_locations_country, $not_source_locations_country, $source_locations_state, $not_source_locations_state, $source_locations_city, $not_source_locations_city, $source_scopes_country, $not_source_scopes_country, $source_scopes_state, $not_source_scopes_state, $source_scopes_city, $not_source_scopes_city, $source_scopes_level, $not_source_scopes_level, $source_links_in_count_min, $source_links_in_count_max, $source_rankings_alexa_rank_min, $source_rankings_alexa_rank_max, $source_rankings_alexa_country, $social_shares_count_facebook_min, $social_shares_count_facebook_max, $social_shares_count_google_plus_min, $social_shares_count_google_plus_max, $social_shares_count_linkedin_min, $social_shares_count_linkedin_max, $social_shares_count_reddit_min, $social_shares_count_reddit_max)

List trends

The trends endpoint allows you to identify the most-mentioned entities, concepts and keywords relevant to your query. For example, this endpoint allows you to set parameters like a time period, a subject category, or an entity, and your request will return the most mentioned entities or keywords that are mentioned in relation to your query.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: app_id
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-ID', 'Bearer');

// Configure API key authorization: app_key
$config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AYLIEN-NewsAPI-Application-Key', 'Bearer');


$apiInstance = new Aylien\NewsApi\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['field'] = keywords; // string | This parameter is used to specify the trend field.
$associate_array['id'] = array(56); // int[] | This parameter is used for finding stories by story id.
$associate_array['not_id'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_title'] = 'translations_en_title_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_body'] = 'translations_en_body_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translations_en_text'] = 'translations_en_text_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to find stories based on their url.
$associate_array['not_links_permalink'] = array('links_permalink_example'); // string[] | This parameter is used to exclude stories based on their url.
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['not_language'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['published_at_start'] = 'published_at_start_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['published_at_end'] = 'published_at_end_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categories_taxonomy'] = 'categories_taxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_confident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_id'] = array('categories_id_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_id'] = array('categories_id_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categories_level'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['not_categories_level'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_text'] = array('entities_title_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_type'] = array('entities_title_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_title_links_dbpedia'] = array('entities_title_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_text'] = array('entities_body_text_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_type'] = array('entities_body_type_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['not_entities_body_links_dbpedia'] = array('entities_body_links_dbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['not_sentiment_title_polarity'] = 'sentiment_title_polarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['not_sentiment_body_polarity'] = 'sentiment_body_polarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['media_images_count_min'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['media_images_count_max'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['media_images_width_min'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['media_images_width_max'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['media_images_height_min'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['media_images_height_max'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['media_images_content_length_min'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['media_images_content_length_max'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['not_media_images_format'] = array('media_images_format_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['media_videos_count_min'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['media_videos_count_max'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['author_id'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['not_author_id'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['author_name'] = 'author_name_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['not_author_name'] = 'author_name_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['source_id'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['not_source_id'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['source_name'] = array('source_name_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['not_source_name'] = array('source_name_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['source_domain'] = array('source_domain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['not_source_domain'] = array('source_domain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_country'] = array('source_locations_country_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_state'] = array('source_locations_state_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_locations_city'] = array('source_locations_city_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_country'] = array('source_scopes_country_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_state'] = array('source_scopes_state_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_city'] = array('source_scopes_city_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['not_source_scopes_level'] = array('source_scopes_level_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['source_links_in_count_min'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_links_in_count_max'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['source_rankings_alexa_rank_min'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_rank_max'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['source_rankings_alexa_country'] = array('source_rankings_alexa_country_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['social_shares_count_facebook_min'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_facebook_max'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_google_plus_min'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_google_plus_max'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_linkedin_min'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_linkedin_max'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['social_shares_count_reddit_min'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['social_shares_count_reddit_max'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.

try {
    $result = $apiInstance->listTrends($associate_array);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTrends: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field** | **string**| This parameter is used to specify the trend field. |
 **id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by story id. | [optional]
 **not_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_title** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_body** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translations_en_text** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on their url. | [optional]
 **not_links_permalink** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on their url. | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **not_language** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **published_at_start** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **published_at_end** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categories_taxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_confident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categories_id** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_id** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categories_level** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **not_categories_level** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_title_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_text** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_type** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **not_entities_body_links_dbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentiment_title_polarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **not_sentiment_title_polarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentiment_body_polarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **not_sentiment_body_polarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **media_images_count_min** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **media_images_count_max** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **media_images_width_min** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **media_images_width_max** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **media_images_height_min** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **media_images_height_max** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **media_images_content_length_min** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **media_images_content_length_max** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **not_media_images_format** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **media_videos_count_min** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **media_videos_count_max** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **author_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **not_author_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **author_name** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **not_author_name** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **source_id** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **not_source_id** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **source_name** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **not_source_name** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **source_domain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **not_source_domain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_locations_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_country** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_state** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_city** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **not_source_scopes_level** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **source_links_in_count_min** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_links_in_count_max** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **source_rankings_alexa_rank_min** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_rank_max** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **source_rankings_alexa_country** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **social_shares_count_facebook_min** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_facebook_max** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_min** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_google_plus_max** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_min** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_linkedin_max** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **social_shares_count_reddit_min** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **social_shares_count_reddit_max** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]

### Return type

[**\Aylien\NewsApi\Models\Trends**](../Model/Trends.md)

### Authorization

[app_id](../../README.md#app_id), [app_key](../../README.md#app_key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

