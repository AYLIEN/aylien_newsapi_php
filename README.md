# AYLIEN News API
AYLIEN News API is the most powerful way of sourcing, searching and syndicating analyzed and enriched news content. If you haven't already done so, you will need to [sign up](https://newsapi.aylien.com/signup).

Visit our [interactive documentation](https://newsapi.aylien.com/docs/#swagger-ui-container) to familiarize yourself with the API.


## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "require": {
    "aylien/newsapi": "~0.1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/aylien_news_api/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit ./test
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: app_id
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-ID', 'YOUR_APP_ID');

// Configure API key authorization: app_key
Aylien\NewsApi\Configuration::getDefaultConfiguration()->setApiKey('X-AYLIEN-NewsAPI-Application-Key', 'YOUR_APP_KEY');

$api_instance = new Aylien\NewsApi\Api\DefaultApi();

$opts = array(
  'title' => 'trump',
  'published_at_start' => 'NOW-7DAYS',
  'published_at_end' => 'NOW',
  'entities_body_links_dbpedia' => [
    'http://dbpedia.org/resource/Donald_Trump',
    'http://dbpedia.org/resource/Hillary_Rodham_Clinton'
  ],
  'language' => ['en'],
  'sort_by' => 'social_shares_count.facebook'
);

try {
    $result = $api_instance->listStories($opts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listStories: ', $e->getMessage(), "\n";
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.newsapi.aylien.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**listAutocompletes**](docs/Api/DefaultApi.md#listautocompletes) | **GET** /autocompletes | List autocompletes
*DefaultApi* | [**listCoverages**](docs/Api/DefaultApi.md#listcoverages) | **POST** /coverages | List coverages
*DefaultApi* | [**listHistograms**](docs/Api/DefaultApi.md#listhistograms) | **GET** /histograms | List histograms
*DefaultApi* | [**listRelatedStories**](docs/Api/DefaultApi.md#listrelatedstories) | **POST** /related_stories | List related stories
*DefaultApi* | [**listStories**](docs/Api/DefaultApi.md#liststories) | **GET** /stories | List Stories
*DefaultApi* | [**listTimeSeries**](docs/Api/DefaultApi.md#listtimeseries) | **GET** /time_series | List time series
*DefaultApi* | [**listTrends**](docs/Api/DefaultApi.md#listtrends) | **GET** /trends | List trends


## Documentation For Models

 - [Author](docs/Model/Author.md)
 - [Autocomplete](docs/Model/Autocomplete.md)
 - [Autocompletes](docs/Model/Autocompletes.md)
 - [Category](docs/Model/Category.md)
 - [CategoryLinks](docs/Model/CategoryLinks.md)
 - [Coverages](docs/Model/Coverages.md)
 - [Entities](docs/Model/Entities.md)
 - [Entity](docs/Model/Entity.md)
 - [EntityLinks](docs/Model/EntityLinks.md)
 - [Error](docs/Model/Error.md)
 - [ErrorLinks](docs/Model/ErrorLinks.md)
 - [Errors](docs/Model/Errors.md)
 - [HistogramInterval](docs/Model/HistogramInterval.md)
 - [Histograms](docs/Model/Histograms.md)
 - [Location](docs/Model/Location.md)
 - [Media](docs/Model/Media.md)
 - [RelatedStories](docs/Model/RelatedStories.md)
 - [Scope](docs/Model/Scope.md)
 - [Sentiment](docs/Model/Sentiment.md)
 - [Sentiments](docs/Model/Sentiments.md)
 - [ShareCount](docs/Model/ShareCount.md)
 - [ShareCounts](docs/Model/ShareCounts.md)
 - [Source](docs/Model/Source.md)
 - [Stories](docs/Model/Stories.md)
 - [Story](docs/Model/Story.md)
 - [StoryCluster](docs/Model/StoryCluster.md)
 - [StoryLinks](docs/Model/StoryLinks.md)
 - [Summary](docs/Model/Summary.md)
 - [TimeSeries](docs/Model/TimeSeries.md)
 - [TimeSeriesList](docs/Model/TimeSeriesList.md)
 - [Trend](docs/Model/Trend.md)
 - [Trends](docs/Model/Trends.md)


## Documentation For Authorization

## app_id

- **Type**: API key 
- **API key parameter name**: X-AYLIEN-NewsAPI-Application-ID
- **Location**: HTTP header

## app_key

- **Type**: API key 
- **API key parameter name**: X-AYLIEN-NewsAPI-Application-Key
- **Location**: HTTP header
