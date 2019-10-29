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

> \Aylien\NewsApi\Models\Autocompletes listAutocompletes($type, $term, $language, $perPage)

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
$associate_array['perPage'] = 3; // int | This parameter is used for specifying number of items in each page.

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
 **perPage** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

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

> \Aylien\NewsApi\Models\Clusters listClusters($id, $notId, $storyCountMin, $storyCountMax, $timeStart, $timeEnd, $earliestStoryStart, $earliestStoryEnd, $latestStoryStart, $latestStoryEnd, $locationCountry, $notLocationCountry)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding clusters by cluster id.
$associate_array['storyCountMin'] = 56; // int | This parameter is used for finding clusters with more than or equal to a specific amount of stories associated with them.
$associate_array['storyCountMax'] = 56; // int | This parameter is used for finding clusters with less than or equal to a specific amount of stories associated with them.
$associate_array['timeStart'] = 'timeStart_example'; // string | This parameter is used for finding clusters whose creation time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['timeEnd'] = 'timeEnd_example'; // string | This parameter is used for finding clusters whose creation time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['earliestStoryStart'] = 'earliestStoryStart_example'; // string | This parameter is used for finding clusters whose publication date of its earliest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['earliestStoryEnd'] = 'earliestStoryEnd_example'; // string | This parameter is used for finding clusters whose publication date of its earliest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['latestStoryStart'] = 'latestStoryStart_example'; // string | This parameter is used for finding clusters whose publication date of its latest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['latestStoryEnd'] = 'latestStoryEnd_example'; // string | This parameter is used for finding clusters whose publication date of its latest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['locationCountry'] = array('locationCountry_example'); // string[] | This parameter is used for finding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notLocationCountry'] = array('locationCountry_example'); // string[] | This parameter is used for excluding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).

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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding clusters by cluster id. | [optional]
 **storyCountMin** | **int**| This parameter is used for finding clusters with more than or equal to a specific amount of stories associated with them. | [optional]
 **storyCountMax** | **int**| This parameter is used for finding clusters with less than or equal to a specific amount of stories associated with them. | [optional]
 **timeStart** | **string**| This parameter is used for finding clusters whose creation time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **timeEnd** | **string**| This parameter is used for finding clusters whose creation time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **earliestStoryStart** | **string**| This parameter is used for finding clusters whose publication date of its earliest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **earliestStoryEnd** | **string**| This parameter is used for finding clusters whose publication date of its earliest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **latestStoryStart** | **string**| This parameter is used for finding clusters whose publication date of its latest story is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **latestStoryEnd** | **string**| This parameter is used for finding clusters whose publication date of its latest story is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **locationCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notLocationCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding clusters belonging to a specific country. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]

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

