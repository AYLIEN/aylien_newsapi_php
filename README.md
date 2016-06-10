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
    "aylien/newsapi": "~0.0.1"
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
./vendor/bin/phpunit lib/Tests
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
*DefaultApi* | [**listAutocompletes**](docs/DefaultApi.md#listautocompletes) | **GET** /autocompletes | List autocompletes
*DefaultApi* | [**listCoverages**](docs/DefaultApi.md#listcoverages) | **POST** /coverages | List coverages
*DefaultApi* | [**listHistograms**](docs/DefaultApi.md#listhistograms) | **GET** /histograms | List histograms
*DefaultApi* | [**listRelatedStories**](docs/DefaultApi.md#listrelatedstories) | **POST** /related_stories | List related stories
*DefaultApi* | [**listStories**](docs/DefaultApi.md#liststories) | **GET** /stories | List Stories
*DefaultApi* | [**listTimeSeries**](docs/DefaultApi.md#listtimeseries) | **GET** /time_series | List time series
*DefaultApi* | [**listTrends**](docs/DefaultApi.md#listtrends) | **GET** /trends | List trends


## Documentation For Models

 - [Author](docs/Author.md)
 - [Autocomplete](docs/Autocomplete.md)
 - [Autocompletes](docs/Autocompletes.md)
 - [Category](docs/Category.md)
 - [CategoryLinks](docs/CategoryLinks.md)
 - [Coverages](docs/Coverages.md)
 - [Entities](docs/Entities.md)
 - [Entity](docs/Entity.md)
 - [EntityLinks](docs/EntityLinks.md)
 - [Error](docs/Error.md)
 - [ErrorLinks](docs/ErrorLinks.md)
 - [Errors](docs/Errors.md)
 - [HistogramInterval](docs/HistogramInterval.md)
 - [Histograms](docs/Histograms.md)
 - [Location](docs/Location.md)
 - [Media](docs/Media.md)
 - [RelatedStories](docs/RelatedStories.md)
 - [Scope](docs/Scope.md)
 - [Sentiment](docs/Sentiment.md)
 - [Sentiments](docs/Sentiments.md)
 - [ShareCount](docs/ShareCount.md)
 - [ShareCounts](docs/ShareCounts.md)
 - [Source](docs/Source.md)
 - [Stories](docs/Stories.md)
 - [Story](docs/Story.md)
 - [StoryCluster](docs/StoryCluster.md)
 - [StoryLinks](docs/StoryLinks.md)
 - [Summary](docs/Summary.md)
 - [TimeSeries](docs/TimeSeries.md)
 - [TimeSeriesList](docs/TimeSeriesList.md)
 - [Trend](docs/Trend.md)
 - [Trends](docs/Trends.md)


## Documentation For Authorization


## app_id

- **Type**: API key 
- **API key parameter name**: X-AYLIEN-NewsAPI-Application-ID
- **Location**: HTTP header

## app_key

- **Type**: API key 
- **API key parameter name**: X-AYLIEN-NewsAPI-Application-Key
- **Location**: HTTP header