> \Aylien\NewsApi\Models\Coverages listCoverages($id, $notId, $title, $body, $text, $translationsEnTitle, $translationsEnBody, $translationsEnText, $language, $notLanguage, $publishedAtStart, $publishedAtEnd, $categoriesTaxonomy, $categoriesConfident, $categoriesId, $notCategoriesId, $categoriesLevel, $notCategoriesLevel, $entitiesTitleText, $notEntitiesTitleText, $entitiesTitleType, $notEntitiesTitleType, $entitiesTitleLinksDbpedia, $notEntitiesTitleLinksDbpedia, $entitiesBodyText, $notEntitiesBodyText, $entitiesBodyType, $notEntitiesBodyType, $entitiesBodyLinksDbpedia, $notEntitiesBodyLinksDbpedia, $sentimentTitlePolarity, $notSentimentTitlePolarity, $sentimentBodyPolarity, $notSentimentBodyPolarity, $mediaImagesCountMin, $mediaImagesCountMax, $mediaImagesWidthMin, $mediaImagesWidthMax, $mediaImagesHeightMin, $mediaImagesHeightMax, $mediaImagesContentLengthMin, $mediaImagesContentLengthMax, $mediaImagesFormat, $notMediaImagesFormat, $mediaVideosCountMin, $mediaVideosCountMax, $authorId, $notAuthorId, $authorName, $notAuthorName, $sourceId, $notSourceId, $sourceName, $notSourceName, $sourceDomain, $notSourceDomain, $sourceLocationsCountry, $notSourceLocationsCountry, $sourceLocationsState, $notSourceLocationsState, $sourceLocationsCity, $notSourceLocationsCity, $sourceScopesCountry, $notSourceScopesCountry, $sourceScopesState, $notSourceScopesState, $sourceScopesCity, $notSourceScopesCity, $sourceScopesLevel, $notSourceScopesLevel, $sourceLinksInCountMin, $sourceLinksInCountMax, $sourceRankingsAlexaRankMin, $sourceRankingsAlexaRankMax, $sourceRankingsAlexaCountry, $socialSharesCountFacebookMin, $socialSharesCountFacebookMax, $socialSharesCountGooglePlusMin, $socialSharesCountGooglePlusMax, $socialSharesCountLinkedinMin, $socialSharesCountLinkedinMax, $socialSharesCountRedditMin, $socialSharesCountRedditMax, $clusters, $return, $storyId, $storyUrl, $storyTitle, $storyBody, $storyPublishedAt, $storyLanguage, $perPage)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnTitle'] = 'translationsEnTitle_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnBody'] = 'translationsEnBody_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnText'] = 'translationsEnText_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['notLanguage'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['publishedAtStart'] = 'publishedAtStart_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['publishedAtEnd'] = 'publishedAtEnd_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categoriesTaxonomy'] = 'categoriesTaxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesConfident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesLevel'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesLevel'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['notSentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['notSentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['mediaImagesCountMin'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['mediaImagesCountMax'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['mediaImagesWidthMin'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['mediaImagesWidthMax'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['mediaImagesHeightMin'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['mediaImagesHeightMax'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['mediaImagesContentLengthMin'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['mediaImagesContentLengthMax'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['mediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['notMediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['mediaVideosCountMin'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['mediaVideosCountMax'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['authorId'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['notAuthorId'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['authorName'] = 'authorName_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['notAuthorName'] = 'authorName_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['sourceId'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['notSourceId'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['sourceName'] = array('sourceName_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['notSourceName'] = array('sourceName_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['sourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['notSourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['sourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLinksInCountMin'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceLinksInCountMax'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceRankingsAlexaRankMin'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaRankMax'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaCountry'] = array('sourceRankingsAlexaCountry_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['socialSharesCountFacebookMin'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountFacebookMax'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMin'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMax'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMin'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMax'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountRedditMin'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountRedditMax'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['clusters'] = array('clusters_example'); // string[] | This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering).
$associate_array['return'] = array('return_example'); // string[] | This parameter is used for specifying return fields.
$associate_array['storyId'] = 56; // int | A story id
$associate_array['storyUrl'] = 'storyUrl_example'; // string | An article or webpage
$associate_array['storyTitle'] = 'storyTitle_example'; // string | Title of the article
$associate_array['storyBody'] = 'storyBody_example'; // string | Body of the article
$associate_array['storyPublishedAt'] = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime).
$associate_array['storyLanguage'] = 'auto'; // string | This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['perPage'] = 3; // int | This parameter is used for specifying number of items in each page.

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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnTitle** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnBody** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnText** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **notLanguage** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **publishedAtStart** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **publishedAtEnd** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categoriesTaxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesConfident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categoriesId** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesId** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentimentTitlePolarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **notSentimentTitlePolarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentimentBodyPolarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **notSentimentBodyPolarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **mediaImagesCountMin** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **mediaImagesCountMax** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **mediaImagesWidthMin** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **mediaImagesWidthMax** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **mediaImagesHeightMin** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **mediaImagesHeightMax** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMin** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMax** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **mediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **notMediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **mediaVideosCountMin** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **mediaVideosCountMax** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **authorId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **notAuthorId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **authorName** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **notAuthorName** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **sourceId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **notSourceId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **sourceName** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **notSourceName** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **sourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **notSourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **sourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLinksInCountMin** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceLinksInCountMax** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceRankingsAlexaRankMin** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaRankMax** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **socialSharesCountFacebookMin** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountFacebookMax** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMin** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMax** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMin** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMax** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountRedditMin** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountRedditMax** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **clusters** | [**string[]**](../Model/string.md)| This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). | [optional]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **storyId** | **int**| A story id | [optional]
 **storyUrl** | **string**| An article or webpage | [optional]
 **storyTitle** | **string**| Title of the article | [optional]
 **storyBody** | **string**| Body of the article | [optional]
 **storyPublishedAt** | **\DateTime**| Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime). | [optional]
 **storyLanguage** | **string**| This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to &#39;auto&#39;]
 **perPage** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

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

> \Aylien\NewsApi\Models\Histograms listHistograms($id, $notId, $title, $body, $text, $translationsEnTitle, $translationsEnBody, $translationsEnText, $language, $notLanguage, $publishedAtStart, $publishedAtEnd, $categoriesTaxonomy, $categoriesConfident, $categoriesId, $notCategoriesId, $categoriesLevel, $notCategoriesLevel, $entitiesTitleText, $notEntitiesTitleText, $entitiesTitleType, $notEntitiesTitleType, $entitiesTitleLinksDbpedia, $notEntitiesTitleLinksDbpedia, $entitiesBodyText, $notEntitiesBodyText, $entitiesBodyType, $notEntitiesBodyType, $entitiesBodyLinksDbpedia, $notEntitiesBodyLinksDbpedia, $sentimentTitlePolarity, $notSentimentTitlePolarity, $sentimentBodyPolarity, $notSentimentBodyPolarity, $mediaImagesCountMin, $mediaImagesCountMax, $mediaImagesWidthMin, $mediaImagesWidthMax, $mediaImagesHeightMin, $mediaImagesHeightMax, $mediaImagesContentLengthMin, $mediaImagesContentLengthMax, $mediaImagesFormat, $notMediaImagesFormat, $mediaVideosCountMin, $mediaVideosCountMax, $authorId, $notAuthorId, $authorName, $notAuthorName, $sourceId, $notSourceId, $sourceName, $notSourceName, $sourceDomain, $notSourceDomain, $sourceLocationsCountry, $notSourceLocationsCountry, $sourceLocationsState, $notSourceLocationsState, $sourceLocationsCity, $notSourceLocationsCity, $sourceScopesCountry, $notSourceScopesCountry, $sourceScopesState, $notSourceScopesState, $sourceScopesCity, $notSourceScopesCity, $sourceScopesLevel, $notSourceScopesLevel, $sourceLinksInCountMin, $sourceLinksInCountMax, $sourceRankingsAlexaRankMin, $sourceRankingsAlexaRankMax, $sourceRankingsAlexaCountry, $socialSharesCountFacebookMin, $socialSharesCountFacebookMax, $socialSharesCountGooglePlusMin, $socialSharesCountGooglePlusMax, $socialSharesCountLinkedinMin, $socialSharesCountLinkedinMax, $socialSharesCountRedditMin, $socialSharesCountRedditMax, $intervalStart, $intervalEnd, $intervalWidth, $field)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnTitle'] = 'translationsEnTitle_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnBody'] = 'translationsEnBody_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnText'] = 'translationsEnText_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['notLanguage'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['publishedAtStart'] = 'publishedAtStart_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['publishedAtEnd'] = 'publishedAtEnd_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categoriesTaxonomy'] = 'categoriesTaxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesConfident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesLevel'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesLevel'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['notSentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['notSentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['mediaImagesCountMin'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['mediaImagesCountMax'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['mediaImagesWidthMin'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['mediaImagesWidthMax'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['mediaImagesHeightMin'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['mediaImagesHeightMax'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['mediaImagesContentLengthMin'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['mediaImagesContentLengthMax'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['mediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['notMediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['mediaVideosCountMin'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['mediaVideosCountMax'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['authorId'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['notAuthorId'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['authorName'] = 'authorName_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['notAuthorName'] = 'authorName_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['sourceId'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['notSourceId'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['sourceName'] = array('sourceName_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['notSourceName'] = array('sourceName_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['sourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['notSourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['sourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLinksInCountMin'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceLinksInCountMax'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceRankingsAlexaRankMin'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaRankMax'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaCountry'] = array('sourceRankingsAlexaCountry_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['socialSharesCountFacebookMin'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountFacebookMax'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMin'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMax'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMin'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMax'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountRedditMin'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountRedditMax'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['intervalStart'] = 56; // int | This parameter is used for setting the start data point of histogram intervals.
$associate_array['intervalEnd'] = 56; // int | This parameter is used for setting the end data point of histogram intervals.
$associate_array['intervalWidth'] = 56; // int | This parameter is used for setting the width of histogram intervals.
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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnTitle** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnBody** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnText** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **notLanguage** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **publishedAtStart** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **publishedAtEnd** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categoriesTaxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesConfident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categoriesId** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesId** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentimentTitlePolarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **notSentimentTitlePolarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentimentBodyPolarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **notSentimentBodyPolarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **mediaImagesCountMin** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **mediaImagesCountMax** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **mediaImagesWidthMin** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **mediaImagesWidthMax** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **mediaImagesHeightMin** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **mediaImagesHeightMax** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMin** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMax** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **mediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **notMediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **mediaVideosCountMin** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **mediaVideosCountMax** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **authorId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **notAuthorId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **authorName** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **notAuthorName** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **sourceId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **notSourceId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **sourceName** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **notSourceName** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **sourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **notSourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **sourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLinksInCountMin** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceLinksInCountMax** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceRankingsAlexaRankMin** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaRankMax** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **socialSharesCountFacebookMin** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountFacebookMax** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMin** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMax** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMin** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMax** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountRedditMin** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountRedditMax** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **intervalStart** | **int**| This parameter is used for setting the start data point of histogram intervals. | [optional]
 **intervalEnd** | **int**| This parameter is used for setting the end data point of histogram intervals. | [optional]
 **intervalWidth** | **int**| This parameter is used for setting the width of histogram intervals. | [optional]
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

> \Aylien\NewsApi\Models\RelatedStories listRelatedStories($id, $notId, $title, $body, $text, $translationsEnTitle, $translationsEnBody, $translationsEnText, $language, $notLanguage, $publishedAtStart, $publishedAtEnd, $categoriesTaxonomy, $categoriesConfident, $categoriesId, $notCategoriesId, $categoriesLevel, $notCategoriesLevel, $entitiesTitleText, $notEntitiesTitleText, $entitiesTitleType, $notEntitiesTitleType, $entitiesTitleLinksDbpedia, $notEntitiesTitleLinksDbpedia, $entitiesBodyText, $notEntitiesBodyText, $entitiesBodyType, $notEntitiesBodyType, $entitiesBodyLinksDbpedia, $notEntitiesBodyLinksDbpedia, $sentimentTitlePolarity, $notSentimentTitlePolarity, $sentimentBodyPolarity, $notSentimentBodyPolarity, $mediaImagesCountMin, $mediaImagesCountMax, $mediaImagesWidthMin, $mediaImagesWidthMax, $mediaImagesHeightMin, $mediaImagesHeightMax, $mediaImagesContentLengthMin, $mediaImagesContentLengthMax, $mediaImagesFormat, $notMediaImagesFormat, $mediaVideosCountMin, $mediaVideosCountMax, $authorId, $notAuthorId, $authorName, $notAuthorName, $sourceId, $notSourceId, $sourceName, $notSourceName, $sourceDomain, $notSourceDomain, $sourceLocationsCountry, $notSourceLocationsCountry, $sourceLocationsState, $notSourceLocationsState, $sourceLocationsCity, $notSourceLocationsCity, $sourceScopesCountry, $notSourceScopesCountry, $sourceScopesState, $notSourceScopesState, $sourceScopesCity, $notSourceScopesCity, $sourceScopesLevel, $notSourceScopesLevel, $sourceLinksInCountMin, $sourceLinksInCountMax, $sourceRankingsAlexaRankMin, $sourceRankingsAlexaRankMax, $sourceRankingsAlexaCountry, $socialSharesCountFacebookMin, $socialSharesCountFacebookMax, $socialSharesCountGooglePlusMin, $socialSharesCountGooglePlusMax, $socialSharesCountLinkedinMin, $socialSharesCountLinkedinMax, $socialSharesCountRedditMin, $socialSharesCountRedditMax, $clusters, $return, $storyId, $storyUrl, $storyTitle, $storyBody, $boostBy, $storyLanguage, $perPage)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnTitle'] = 'translationsEnTitle_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnBody'] = 'translationsEnBody_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnText'] = 'translationsEnText_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['notLanguage'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['publishedAtStart'] = 'publishedAtStart_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['publishedAtEnd'] = 'publishedAtEnd_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categoriesTaxonomy'] = 'categoriesTaxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesConfident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesLevel'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesLevel'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['notSentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['notSentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['mediaImagesCountMin'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['mediaImagesCountMax'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['mediaImagesWidthMin'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['mediaImagesWidthMax'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['mediaImagesHeightMin'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['mediaImagesHeightMax'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['mediaImagesContentLengthMin'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['mediaImagesContentLengthMax'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['mediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['notMediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['mediaVideosCountMin'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['mediaVideosCountMax'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['authorId'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['notAuthorId'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['authorName'] = 'authorName_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['notAuthorName'] = 'authorName_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['sourceId'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['notSourceId'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['sourceName'] = array('sourceName_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['notSourceName'] = array('sourceName_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['sourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['notSourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['sourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLinksInCountMin'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceLinksInCountMax'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceRankingsAlexaRankMin'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaRankMax'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaCountry'] = array('sourceRankingsAlexaCountry_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['socialSharesCountFacebookMin'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountFacebookMax'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMin'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMax'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMin'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMax'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountRedditMin'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountRedditMax'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['clusters'] = array('clusters_example'); // string[] | This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering).
$associate_array['return'] = array('return_example'); // string[] | This parameter is used for specifying return fields.
$associate_array['storyId'] = 56; // int | A story id
$associate_array['storyUrl'] = 'storyUrl_example'; // string | An article or webpage
$associate_array['storyTitle'] = 'storyTitle_example'; // string | Title of the article
$associate_array['storyBody'] = 'storyBody_example'; // string | Body of the article
$associate_array['boostBy'] = 'boostBy_example'; // string | This parameter is used for boosting the result by the specified value.
$associate_array['storyLanguage'] = 'auto'; // string | This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['perPage'] = 3; // int | This parameter is used for specifying number of items in each page.

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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnTitle** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnBody** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnText** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **notLanguage** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **publishedAtStart** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **publishedAtEnd** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categoriesTaxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesConfident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categoriesId** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesId** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentimentTitlePolarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **notSentimentTitlePolarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentimentBodyPolarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **notSentimentBodyPolarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **mediaImagesCountMin** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **mediaImagesCountMax** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **mediaImagesWidthMin** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **mediaImagesWidthMax** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **mediaImagesHeightMin** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **mediaImagesHeightMax** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMin** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMax** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **mediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **notMediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **mediaVideosCountMin** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **mediaVideosCountMax** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **authorId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **notAuthorId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **authorName** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **notAuthorName** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **sourceId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **notSourceId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **sourceName** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **notSourceName** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **sourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **notSourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **sourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLinksInCountMin** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceLinksInCountMax** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceRankingsAlexaRankMin** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaRankMax** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **socialSharesCountFacebookMin** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountFacebookMax** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMin** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMax** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMin** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMax** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountRedditMin** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountRedditMax** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **clusters** | [**string[]**](../Model/string.md)| This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). | [optional]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **storyId** | **int**| A story id | [optional]
 **storyUrl** | **string**| An article or webpage | [optional]
 **storyTitle** | **string**| Title of the article | [optional]
 **storyBody** | **string**| Body of the article | [optional]
 **boostBy** | **string**| This parameter is used for boosting the result by the specified value. | [optional]
 **storyLanguage** | **string**| This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional] [default to &#39;auto&#39;]
 **perPage** | **int**| This parameter is used for specifying number of items in each page. | [optional] [default to 3]

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

> \Aylien\NewsApi\Models\Stories listStories($id, $notId, $title, $body, $text, $translationsEnTitle, $translationsEnBody, $translationsEnText, $language, $notLanguage, $publishedAtStart, $publishedAtEnd, $categoriesTaxonomy, $categoriesConfident, $categoriesId, $notCategoriesId, $categoriesLevel, $notCategoriesLevel, $entitiesTitleText, $notEntitiesTitleText, $entitiesTitleType, $notEntitiesTitleType, $entitiesTitleLinksDbpedia, $notEntitiesTitleLinksDbpedia, $entitiesBodyText, $notEntitiesBodyText, $entitiesBodyType, $notEntitiesBodyType, $entitiesBodyLinksDbpedia, $notEntitiesBodyLinksDbpedia, $sentimentTitlePolarity, $notSentimentTitlePolarity, $sentimentBodyPolarity, $notSentimentBodyPolarity, $mediaImagesCountMin, $mediaImagesCountMax, $mediaImagesWidthMin, $mediaImagesWidthMax, $mediaImagesHeightMin, $mediaImagesHeightMax, $mediaImagesContentLengthMin, $mediaImagesContentLengthMax, $mediaImagesFormat, $notMediaImagesFormat, $mediaVideosCountMin, $mediaVideosCountMax, $authorId, $notAuthorId, $authorName, $notAuthorName, $sourceId, $notSourceId, $sourceName, $notSourceName, $sourceDomain, $notSourceDomain, $sourceLocationsCountry, $notSourceLocationsCountry, $sourceLocationsState, $notSourceLocationsState, $sourceLocationsCity, $notSourceLocationsCity, $sourceScopesCountry, $notSourceScopesCountry, $sourceScopesState, $notSourceScopesState, $sourceScopesCity, $notSourceScopesCity, $sourceScopesLevel, $notSourceScopesLevel, $sourceLinksInCountMin, $sourceLinksInCountMax, $sourceRankingsAlexaRankMin, $sourceRankingsAlexaRankMax, $sourceRankingsAlexaCountry, $socialSharesCountFacebookMin, $socialSharesCountFacebookMax, $socialSharesCountGooglePlusMin, $socialSharesCountGooglePlusMax, $socialSharesCountLinkedinMin, $socialSharesCountLinkedinMax, $socialSharesCountRedditMin, $socialSharesCountRedditMax, $clusters, $return, $sortBy, $sortDirection, $cursor, $perPage)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnTitle'] = 'translationsEnTitle_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnBody'] = 'translationsEnBody_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnText'] = 'translationsEnText_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['notLanguage'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['publishedAtStart'] = 'publishedAtStart_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['publishedAtEnd'] = 'publishedAtEnd_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categoriesTaxonomy'] = 'categoriesTaxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesConfident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesLevel'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesLevel'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['notSentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['notSentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['mediaImagesCountMin'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['mediaImagesCountMax'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['mediaImagesWidthMin'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['mediaImagesWidthMax'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['mediaImagesHeightMin'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['mediaImagesHeightMax'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['mediaImagesContentLengthMin'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['mediaImagesContentLengthMax'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['mediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['notMediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['mediaVideosCountMin'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['mediaVideosCountMax'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['authorId'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['notAuthorId'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['authorName'] = 'authorName_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['notAuthorName'] = 'authorName_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['sourceId'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['notSourceId'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['sourceName'] = array('sourceName_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['notSourceName'] = array('sourceName_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['sourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['notSourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['sourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLinksInCountMin'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceLinksInCountMax'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceRankingsAlexaRankMin'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaRankMax'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaCountry'] = array('sourceRankingsAlexaCountry_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['socialSharesCountFacebookMin'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountFacebookMax'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMin'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMax'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMin'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMax'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountRedditMin'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountRedditMax'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['clusters'] = array('clusters_example'); // string[] | This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering).
$associate_array['return'] = array('return_example'); // string[] | This parameter is used for specifying return fields.
$associate_array['sortBy'] = 'published_at'; // string | This parameter is used for changing the order column of the results. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results).
$associate_array['sortDirection'] = 'desc'; // string | This parameter is used for changing the order direction of the result. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results).
$associate_array['cursor'] = '*'; // string | This parameter is used for finding a specific page. You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results).
$associate_array['perPage'] = 10; // int | This parameter is used for specifying number of items in each page You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results)

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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnTitle** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnBody** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnText** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **notLanguage** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **publishedAtStart** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **publishedAtEnd** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categoriesTaxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesConfident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categoriesId** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesId** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentimentTitlePolarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **notSentimentTitlePolarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentimentBodyPolarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **notSentimentBodyPolarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **mediaImagesCountMin** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **mediaImagesCountMax** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **mediaImagesWidthMin** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **mediaImagesWidthMax** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **mediaImagesHeightMin** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **mediaImagesHeightMax** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMin** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMax** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **mediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **notMediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **mediaVideosCountMin** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **mediaVideosCountMax** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **authorId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **notAuthorId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **authorName** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **notAuthorName** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **sourceId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **notSourceId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **sourceName** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **notSourceName** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **sourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **notSourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **sourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLinksInCountMin** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceLinksInCountMax** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceRankingsAlexaRankMin** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaRankMax** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **socialSharesCountFacebookMin** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountFacebookMax** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMin** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMax** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMin** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMax** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountRedditMin** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountRedditMax** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **clusters** | [**string[]**](../Model/string.md)| This parameter is used for finding stories with belonging to one of clusters in a specific set of clusters You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). | [optional]
 **return** | [**string[]**](../Model/string.md)| This parameter is used for specifying return fields. | [optional]
 **sortBy** | **string**| This parameter is used for changing the order column of the results. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results). | [optional] [default to &#39;published_at&#39;]
 **sortDirection** | **string**| This parameter is used for changing the order direction of the result. You can read about sorting results [here](https://newsapi.aylien.com/docs/sorting-results). | [optional] [default to &#39;desc&#39;]
 **cursor** | **string**| This parameter is used for finding a specific page. You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results). | [optional] [default to &#39;*&#39;]
 **perPage** | **int**| This parameter is used for specifying number of items in each page You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results) | [optional] [default to 10]

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

> \Aylien\NewsApi\Models\TimeSeriesList listTimeSeries($id, $notId, $title, $body, $text, $translationsEnTitle, $translationsEnBody, $translationsEnText, $language, $notLanguage, $categoriesTaxonomy, $categoriesConfident, $categoriesId, $notCategoriesId, $categoriesLevel, $notCategoriesLevel, $entitiesTitleText, $notEntitiesTitleText, $entitiesTitleType, $notEntitiesTitleType, $entitiesTitleLinksDbpedia, $notEntitiesTitleLinksDbpedia, $entitiesBodyText, $notEntitiesBodyText, $entitiesBodyType, $notEntitiesBodyType, $entitiesBodyLinksDbpedia, $notEntitiesBodyLinksDbpedia, $sentimentTitlePolarity, $notSentimentTitlePolarity, $sentimentBodyPolarity, $notSentimentBodyPolarity, $mediaImagesCountMin, $mediaImagesCountMax, $mediaImagesWidthMin, $mediaImagesWidthMax, $mediaImagesHeightMin, $mediaImagesHeightMax, $mediaImagesContentLengthMin, $mediaImagesContentLengthMax, $mediaImagesFormat, $notMediaImagesFormat, $mediaVideosCountMin, $mediaVideosCountMax, $authorId, $notAuthorId, $authorName, $notAuthorName, $sourceId, $notSourceId, $sourceName, $notSourceName, $sourceDomain, $notSourceDomain, $sourceLocationsCountry, $notSourceLocationsCountry, $sourceLocationsState, $notSourceLocationsState, $sourceLocationsCity, $notSourceLocationsCity, $sourceScopesCountry, $notSourceScopesCountry, $sourceScopesState, $notSourceScopesState, $sourceScopesCity, $notSourceScopesCity, $sourceScopesLevel, $notSourceScopesLevel, $sourceLinksInCountMin, $sourceLinksInCountMax, $sourceRankingsAlexaRankMin, $sourceRankingsAlexaRankMax, $sourceRankingsAlexaCountry, $socialSharesCountFacebookMin, $socialSharesCountFacebookMax, $socialSharesCountGooglePlusMin, $socialSharesCountGooglePlusMax, $socialSharesCountLinkedinMin, $socialSharesCountLinkedinMax, $socialSharesCountRedditMin, $socialSharesCountRedditMax, $publishedAtStart, $publishedAtEnd, $period)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnTitle'] = 'translationsEnTitle_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnBody'] = 'translationsEnBody_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnText'] = 'translationsEnText_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['notLanguage'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['categoriesTaxonomy'] = 'categoriesTaxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesConfident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesLevel'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesLevel'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['notSentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['notSentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['mediaImagesCountMin'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['mediaImagesCountMax'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['mediaImagesWidthMin'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['mediaImagesWidthMax'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['mediaImagesHeightMin'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['mediaImagesHeightMax'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['mediaImagesContentLengthMin'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['mediaImagesContentLengthMax'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['mediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['notMediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['mediaVideosCountMin'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['mediaVideosCountMax'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['authorId'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['notAuthorId'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['authorName'] = 'authorName_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['notAuthorName'] = 'authorName_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['sourceId'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['notSourceId'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['sourceName'] = array('sourceName_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['notSourceName'] = array('sourceName_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['sourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['notSourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['sourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLinksInCountMin'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceLinksInCountMax'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceRankingsAlexaRankMin'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaRankMax'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaCountry'] = array('sourceRankingsAlexaCountry_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['socialSharesCountFacebookMin'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountFacebookMax'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMin'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMax'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMin'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMax'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountRedditMin'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountRedditMax'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.
$associate_array['publishedAtStart'] = 'NOW-7DAYS/DAY'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['publishedAtEnd'] = 'NOW/DAY'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnTitle** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnBody** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnText** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **notLanguage** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **categoriesTaxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesConfident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categoriesId** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesId** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentimentTitlePolarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **notSentimentTitlePolarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentimentBodyPolarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **notSentimentBodyPolarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **mediaImagesCountMin** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **mediaImagesCountMax** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **mediaImagesWidthMin** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **mediaImagesWidthMax** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **mediaImagesHeightMin** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **mediaImagesHeightMax** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMin** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMax** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **mediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **notMediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **mediaVideosCountMin** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **mediaVideosCountMax** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **authorId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **notAuthorId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **authorName** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **notAuthorName** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **sourceId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **notSourceId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **sourceName** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **notSourceName** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **sourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **notSourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **sourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLinksInCountMin** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceLinksInCountMax** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceRankingsAlexaRankMin** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaRankMax** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **socialSharesCountFacebookMin** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountFacebookMax** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMin** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMax** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMin** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMax** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountRedditMin** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountRedditMax** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]
 **publishedAtStart** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional] [default to &#39;NOW-7DAYS/DAY&#39;]
 **publishedAtEnd** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional] [default to &#39;NOW/DAY&#39;]
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

> \Aylien\NewsApi\Models\Trends listTrends($field, $id, $notId, $title, $body, $text, $translationsEnTitle, $translationsEnBody, $translationsEnText, $language, $notLanguage, $publishedAtStart, $publishedAtEnd, $categoriesTaxonomy, $categoriesConfident, $categoriesId, $notCategoriesId, $categoriesLevel, $notCategoriesLevel, $entitiesTitleText, $notEntitiesTitleText, $entitiesTitleType, $notEntitiesTitleType, $entitiesTitleLinksDbpedia, $notEntitiesTitleLinksDbpedia, $entitiesBodyText, $notEntitiesBodyText, $entitiesBodyType, $notEntitiesBodyType, $entitiesBodyLinksDbpedia, $notEntitiesBodyLinksDbpedia, $sentimentTitlePolarity, $notSentimentTitlePolarity, $sentimentBodyPolarity, $notSentimentBodyPolarity, $mediaImagesCountMin, $mediaImagesCountMax, $mediaImagesWidthMin, $mediaImagesWidthMax, $mediaImagesHeightMin, $mediaImagesHeightMax, $mediaImagesContentLengthMin, $mediaImagesContentLengthMax, $mediaImagesFormat, $notMediaImagesFormat, $mediaVideosCountMin, $mediaVideosCountMax, $authorId, $notAuthorId, $authorName, $notAuthorName, $sourceId, $notSourceId, $sourceName, $notSourceName, $sourceDomain, $notSourceDomain, $sourceLocationsCountry, $notSourceLocationsCountry, $sourceLocationsState, $notSourceLocationsState, $sourceLocationsCity, $notSourceLocationsCity, $sourceScopesCountry, $notSourceScopesCountry, $sourceScopesState, $notSourceScopesState, $sourceScopesCity, $notSourceScopesCity, $sourceScopesLevel, $notSourceScopesLevel, $sourceLinksInCountMin, $sourceLinksInCountMax, $sourceRankingsAlexaRankMin, $sourceRankingsAlexaRankMax, $sourceRankingsAlexaCountry, $socialSharesCountFacebookMin, $socialSharesCountFacebookMax, $socialSharesCountGooglePlusMin, $socialSharesCountGooglePlusMax, $socialSharesCountLinkedinMin, $socialSharesCountLinkedinMax, $socialSharesCountRedditMin, $socialSharesCountRedditMax)

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
$associate_array['notId'] = array(56); // int[] | This parameter is used for excluding stories by story id.
$associate_array['title'] = 'title_example'; // string | This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['body'] = 'body_example'; // string | This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['text'] = 'text_example'; // string | This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnTitle'] = 'translationsEnTitle_example'; // string | This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnBody'] = 'translationsEnBody_example'; // string | This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['translationsEnText'] = 'translationsEnText_example'; // string | This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators).
$associate_array['language'] = array('language_example'); // string[] | This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['notLanguage'] = array('language_example'); // string[] | This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes.
$associate_array['publishedAtStart'] = 'publishedAtStart_example'; // string | This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['publishedAtEnd'] = 'publishedAtEnd_example'; // string | This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates).
$associate_array['categoriesTaxonomy'] = 'categoriesTaxonomy_example'; // string | This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesConfident'] = true; // bool | This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesId'] = array('categoriesId_example'); // string[] | This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['categoriesLevel'] = array(56); // int[] | This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['notCategoriesLevel'] = array(56); // int[] | This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories).
$associate_array['entitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleText'] = array('entitiesTitleText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleType'] = array('entitiesTitleType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesTitleLinksDbpedia'] = array('entitiesTitleLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to find stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyText'] = array('entitiesBodyText_example'); // string[] | This parameter is used to exclude stories based on the specified entities `text` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to find stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyType'] = array('entitiesBodyType_example'); // string[] | This parameter is used to exclude stories based on the specified entities `type` in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['entitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['notEntitiesBodyLinksDbpedia'] = array('entitiesBodyLinksDbpedia_example'); // string[] | This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities).
$associate_array['sentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for finding stories whose title sentiment is the specified value.
$associate_array['notSentimentTitlePolarity'] = 'sentimentTitlePolarity_example'; // string | This parameter is used for excluding stories whose title sentiment is the specified value.
$associate_array['sentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for finding stories whose body sentiment is the specified value.
$associate_array['notSentimentBodyPolarity'] = 'sentimentBodyPolarity_example'; // string | This parameter is used for excluding stories whose body sentiment is the specified value.
$associate_array['mediaImagesCountMin'] = 56; // int | This parameter is used for finding stories whose number of images is greater than or equal to the specified value.
$associate_array['mediaImagesCountMax'] = 56; // int | This parameter is used for finding stories whose number of images is less than or equal to the specified value.
$associate_array['mediaImagesWidthMin'] = 56; // int | This parameter is used for finding stories whose width of images are greater than or equal to the specified value.
$associate_array['mediaImagesWidthMax'] = 56; // int | This parameter is used for finding stories whose width of images are less than or equal to the specified value.
$associate_array['mediaImagesHeightMin'] = 56; // int | This parameter is used for finding stories whose height of images are greater than or equal to the specified value.
$associate_array['mediaImagesHeightMax'] = 56; // int | This parameter is used for finding stories whose height of images are less than or equal to the specified value.
$associate_array['mediaImagesContentLengthMin'] = 56; // int | This parameter is used for finding stories whose images content length are greater than or equal to the specified value.
$associate_array['mediaImagesContentLengthMax'] = 56; // int | This parameter is used for finding stories whose images content length are less than or equal to the specified value.
$associate_array['mediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for finding stories whose images format are the specified value.
$associate_array['notMediaImagesFormat'] = array('mediaImagesFormat_example'); // string[] | This parameter is used for excluding stories whose images format are the specified value.
$associate_array['mediaVideosCountMin'] = 56; // int | This parameter is used for finding stories whose number of videos is greater than or equal to the specified value.
$associate_array['mediaVideosCountMax'] = 56; // int | This parameter is used for finding stories whose number of videos is less than or equal to the specified value.
$associate_array['authorId'] = array(56); // int[] | This parameter is used for finding stories whose author id is the specified value.
$associate_array['notAuthorId'] = array(56); // int[] | This parameter is used for excluding stories whose author id is the specified value.
$associate_array['authorName'] = 'authorName_example'; // string | This parameter is used for finding stories whose author full name contains the specified value.
$associate_array['notAuthorName'] = 'authorName_example'; // string | This parameter is used for excluding stories whose author full name contains the specified value.
$associate_array['sourceId'] = array(56); // int[] | This parameter is used for finding stories whose source id is the specified value.
$associate_array['notSourceId'] = array(56); // int[] | This parameter is used for excluding stories whose source id is the specified value.
$associate_array['sourceName'] = array('sourceName_example'); // string[] | This parameter is used for finding stories whose source name contains the specified value.
$associate_array['notSourceName'] = array('sourceName_example'); // string[] | This parameter is used for excluding stories whose source name contains the specified value.
$associate_array['sourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for finding stories whose source domain is the specified value.
$associate_array['notSourceDomain'] = array('sourceDomain_example'); // string[] | This parameter is used for excluding stories whose source domain is the specified value.
$associate_array['sourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCountry'] = array('sourceLocationsCountry_example'); // string[] | This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsState'] = array('sourceLocationsState_example'); // string[] | This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceLocationsCity'] = array('sourceLocationsCity_example'); // string[] | This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCountry'] = array('sourceScopesCountry_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesState'] = array('sourceScopesState_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesCity'] = array('sourceScopesCity_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['notSourceScopesLevel'] = array('sourceScopesLevel_example'); // string[] | This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations).
$associate_array['sourceLinksInCountMin'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceLinksInCountMax'] = 56; // int | This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count).
$associate_array['sourceRankingsAlexaRankMin'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaRankMax'] = 56; // int | This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['sourceRankingsAlexaCountry'] = array('sourceRankingsAlexaCountry_example'); // string[] | This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks).
$associate_array['socialSharesCountFacebookMin'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountFacebookMax'] = 56; // int | This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMin'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountGooglePlusMax'] = 56; // int | This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMin'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountLinkedinMax'] = 56; // int | This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value.
$associate_array['socialSharesCountRedditMin'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value.
$associate_array['socialSharesCountRedditMax'] = 56; // int | This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value.

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
 **notId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by story id. | [optional]
 **title** | **string**| This parameter is used for finding stories whose title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **body** | **string**| This parameter is used for finding stories whose body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **text** | **string**| This parameter is used for finding stories whose title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnTitle** | **string**| This parameter is used for finding stories whose translation title contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnBody** | **string**| This parameter is used for finding stories whose translation body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **translationsEnText** | **string**| This parameter is used for finding stories whose translation title or body contains a specific keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). | [optional]
 **language** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **notLanguage** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. | [optional]
 **publishedAtStart** | **string**| This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **publishedAtEnd** | **string**| This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). | [optional]
 **categoriesTaxonomy** | **string**| This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesConfident** | **bool**| This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional] [default to true]
 **categoriesId** | [**string[]**](../Model/string.md)| This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesId** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **categoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **notCategoriesLevel** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). | [optional]
 **entitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesTitleLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyText** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyType** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **entitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **notEntitiesBodyLinksDbpedia** | [**string[]**](../Model/string.md)| This parameter is used to exclude stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). | [optional]
 **sentimentTitlePolarity** | **string**| This parameter is used for finding stories whose title sentiment is the specified value. | [optional]
 **notSentimentTitlePolarity** | **string**| This parameter is used for excluding stories whose title sentiment is the specified value. | [optional]
 **sentimentBodyPolarity** | **string**| This parameter is used for finding stories whose body sentiment is the specified value. | [optional]
 **notSentimentBodyPolarity** | **string**| This parameter is used for excluding stories whose body sentiment is the specified value. | [optional]
 **mediaImagesCountMin** | **int**| This parameter is used for finding stories whose number of images is greater than or equal to the specified value. | [optional]
 **mediaImagesCountMax** | **int**| This parameter is used for finding stories whose number of images is less than or equal to the specified value. | [optional]
 **mediaImagesWidthMin** | **int**| This parameter is used for finding stories whose width of images are greater than or equal to the specified value. | [optional]
 **mediaImagesWidthMax** | **int**| This parameter is used for finding stories whose width of images are less than or equal to the specified value. | [optional]
 **mediaImagesHeightMin** | **int**| This parameter is used for finding stories whose height of images are greater than or equal to the specified value. | [optional]
 **mediaImagesHeightMax** | **int**| This parameter is used for finding stories whose height of images are less than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMin** | **int**| This parameter is used for finding stories whose images content length are greater than or equal to the specified value. | [optional]
 **mediaImagesContentLengthMax** | **int**| This parameter is used for finding stories whose images content length are less than or equal to the specified value. | [optional]
 **mediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose images format are the specified value. | [optional]
 **notMediaImagesFormat** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose images format are the specified value. | [optional]
 **mediaVideosCountMin** | **int**| This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. | [optional]
 **mediaVideosCountMax** | **int**| This parameter is used for finding stories whose number of videos is less than or equal to the specified value. | [optional]
 **authorId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose author id is the specified value. | [optional]
 **notAuthorId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose author id is the specified value. | [optional]
 **authorName** | **string**| This parameter is used for finding stories whose author full name contains the specified value. | [optional]
 **notAuthorName** | **string**| This parameter is used for excluding stories whose author full name contains the specified value. | [optional]
 **sourceId** | [**int[]**](../Model/int.md)| This parameter is used for finding stories whose source id is the specified value. | [optional]
 **notSourceId** | [**int[]**](../Model/int.md)| This parameter is used for excluding stories whose source id is the specified value. | [optional]
 **sourceName** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source name contains the specified value. | [optional]
 **notSourceName** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source name contains the specified value. | [optional]
 **sourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source domain is the specified value. | [optional]
 **notSourceDomain** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source domain is the specified value. | [optional]
 **sourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceLocationsCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCountry** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesState** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesCity** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **notSourceScopesLevel** | [**string[]**](../Model/string.md)| This parameter is used for excluding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). | [optional]
 **sourceLinksInCountMin** | **int**| This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceLinksInCountMax** | **int**| This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). | [optional]
 **sourceRankingsAlexaRankMin** | **int**| This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaRankMax** | **int**| This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **sourceRankingsAlexaCountry** | [**string[]**](../Model/string.md)| This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). | [optional]
 **socialSharesCountFacebookMin** | **int**| This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountFacebookMax** | **int**| This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMin** | **int**| This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountGooglePlusMax** | **int**| This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMin** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountLinkedinMax** | **int**| This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. | [optional]
 **socialSharesCountRedditMin** | **int**| This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. | [optional]
 **socialSharesCountRedditMax** | **int**| This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. | [optional]

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

