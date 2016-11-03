<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   Hamed Ramezanian Nik
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://newsapi.aylien.com/
 */
/**
 *  Copyright 2016 Aylien, Inc.
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

namespace Aylien\NewsApi\Api;

use \Aylien\NewsApi\ApiClient;
use \Aylien\NewsApi\ApiException;
use \Aylien\NewsApi\Configuration;
use \Aylien\NewsApi\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   Hamed Ramezanian Nik
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://newsapi.aylien.com/
 */
class DefaultApi
{
    /**
     * API Client
     *
     * @var \Aylien\NewsApi\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Aylien\NewsApi\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Aylien\NewsApi\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.newsapi.aylien.com/api/v1');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Aylien\NewsApi\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Aylien\NewsApi\ApiClient $apiClient set the API client
     *
     * @return DefaultApi
     */
    public function setApiClient(\Aylien\NewsApi\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation listAutocompletes
     *
     * List autocompletes
     *
     * <ul>
     *    <li>['language']         <i><u>string</u></i> This parameter is used for autocompletes whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional, default to en)</li>
     *    <li>['per_page']        <i><u>int</u></i> This parameter is used for specifying number of items in each page. (optional, default to 3)</li>
     * </ul>
     *
     * @param string $type This parameter is used for defining the type of autocompletes. (required)
     * @param string $term This parameter is used for finding autocomplete objects that contain the specified value. (required)
     * @param array $opts (See above)
     * @return \Aylien\NewsApi\Models\Autocompletes
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     */
    public function listAutocompletes($type, $term, $opts = array())
    {
        list($response) = $this->listAutocompletesWithHttpInfo($type, $term, $opts);
        return $response;
    }

    /**
     * Operation listAutocompletesWithHttpInfo
     *
     * List autocompletes
     *
     * <ul>
     *    <li>['language']         <i><u>string</u></i> This parameter is used for autocompletes whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional, default to en)</li>
     *    <li>['per_page']        <i><u>int</u></i> This parameter is used for specifying number of items in each page. (optional, default to 3)</li>
     * </ul>
     *
     * @param string $type This parameter is used for defining the type of autocompletes. (required)
     * @param string $term This parameter is used for finding autocomplete objects that contain the specified value. (required)
     * @param array $opts (See above)
     * @return Array of \Aylien\NewsApi\Models\Autocompletes, HTTP status code, HTTP response headers (array of strings)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     */
    public function listAutocompletesWithHttpInfo($type, $term, $opts = array())
    {
        // define parameters
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $per_page = (!empty($opts['per_page']) ? $opts['per_page'] : null);
        
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling listAutocompletes');
        }
        // verify the required parameter 'term' is set
        if ($term === null) {
            throw new \InvalidArgumentException('Missing the required parameter $term when calling listAutocompletes');
        }
        if ((strlen($term) < 1)) {
            throw new \InvalidArgumentException('invalid length for "$term" when calling DefaultApi.listAutocompletes, must be bigger than or equal to 1.');
        }

        if (!is_null($per_page) && ($per_page > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listAutocompletes, must be smaller than or equal to 100.0.');
        }
        if (!is_null($per_page) && ($per_page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listAutocompletes, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/autocompletes";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($term !== null) {
            $queryParams['term'] = $this->apiClient->getSerializer()->toQueryValue($term);
        }
        // query params
        if ($language !== null) {
            $queryParams['language'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\Autocompletes',
                '/autocompletes'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\Autocompletes', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Autocompletes', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listCoverages
     *
     * List coverages
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param bool $cluster This parameter enables clustering for the returned stories. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to false)
     * @param string $cluster_algorithm This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to lingo)
     * @param string[] $return This parameter is used for specifying return fields. (optional)
     * @param int $story_id A story id (optional)
     * @param string $story_url An article or webpage (optional)
     * @param string $story_title Title of the article (optional)
     * @param string $story_body Body of the article (optional)
     * @param \DateTime $story_published_at Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime). (optional)
     * @param string $story_language This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional, default to auto)
     * @param int $per_page This parameter is used for specifying number of items in each page. (optional, default to 3)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return \Aylien\NewsApi\Models\Coverages
     */
    public function listCoverages($opts = array())
    {
        list($response) = $this->listCoveragesWithHttpInfo($opts);
        return $response;
    }

    /**
     * Operation listCoveragesWithHttpInfo
     *
     * List coverages
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param bool $cluster This parameter enables clustering for the returned stories. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to false)
     * @param string $cluster_algorithm This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to lingo)
     * @param string[] $return This parameter is used for specifying return fields. (optional)
     * @param int $story_id A story id (optional)
     * @param string $story_url An article or webpage (optional)
     * @param string $story_title Title of the article (optional)
     * @param string $story_body Body of the article (optional)
     * @param \DateTime $story_published_at Publish date of the article. If you use a url or title and body of an article for getting coverages, this parameter is required. The format used is a restricted form of the canonical representation of dateTime in the [XML Schema specification (ISO 8601)](https://www.w3.org/TR/xmlschema-2/#dateTime). (optional)
     * @param string $story_language This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional, default to auto)
     * @param int $per_page This parameter is used for specifying number of items in each page. (optional, default to 3)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return array of \Aylien\NewsApi\Models\Coverages, HTTP status code, HTTP response headers (array of strings)
     */
    public function listCoveragesWithHttpInfo($opts = array())
    {
        // define parameters
        $id = (!empty($opts['id']) ? $opts['id'] : null);
        $title = (!empty($opts['title']) ? $opts['title'] : null);
        $body = (!empty($opts['body']) ? $opts['body'] : null);
        $text = (!empty($opts['text']) ? $opts['text'] : null);
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $published_at_start = (!empty($opts['published_at_start']) ? $opts['published_at_start'] : null);
        $published_at_end = (!empty($opts['published_at_end']) ? $opts['published_at_end'] : null);
        $categories_taxonomy = (!empty($opts['categories_taxonomy']) ? $opts['categories_taxonomy'] : null);
        $categories_confident = (!empty($opts['categories_confident']) ? $opts['categories_confident'] : null);
        $categories_id = (!empty($opts['categories_id']) ? $opts['categories_id'] : null);
        $categories_level = (!empty($opts['categories_level']) ? $opts['categories_level'] : null);
        $entities_title_text = (!empty($opts['entities_title_text']) ? $opts['entities_title_text'] : null);
        $entities_title_type = (!empty($opts['entities_title_type']) ? $opts['entities_title_type'] : null);
        $entities_title_links_dbpedia = (!empty($opts['entities_title_links_dbpedia']) ? $opts['entities_title_links_dbpedia'] : null);
        $entities_body_text = (!empty($opts['entities_body_text']) ? $opts['entities_body_text'] : null);
        $entities_body_type = (!empty($opts['entities_body_type']) ? $opts['entities_body_type'] : null);
        $entities_body_links_dbpedia = (!empty($opts['entities_body_links_dbpedia']) ? $opts['entities_body_links_dbpedia'] : null);
        $sentiment_title_polarity = (!empty($opts['sentiment_title_polarity']) ? $opts['sentiment_title_polarity'] : null);
        $sentiment_body_polarity = (!empty($opts['sentiment_body_polarity']) ? $opts['sentiment_body_polarity'] : null);
        $media_images_count_min = (!empty($opts['media_images_count_min']) ? $opts['media_images_count_min'] : null);
        $media_images_count_max = (!empty($opts['media_images_count_max']) ? $opts['media_images_count_max'] : null);
        $media_images_width_min = (!empty($opts['media_images_width_min']) ? $opts['media_images_width_min'] : null);
        $media_images_width_max = (!empty($opts['media_images_width_max']) ? $opts['media_images_width_max'] : null);
        $media_images_height_min = (!empty($opts['media_images_height_min']) ? $opts['media_images_height_min'] : null);
        $media_images_height_max = (!empty($opts['media_images_height_max']) ? $opts['media_images_height_max'] : null);
        $media_images_content_length_min = (!empty($opts['media_images_content_length_min']) ? $opts['media_images_content_length_min'] : null);
        $media_images_content_length_max = (!empty($opts['media_images_content_length_max']) ? $opts['media_images_content_length_max'] : null);
        $media_images_format = (!empty($opts['media_images_format']) ? $opts['media_images_format'] : null);
        $media_videos_count_min = (!empty($opts['media_videos_count_min']) ? $opts['media_videos_count_min'] : null);
        $media_videos_count_max = (!empty($opts['media_videos_count_max']) ? $opts['media_videos_count_max'] : null);
        $author_id = (!empty($opts['author_id']) ? $opts['author_id'] : null);
        $author_name = (!empty($opts['author_name']) ? $opts['author_name'] : null);
        $source_id = (!empty($opts['source_id']) ? $opts['source_id'] : null);
        $source_name = (!empty($opts['source_name']) ? $opts['source_name'] : null);
        $source_domain = (!empty($opts['source_domain']) ? $opts['source_domain'] : null);
        $source_locations_country = (!empty($opts['source_locations_country']) ? $opts['source_locations_country'] : null);
        $source_locations_state = (!empty($opts['source_locations_state']) ? $opts['source_locations_state'] : null);
        $source_locations_city = (!empty($opts['source_locations_city']) ? $opts['source_locations_city'] : null);
        $source_scopes_country = (!empty($opts['source_scopes_country']) ? $opts['source_scopes_country'] : null);
        $source_scopes_state = (!empty($opts['source_scopes_state']) ? $opts['source_scopes_state'] : null);
        $source_scopes_city = (!empty($opts['source_scopes_city']) ? $opts['source_scopes_city'] : null);
        $source_scopes_level = (!empty($opts['source_scopes_level']) ? $opts['source_scopes_level'] : null);
        $source_links_in_count_min = (!empty($opts['source_links_in_count_min']) ? $opts['source_links_in_count_min'] : null);
        $source_links_in_count_max = (!empty($opts['source_links_in_count_max']) ? $opts['source_links_in_count_max'] : null);
        $source_rankings_alexa_rank_min = (!empty($opts['source_rankings_alexa_rank_min']) ? $opts['source_rankings_alexa_rank_min'] : null);
        $source_rankings_alexa_rank_max = (!empty($opts['source_rankings_alexa_rank_max']) ? $opts['source_rankings_alexa_rank_max'] : null);
        $source_rankings_alexa_country = (!empty($opts['source_rankings_alexa_country']) ? $opts['source_rankings_alexa_country'] : null);
        $social_shares_count_facebook_min = (!empty($opts['social_shares_count_facebook_min']) ? $opts['social_shares_count_facebook_min'] : null);
        $social_shares_count_facebook_max = (!empty($opts['social_shares_count_facebook_max']) ? $opts['social_shares_count_facebook_max'] : null);
        $social_shares_count_google_plus_min = (!empty($opts['social_shares_count_google_plus_min']) ? $opts['social_shares_count_google_plus_min'] : null);
        $social_shares_count_google_plus_max = (!empty($opts['social_shares_count_google_plus_max']) ? $opts['social_shares_count_google_plus_max'] : null);
        $social_shares_count_linkedin_min = (!empty($opts['social_shares_count_linkedin_min']) ? $opts['social_shares_count_linkedin_min'] : null);
        $social_shares_count_linkedin_max = (!empty($opts['social_shares_count_linkedin_max']) ? $opts['social_shares_count_linkedin_max'] : null);
        $social_shares_count_reddit_min = (!empty($opts['social_shares_count_reddit_min']) ? $opts['social_shares_count_reddit_min'] : null);
        $social_shares_count_reddit_max = (!empty($opts['social_shares_count_reddit_max']) ? $opts['social_shares_count_reddit_max'] : null);
        $cluster = (!empty($opts['cluster']) ? $opts['cluster'] : null);
        $cluster_algorithm = (!empty($opts['cluster_algorithm']) ? $opts['cluster_algorithm'] : null);
        $return = (!empty($opts['return']) ? $opts['return'] : null);
        $story_id = (!empty($opts['story_id']) ? $opts['story_id'] : null);
        $story_url = (!empty($opts['story_url']) ? $opts['story_url'] : null);
        $story_title = (!empty($opts['story_title']) ? $opts['story_title'] : null);
        $story_body = (!empty($opts['story_body']) ? $opts['story_body'] : null);
        $story_published_at = (!empty($opts['story_published_at']) ? $opts['story_published_at'] : null);
        $story_language = (!empty($opts['story_language']) ? $opts['story_language'] : null);
        $per_page = (!empty($opts['per_page']) ? $opts['per_page'] : null);
        
        if (!is_null($media_images_count_min) && ($media_images_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_count_max) && ($media_images_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_min) && ($media_images_width_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_max) && ($media_images_width_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_min) && ($media_images_height_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_max) && ($media_images_height_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_min) && ($media_images_content_length_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_max) && ($media_images_content_length_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_min) && ($media_videos_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_max) && ($media_videos_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_min) && ($source_links_in_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_max) && ($source_links_in_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_min) && ($source_rankings_alexa_rank_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_max) && ($source_rankings_alexa_rank_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_min) && ($social_shares_count_facebook_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_max) && ($social_shares_count_facebook_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_min) && ($social_shares_count_google_plus_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_max) && ($social_shares_count_google_plus_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_min) && ($social_shares_count_linkedin_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_max) && ($social_shares_count_linkedin_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_min) && ($social_shares_count_reddit_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_min" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_max) && ($social_shares_count_reddit_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_max" when calling DefaultApi.listCoverages, must be bigger than 0.0.');
        }

        if (!is_null($per_page) && ($per_page > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listCoverages, must be smaller than or equal to 100.0.');
        }
        if (!is_null($per_page) && ($per_page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listCoverages, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/coverages";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($id !== null) {
            $formParams['id[]'] = $this->apiClient->getSerializer()->toFormValue($id);
        }
        // form params
        if ($title !== null) {
            $formParams['title'] = $this->apiClient->getSerializer()->toFormValue($title);
        }
        // form params
        if ($body !== null) {
            $formParams['body'] = $this->apiClient->getSerializer()->toFormValue($body);
        }
        // form params
        if ($text !== null) {
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
        }
        // form params
        if ($language !== null) {
            $formParams['language[]'] = $this->apiClient->getSerializer()->toFormValue($language);
        }
        // form params
        if ($published_at_start !== null) {
            $formParams['published_at.start'] = $this->apiClient->getSerializer()->toFormValue($published_at_start);
        }
        // form params
        if ($published_at_end !== null) {
            $formParams['published_at.end'] = $this->apiClient->getSerializer()->toFormValue($published_at_end);
        }
        // form params
        if ($categories_taxonomy !== null) {
            $formParams['categories.taxonomy'] = $this->apiClient->getSerializer()->toFormValue($categories_taxonomy);
        }
        // form params
        if ($categories_confident !== null) {
            $formParams['categories.confident'] = $this->apiClient->getSerializer()->toFormValue($categories_confident);
        }
        // form params
        if ($categories_id !== null) {
            $formParams['categories.id[]'] = $this->apiClient->getSerializer()->toFormValue($categories_id);
        }
        // form params
        if ($categories_level !== null) {
            $formParams['categories.level[]'] = $this->apiClient->getSerializer()->toFormValue($categories_level);
        }
        // form params
        if ($entities_title_text !== null) {
            $formParams['entities.title.text[]'] = $this->apiClient->getSerializer()->toFormValue($entities_title_text);
        }
        // form params
        if ($entities_title_type !== null) {
            $formParams['entities.title.type[]'] = $this->apiClient->getSerializer()->toFormValue($entities_title_type);
        }
        // form params
        if ($entities_title_links_dbpedia !== null) {
            $formParams['entities.title.links.dbpedia[]'] = $this->apiClient->getSerializer()->toFormValue($entities_title_links_dbpedia);
        }
        // form params
        if ($entities_body_text !== null) {
            $formParams['entities.body.text[]'] = $this->apiClient->getSerializer()->toFormValue($entities_body_text);
        }
        // form params
        if ($entities_body_type !== null) {
            $formParams['entities.body.type[]'] = $this->apiClient->getSerializer()->toFormValue($entities_body_type);
        }
        // form params
        if ($entities_body_links_dbpedia !== null) {
            $formParams['entities.body.links.dbpedia[]'] = $this->apiClient->getSerializer()->toFormValue($entities_body_links_dbpedia);
        }
        // form params
        if ($sentiment_title_polarity !== null) {
            $formParams['sentiment.title.polarity'] = $this->apiClient->getSerializer()->toFormValue($sentiment_title_polarity);
        }
        // form params
        if ($sentiment_body_polarity !== null) {
            $formParams['sentiment.body.polarity'] = $this->apiClient->getSerializer()->toFormValue($sentiment_body_polarity);
        }
        // form params
        if ($media_images_count_min !== null) {
            $formParams['media.images.count.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_count_min);
        }
        // form params
        if ($media_images_count_max !== null) {
            $formParams['media.images.count.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_count_max);
        }
        // form params
        if ($media_images_width_min !== null) {
            $formParams['media.images.width.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_width_min);
        }
        // form params
        if ($media_images_width_max !== null) {
            $formParams['media.images.width.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_width_max);
        }
        // form params
        if ($media_images_height_min !== null) {
            $formParams['media.images.height.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_height_min);
        }
        // form params
        if ($media_images_height_max !== null) {
            $formParams['media.images.height.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_height_max);
        }
        // form params
        if ($media_images_content_length_min !== null) {
            $formParams['media.images.content_length.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_content_length_min);
        }
        // form params
        if ($media_images_content_length_max !== null) {
            $formParams['media.images.content_length.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_content_length_max);
        }
        // form params
        if ($media_images_format !== null) {
            $formParams['media.images.format[]'] = $this->apiClient->getSerializer()->toFormValue($media_images_format);
        }
        // form params
        if ($media_videos_count_min !== null) {
            $formParams['media.videos.count.min'] = $this->apiClient->getSerializer()->toFormValue($media_videos_count_min);
        }
        // form params
        if ($media_videos_count_max !== null) {
            $formParams['media.videos.count.max'] = $this->apiClient->getSerializer()->toFormValue($media_videos_count_max);
        }
        // form params
        if ($author_id !== null) {
            $formParams['author.id[]'] = $this->apiClient->getSerializer()->toFormValue($author_id);
        }
        // form params
        if ($author_name !== null) {
            $formParams['author.name'] = $this->apiClient->getSerializer()->toFormValue($author_name);
        }
        // form params
        if ($source_id !== null) {
            $formParams['source.id[]'] = $this->apiClient->getSerializer()->toFormValue($source_id);
        }
        // form params
        if ($source_name !== null) {
            $formParams['source.name[]'] = $this->apiClient->getSerializer()->toFormValue($source_name);
        }
        // form params
        if ($source_domain !== null) {
            $formParams['source.domain[]'] = $this->apiClient->getSerializer()->toFormValue($source_domain);
        }
        // form params
        if ($source_locations_country !== null) {
            $formParams['source.locations.country[]'] = $this->apiClient->getSerializer()->toFormValue($source_locations_country);
        }
        // form params
        if ($source_locations_state !== null) {
            $formParams['source.locations.state[]'] = $this->apiClient->getSerializer()->toFormValue($source_locations_state);
        }
        // form params
        if ($source_locations_city !== null) {
            $formParams['source.locations.city[]'] = $this->apiClient->getSerializer()->toFormValue($source_locations_city);
        }
        // form params
        if ($source_scopes_country !== null) {
            $formParams['source.scopes.country[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_country);
        }
        // form params
        if ($source_scopes_state !== null) {
            $formParams['source.scopes.state[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_state);
        }
        // form params
        if ($source_scopes_city !== null) {
            $formParams['source.scopes.city[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_city);
        }
        // form params
        if ($source_scopes_level !== null) {
            $formParams['source.scopes.level[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_level);
        }
        // form params
        if ($source_links_in_count_min !== null) {
            $formParams['source.links_in_count.min'] = $this->apiClient->getSerializer()->toFormValue($source_links_in_count_min);
        }
        // form params
        if ($source_links_in_count_max !== null) {
            $formParams['source.links_in_count.max'] = $this->apiClient->getSerializer()->toFormValue($source_links_in_count_max);
        }
        // form params
        if ($source_rankings_alexa_rank_min !== null) {
            $formParams['source.rankings.alexa.rank.min'] = $this->apiClient->getSerializer()->toFormValue($source_rankings_alexa_rank_min);
        }
        // form params
        if ($source_rankings_alexa_rank_max !== null) {
            $formParams['source.rankings.alexa.rank.max'] = $this->apiClient->getSerializer()->toFormValue($source_rankings_alexa_rank_max);
        }
        // form params
        if ($source_rankings_alexa_country !== null) {
            $formParams['source.rankings.alexa.country[]'] = $this->apiClient->getSerializer()->toFormValue($source_rankings_alexa_country);
        }
        // form params
        if ($social_shares_count_facebook_min !== null) {
            $formParams['social_shares_count.facebook.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_facebook_min);
        }
        // form params
        if ($social_shares_count_facebook_max !== null) {
            $formParams['social_shares_count.facebook.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_facebook_max);
        }
        // form params
        if ($social_shares_count_google_plus_min !== null) {
            $formParams['social_shares_count.google_plus.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_google_plus_min);
        }
        // form params
        if ($social_shares_count_google_plus_max !== null) {
            $formParams['social_shares_count.google_plus.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_google_plus_max);
        }
        // form params
        if ($social_shares_count_linkedin_min !== null) {
            $formParams['social_shares_count.linkedin.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_linkedin_min);
        }
        // form params
        if ($social_shares_count_linkedin_max !== null) {
            $formParams['social_shares_count.linkedin.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_linkedin_max);
        }
        // form params
        if ($social_shares_count_reddit_min !== null) {
            $formParams['social_shares_count.reddit.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_reddit_min);
        }
        // form params
        if ($social_shares_count_reddit_max !== null) {
            $formParams['social_shares_count.reddit.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_reddit_max);
        }
        // form params
        if ($cluster !== null) {
            $formParams['cluster'] = $this->apiClient->getSerializer()->toFormValue($cluster);
        }
        // form params
        if ($cluster_algorithm !== null) {
            $formParams['cluster.algorithm'] = $this->apiClient->getSerializer()->toFormValue($cluster_algorithm);
        }
        // form params
        if ($return !== null) {
            $formParams['return[]'] = $this->apiClient->getSerializer()->toFormValue($return);
        }
        // form params
        if ($story_id !== null) {
            $formParams['story_id'] = $this->apiClient->getSerializer()->toFormValue($story_id);
        }
        // form params
        if ($story_url !== null) {
            $formParams['story_url'] = $this->apiClient->getSerializer()->toFormValue($story_url);
        }
        // form params
        if ($story_title !== null) {
            $formParams['story_title'] = $this->apiClient->getSerializer()->toFormValue($story_title);
        }
        // form params
        if ($story_body !== null) {
            $formParams['story_body'] = $this->apiClient->getSerializer()->toFormValue($story_body);
        }
        // form params
        if ($story_published_at !== null) {
            $formParams['story_published_at'] = $this->apiClient->getSerializer()->toFormValue($story_published_at);
        }
        // form params
        if ($story_language !== null) {
            $formParams['story_language'] = $this->apiClient->getSerializer()->toFormValue($story_language);
        }
        // form params
        if ($per_page !== null) {
            $formParams['per_page'] = $this->apiClient->getSerializer()->toFormValue($per_page);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\Coverages',
                '/coverages'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\Coverages', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Coverages', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listHistograms
     *
     * List histograms
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param int $interval_start This parameter is used for setting the start data point of histogram intervals. (optional)
     * @param int $interval_end This parameter is used for setting the end data point of histogram intervals. (optional)
     * @param int $interval_width This parameter is used for setting the width of histogram intervals. (optional)
     * @param string $field This parameter is used for specifying the y-axis variable for the histogram. (optional, default to social_shares_count)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return \Aylien\NewsApi\Models\Histograms
     */
    public function listHistograms($opts = array())
    {
        list($response) = $this->listHistogramsWithHttpInfo($opts);
        return $response;
    }

    /**
     * Operation listHistogramsWithHttpInfo
     *
     * List histograms
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param int $interval_start This parameter is used for setting the start data point of histogram intervals. (optional)
     * @param int $interval_end This parameter is used for setting the end data point of histogram intervals. (optional)
     * @param int $interval_width This parameter is used for setting the width of histogram intervals. (optional)
     * @param string $field This parameter is used for specifying the y-axis variable for the histogram. (optional, default to social_shares_count)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return array of \Aylien\NewsApi\Models\Histograms, HTTP status code, HTTP response headers (array of strings)
     */
    public function listHistogramsWithHttpInfo($opts = array())
    {
        // define parameters
        $id = (!empty($opts['id']) ? $opts['id'] : null);
        $title = (!empty($opts['title']) ? $opts['title'] : null);
        $body = (!empty($opts['body']) ? $opts['body'] : null);
        $text = (!empty($opts['text']) ? $opts['text'] : null);
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $published_at_start = (!empty($opts['published_at_start']) ? $opts['published_at_start'] : null);
        $published_at_end = (!empty($opts['published_at_end']) ? $opts['published_at_end'] : null);
        $categories_taxonomy = (!empty($opts['categories_taxonomy']) ? $opts['categories_taxonomy'] : null);
        $categories_confident = (!empty($opts['categories_confident']) ? $opts['categories_confident'] : null);
        $categories_id = (!empty($opts['categories_id']) ? $opts['categories_id'] : null);
        $categories_level = (!empty($opts['categories_level']) ? $opts['categories_level'] : null);
        $entities_title_text = (!empty($opts['entities_title_text']) ? $opts['entities_title_text'] : null);
        $entities_title_type = (!empty($opts['entities_title_type']) ? $opts['entities_title_type'] : null);
        $entities_title_links_dbpedia = (!empty($opts['entities_title_links_dbpedia']) ? $opts['entities_title_links_dbpedia'] : null);
        $entities_body_text = (!empty($opts['entities_body_text']) ? $opts['entities_body_text'] : null);
        $entities_body_type = (!empty($opts['entities_body_type']) ? $opts['entities_body_type'] : null);
        $entities_body_links_dbpedia = (!empty($opts['entities_body_links_dbpedia']) ? $opts['entities_body_links_dbpedia'] : null);
        $sentiment_title_polarity = (!empty($opts['sentiment_title_polarity']) ? $opts['sentiment_title_polarity'] : null);
        $sentiment_body_polarity = (!empty($opts['sentiment_body_polarity']) ? $opts['sentiment_body_polarity'] : null);
        $media_images_count_min = (!empty($opts['media_images_count_min']) ? $opts['media_images_count_min'] : null);
        $media_images_count_max = (!empty($opts['media_images_count_max']) ? $opts['media_images_count_max'] : null);
        $media_images_width_min = (!empty($opts['media_images_width_min']) ? $opts['media_images_width_min'] : null);
        $media_images_width_max = (!empty($opts['media_images_width_max']) ? $opts['media_images_width_max'] : null);
        $media_images_height_min = (!empty($opts['media_images_height_min']) ? $opts['media_images_height_min'] : null);
        $media_images_height_max = (!empty($opts['media_images_height_max']) ? $opts['media_images_height_max'] : null);
        $media_images_content_length_min = (!empty($opts['media_images_content_length_min']) ? $opts['media_images_content_length_min'] : null);
        $media_images_content_length_max = (!empty($opts['media_images_content_length_max']) ? $opts['media_images_content_length_max'] : null);
        $media_images_format = (!empty($opts['media_images_format']) ? $opts['media_images_format'] : null);
        $media_videos_count_min = (!empty($opts['media_videos_count_min']) ? $opts['media_videos_count_min'] : null);
        $media_videos_count_max = (!empty($opts['media_videos_count_max']) ? $opts['media_videos_count_max'] : null);
        $author_id = (!empty($opts['author_id']) ? $opts['author_id'] : null);
        $author_name = (!empty($opts['author_name']) ? $opts['author_name'] : null);
        $source_id = (!empty($opts['source_id']) ? $opts['source_id'] : null);
        $source_name = (!empty($opts['source_name']) ? $opts['source_name'] : null);
        $source_domain = (!empty($opts['source_domain']) ? $opts['source_domain'] : null);
        $source_locations_country = (!empty($opts['source_locations_country']) ? $opts['source_locations_country'] : null);
        $source_locations_state = (!empty($opts['source_locations_state']) ? $opts['source_locations_state'] : null);
        $source_locations_city = (!empty($opts['source_locations_city']) ? $opts['source_locations_city'] : null);
        $source_scopes_country = (!empty($opts['source_scopes_country']) ? $opts['source_scopes_country'] : null);
        $source_scopes_state = (!empty($opts['source_scopes_state']) ? $opts['source_scopes_state'] : null);
        $source_scopes_city = (!empty($opts['source_scopes_city']) ? $opts['source_scopes_city'] : null);
        $source_scopes_level = (!empty($opts['source_scopes_level']) ? $opts['source_scopes_level'] : null);
        $source_links_in_count_min = (!empty($opts['source_links_in_count_min']) ? $opts['source_links_in_count_min'] : null);
        $source_links_in_count_max = (!empty($opts['source_links_in_count_max']) ? $opts['source_links_in_count_max'] : null);
        $source_rankings_alexa_rank_min = (!empty($opts['source_rankings_alexa_rank_min']) ? $opts['source_rankings_alexa_rank_min'] : null);
        $source_rankings_alexa_rank_max = (!empty($opts['source_rankings_alexa_rank_max']) ? $opts['source_rankings_alexa_rank_max'] : null);
        $source_rankings_alexa_country = (!empty($opts['source_rankings_alexa_country']) ? $opts['source_rankings_alexa_country'] : null);
        $social_shares_count_facebook_min = (!empty($opts['social_shares_count_facebook_min']) ? $opts['social_shares_count_facebook_min'] : null);
        $social_shares_count_facebook_max = (!empty($opts['social_shares_count_facebook_max']) ? $opts['social_shares_count_facebook_max'] : null);
        $social_shares_count_google_plus_min = (!empty($opts['social_shares_count_google_plus_min']) ? $opts['social_shares_count_google_plus_min'] : null);
        $social_shares_count_google_plus_max = (!empty($opts['social_shares_count_google_plus_max']) ? $opts['social_shares_count_google_plus_max'] : null);
        $social_shares_count_linkedin_min = (!empty($opts['social_shares_count_linkedin_min']) ? $opts['social_shares_count_linkedin_min'] : null);
        $social_shares_count_linkedin_max = (!empty($opts['social_shares_count_linkedin_max']) ? $opts['social_shares_count_linkedin_max'] : null);
        $social_shares_count_reddit_min = (!empty($opts['social_shares_count_reddit_min']) ? $opts['social_shares_count_reddit_min'] : null);
        $social_shares_count_reddit_max = (!empty($opts['social_shares_count_reddit_max']) ? $opts['social_shares_count_reddit_max'] : null);
        $interval_start = (!empty($opts['interval_start']) ? $opts['interval_start'] : null);
        $interval_end = (!empty($opts['interval_end']) ? $opts['interval_end'] : null);
        $interval_width = (!empty($opts['interval_width']) ? $opts['interval_width'] : null);
        $field = (!empty($opts['field']) ? $opts['field'] : null);
        
        if (!is_null($media_images_count_min) && ($media_images_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_count_max) && ($media_images_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_min) && ($media_images_width_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_max) && ($media_images_width_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_min) && ($media_images_height_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_max) && ($media_images_height_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_min) && ($media_images_content_length_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_max) && ($media_images_content_length_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_min) && ($media_videos_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_max) && ($media_videos_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_min) && ($source_links_in_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_max) && ($source_links_in_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_min) && ($source_rankings_alexa_rank_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_max) && ($source_rankings_alexa_rank_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_min) && ($social_shares_count_facebook_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_max) && ($social_shares_count_facebook_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_min) && ($social_shares_count_google_plus_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_max) && ($social_shares_count_google_plus_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_min) && ($social_shares_count_linkedin_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_max) && ($social_shares_count_linkedin_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_min) && ($social_shares_count_reddit_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_min" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_max) && ($social_shares_count_reddit_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_max" when calling DefaultApi.listHistograms, must be bigger than 0.0.');
        }

        // parse inputs
        $resourcePath = "/histograms";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if (is_array($id)) {
            $id = $this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }
        if ($id !== null) {
            $queryParams['id[]'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = $this->apiClient->getSerializer()->toQueryValue($title);
        }
        // query params
        if ($body !== null) {
            $queryParams['body'] = $this->apiClient->getSerializer()->toQueryValue($body);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if (is_array($language)) {
            $language = $this->apiClient->getSerializer()->serializeCollection($language, 'multi', true);
        }
        if ($language !== null) {
            $queryParams['language[]'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($published_at_start !== null) {
            $queryParams['published_at.start'] = $this->apiClient->getSerializer()->toQueryValue($published_at_start);
        }
        // query params
        if ($published_at_end !== null) {
            $queryParams['published_at.end'] = $this->apiClient->getSerializer()->toQueryValue($published_at_end);
        }
        // query params
        if ($categories_taxonomy !== null) {
            $queryParams['categories.taxonomy'] = $this->apiClient->getSerializer()->toQueryValue($categories_taxonomy);
        }
        // query params
        if ($categories_confident !== null) {
            $queryParams['categories.confident'] = $this->apiClient->getSerializer()->toQueryValue($categories_confident);
        }
        // query params
        if (is_array($categories_id)) {
            $categories_id = $this->apiClient->getSerializer()->serializeCollection($categories_id, 'multi', true);
        }
        if ($categories_id !== null) {
            $queryParams['categories.id[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_id);
        }
        // query params
        if (is_array($categories_level)) {
            $categories_level = $this->apiClient->getSerializer()->serializeCollection($categories_level, 'multi', true);
        }
        if ($categories_level !== null) {
            $queryParams['categories.level[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_level);
        }
        // query params
        if (is_array($entities_title_text)) {
            $entities_title_text = $this->apiClient->getSerializer()->serializeCollection($entities_title_text, 'multi', true);
        }
        if ($entities_title_text !== null) {
            $queryParams['entities.title.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_text);
        }
        // query params
        if (is_array($entities_title_type)) {
            $entities_title_type = $this->apiClient->getSerializer()->serializeCollection($entities_title_type, 'multi', true);
        }
        if ($entities_title_type !== null) {
            $queryParams['entities.title.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_type);
        }
        // query params
        if (is_array($entities_title_links_dbpedia)) {
            $entities_title_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_title_links_dbpedia, 'multi', true);
        }
        if ($entities_title_links_dbpedia !== null) {
            $queryParams['entities.title.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_links_dbpedia);
        }
        // query params
        if (is_array($entities_body_text)) {
            $entities_body_text = $this->apiClient->getSerializer()->serializeCollection($entities_body_text, 'multi', true);
        }
        if ($entities_body_text !== null) {
            $queryParams['entities.body.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_text);
        }
        // query params
        if (is_array($entities_body_type)) {
            $entities_body_type = $this->apiClient->getSerializer()->serializeCollection($entities_body_type, 'multi', true);
        }
        if ($entities_body_type !== null) {
            $queryParams['entities.body.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_type);
        }
        // query params
        if (is_array($entities_body_links_dbpedia)) {
            $entities_body_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_body_links_dbpedia, 'multi', true);
        }
        if ($entities_body_links_dbpedia !== null) {
            $queryParams['entities.body.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_links_dbpedia);
        }
        // query params
        if ($sentiment_title_polarity !== null) {
            $queryParams['sentiment.title.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_title_polarity);
        }
        // query params
        if ($sentiment_body_polarity !== null) {
            $queryParams['sentiment.body.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_body_polarity);
        }
        // query params
        if ($media_images_count_min !== null) {
            $queryParams['media.images.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_min);
        }
        // query params
        if ($media_images_count_max !== null) {
            $queryParams['media.images.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_max);
        }
        // query params
        if ($media_images_width_min !== null) {
            $queryParams['media.images.width.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_min);
        }
        // query params
        if ($media_images_width_max !== null) {
            $queryParams['media.images.width.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_max);
        }
        // query params
        if ($media_images_height_min !== null) {
            $queryParams['media.images.height.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_min);
        }
        // query params
        if ($media_images_height_max !== null) {
            $queryParams['media.images.height.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_max);
        }
        // query params
        if ($media_images_content_length_min !== null) {
            $queryParams['media.images.content_length.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_min);
        }
        // query params
        if ($media_images_content_length_max !== null) {
            $queryParams['media.images.content_length.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_max);
        }
        // query params
        if (is_array($media_images_format)) {
            $media_images_format = $this->apiClient->getSerializer()->serializeCollection($media_images_format, 'multi', true);
        }
        if ($media_images_format !== null) {
            $queryParams['media.images.format[]'] = $this->apiClient->getSerializer()->toQueryValue($media_images_format);
        }
        // query params
        if ($media_videos_count_min !== null) {
            $queryParams['media.videos.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_min);
        }
        // query params
        if ($media_videos_count_max !== null) {
            $queryParams['media.videos.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_max);
        }
        // query params
        if (is_array($author_id)) {
            $author_id = $this->apiClient->getSerializer()->serializeCollection($author_id, 'multi', true);
        }
        if ($author_id !== null) {
            $queryParams['author.id[]'] = $this->apiClient->getSerializer()->toQueryValue($author_id);
        }
        // query params
        if ($author_name !== null) {
            $queryParams['author.name'] = $this->apiClient->getSerializer()->toQueryValue($author_name);
        }
        // query params
        if (is_array($source_id)) {
            $source_id = $this->apiClient->getSerializer()->serializeCollection($source_id, 'multi', true);
        }
        if ($source_id !== null) {
            $queryParams['source.id[]'] = $this->apiClient->getSerializer()->toQueryValue($source_id);
        }
        // query params
        if (is_array($source_name)) {
            $source_name = $this->apiClient->getSerializer()->serializeCollection($source_name, 'multi', true);
        }
        if ($source_name !== null) {
            $queryParams['source.name[]'] = $this->apiClient->getSerializer()->toQueryValue($source_name);
        }
        // query params
        if (is_array($source_domain)) {
            $source_domain = $this->apiClient->getSerializer()->serializeCollection($source_domain, 'multi', true);
        }
        if ($source_domain !== null) {
            $queryParams['source.domain[]'] = $this->apiClient->getSerializer()->toQueryValue($source_domain);
        }
        // query params
        if (is_array($source_locations_country)) {
            $source_locations_country = $this->apiClient->getSerializer()->serializeCollection($source_locations_country, 'multi', true);
        }
        if ($source_locations_country !== null) {
            $queryParams['source.locations.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_country);
        }
        // query params
        if (is_array($source_locations_state)) {
            $source_locations_state = $this->apiClient->getSerializer()->serializeCollection($source_locations_state, 'multi', true);
        }
        if ($source_locations_state !== null) {
            $queryParams['source.locations.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_state);
        }
        // query params
        if (is_array($source_locations_city)) {
            $source_locations_city = $this->apiClient->getSerializer()->serializeCollection($source_locations_city, 'multi', true);
        }
        if ($source_locations_city !== null) {
            $queryParams['source.locations.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_city);
        }
        // query params
        if (is_array($source_scopes_country)) {
            $source_scopes_country = $this->apiClient->getSerializer()->serializeCollection($source_scopes_country, 'multi', true);
        }
        if ($source_scopes_country !== null) {
            $queryParams['source.scopes.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_country);
        }
        // query params
        if (is_array($source_scopes_state)) {
            $source_scopes_state = $this->apiClient->getSerializer()->serializeCollection($source_scopes_state, 'multi', true);
        }
        if ($source_scopes_state !== null) {
            $queryParams['source.scopes.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_state);
        }
        // query params
        if (is_array($source_scopes_city)) {
            $source_scopes_city = $this->apiClient->getSerializer()->serializeCollection($source_scopes_city, 'multi', true);
        }
        if ($source_scopes_city !== null) {
            $queryParams['source.scopes.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_city);
        }
        // query params
        if (is_array($source_scopes_level)) {
            $source_scopes_level = $this->apiClient->getSerializer()->serializeCollection($source_scopes_level, 'multi', true);
        }
        if ($source_scopes_level !== null) {
            $queryParams['source.scopes.level[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_level);
        }
        // query params
        if ($source_links_in_count_min !== null) {
            $queryParams['source.links_in_count.min'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_min);
        }
        // query params
        if ($source_links_in_count_max !== null) {
            $queryParams['source.links_in_count.max'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_max);
        }
        // query params
        if ($source_rankings_alexa_rank_min !== null) {
            $queryParams['source.rankings.alexa.rank.min'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_min);
        }
        // query params
        if ($source_rankings_alexa_rank_max !== null) {
            $queryParams['source.rankings.alexa.rank.max'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_max);
        }
        // query params
        if (is_array($source_rankings_alexa_country)) {
            $source_rankings_alexa_country = $this->apiClient->getSerializer()->serializeCollection($source_rankings_alexa_country, 'multi', true);
        }
        if ($source_rankings_alexa_country !== null) {
            $queryParams['source.rankings.alexa.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_country);
        }
        // query params
        if ($social_shares_count_facebook_min !== null) {
            $queryParams['social_shares_count.facebook.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_min);
        }
        // query params
        if ($social_shares_count_facebook_max !== null) {
            $queryParams['social_shares_count.facebook.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_max);
        }
        // query params
        if ($social_shares_count_google_plus_min !== null) {
            $queryParams['social_shares_count.google_plus.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_min);
        }
        // query params
        if ($social_shares_count_google_plus_max !== null) {
            $queryParams['social_shares_count.google_plus.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_max);
        }
        // query params
        if ($social_shares_count_linkedin_min !== null) {
            $queryParams['social_shares_count.linkedin.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_min);
        }
        // query params
        if ($social_shares_count_linkedin_max !== null) {
            $queryParams['social_shares_count.linkedin.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_max);
        }
        // query params
        if ($social_shares_count_reddit_min !== null) {
            $queryParams['social_shares_count.reddit.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_min);
        }
        // query params
        if ($social_shares_count_reddit_max !== null) {
            $queryParams['social_shares_count.reddit.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_max);
        }
        // query params
        if ($interval_start !== null) {
            $queryParams['interval.start'] = $this->apiClient->getSerializer()->toQueryValue($interval_start);
        }
        // query params
        if ($interval_end !== null) {
            $queryParams['interval.end'] = $this->apiClient->getSerializer()->toQueryValue($interval_end);
        }
        // query params
        if ($interval_width !== null) {
            $queryParams['interval.width'] = $this->apiClient->getSerializer()->toQueryValue($interval_width);
        }
        // query params
        if ($field !== null) {
            $queryParams['field'] = $this->apiClient->getSerializer()->toQueryValue($field);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\Histograms',
                '/histograms'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\Histograms', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Histograms', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listRelatedStories
     *
     * List related stories
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param bool $cluster This parameter enables clustering for the returned stories. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to false)
     * @param string $cluster_algorithm This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to lingo)
     * @param string[] $return This parameter is used for specifying return fields. (optional)
     * @param int $story_id A story id (optional)
     * @param string $story_url An article or webpage (optional)
     * @param string $story_title Title of the article (optional)
     * @param string $story_body Body of the article (optional)
     * @param string $boost_by This parameter is used for boosting the result by the specified value. (optional)
     * @param string $story_language This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional, default to auto)
     * @param int $per_page This parameter is used for specifying number of items in each page. (optional, default to 3)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return \Aylien\NewsApi\Models\RelatedStories
     */
    public function listRelatedStories($opts = array())
    {
        list($response) = $this->listRelatedStoriesWithHttpInfo($opts);
        return $response;
    }

    /**
     * Operation listRelatedStoriesWithHttpInfo
     *
     * List related stories
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes  is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes  is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param bool $cluster This parameter enables clustering for the returned stories. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to false)
     * @param string $cluster_algorithm This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to lingo)
     * @param string[] $return This parameter is used for specifying return fields. (optional)
     * @param int $story_id A story id (optional)
     * @param string $story_url An article or webpage (optional)
     * @param string $story_title Title of the article (optional)
     * @param string $story_body Body of the article (optional)
     * @param string $boost_by This parameter is used for boosting the result by the specified value. (optional)
     * @param string $story_language This parameter is used for setting the language of the story. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional, default to auto)
     * @param int $per_page This parameter is used for specifying number of items in each page. (optional, default to 3)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return array of \Aylien\NewsApi\Models\RelatedStories, HTTP status code, HTTP response headers (array of strings)
     */
    public function listRelatedStoriesWithHttpInfo($opts = array())
    {
        // define parameters
        $id = (!empty($opts['id']) ? $opts['id'] : null);
        $title = (!empty($opts['title']) ? $opts['title'] : null);
        $body = (!empty($opts['body']) ? $opts['body'] : null);
        $text = (!empty($opts['text']) ? $opts['text'] : null);
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $published_at_start = (!empty($opts['published_at_start']) ? $opts['published_at_start'] : null);
        $published_at_end = (!empty($opts['published_at_end']) ? $opts['published_at_end'] : null);
        $categories_taxonomy = (!empty($opts['categories_taxonomy']) ? $opts['categories_taxonomy'] : null);
        $categories_confident = (!empty($opts['categories_confident']) ? $opts['categories_confident'] : null);
        $categories_id = (!empty($opts['categories_id']) ? $opts['categories_id'] : null);
        $categories_level = (!empty($opts['categories_level']) ? $opts['categories_level'] : null);
        $entities_title_text = (!empty($opts['entities_title_text']) ? $opts['entities_title_text'] : null);
        $entities_title_type = (!empty($opts['entities_title_type']) ? $opts['entities_title_type'] : null);
        $entities_title_links_dbpedia = (!empty($opts['entities_title_links_dbpedia']) ? $opts['entities_title_links_dbpedia'] : null);
        $entities_body_text = (!empty($opts['entities_body_text']) ? $opts['entities_body_text'] : null);
        $entities_body_type = (!empty($opts['entities_body_type']) ? $opts['entities_body_type'] : null);
        $entities_body_links_dbpedia = (!empty($opts['entities_body_links_dbpedia']) ? $opts['entities_body_links_dbpedia'] : null);
        $sentiment_title_polarity = (!empty($opts['sentiment_title_polarity']) ? $opts['sentiment_title_polarity'] : null);
        $sentiment_body_polarity = (!empty($opts['sentiment_body_polarity']) ? $opts['sentiment_body_polarity'] : null);
        $media_images_count_min = (!empty($opts['media_images_count_min']) ? $opts['media_images_count_min'] : null);
        $media_images_count_max = (!empty($opts['media_images_count_max']) ? $opts['media_images_count_max'] : null);
        $media_images_width_min = (!empty($opts['media_images_width_min']) ? $opts['media_images_width_min'] : null);
        $media_images_width_max = (!empty($opts['media_images_width_max']) ? $opts['media_images_width_max'] : null);
        $media_images_height_min = (!empty($opts['media_images_height_min']) ? $opts['media_images_height_min'] : null);
        $media_images_height_max = (!empty($opts['media_images_height_max']) ? $opts['media_images_height_max'] : null);
        $media_images_content_length_min = (!empty($opts['media_images_content_length_min']) ? $opts['media_images_content_length_min'] : null);
        $media_images_content_length_max = (!empty($opts['media_images_content_length_max']) ? $opts['media_images_content_length_max'] : null);
        $media_images_format = (!empty($opts['media_images_format']) ? $opts['media_images_format'] : null);
        $media_videos_count_min = (!empty($opts['media_videos_count_min']) ? $opts['media_videos_count_min'] : null);
        $media_videos_count_max = (!empty($opts['media_videos_count_max']) ? $opts['media_videos_count_max'] : null);
        $author_id = (!empty($opts['author_id']) ? $opts['author_id'] : null);
        $author_name = (!empty($opts['author_name']) ? $opts['author_name'] : null);
        $source_id = (!empty($opts['source_id']) ? $opts['source_id'] : null);
        $source_name = (!empty($opts['source_name']) ? $opts['source_name'] : null);
        $source_domain = (!empty($opts['source_domain']) ? $opts['source_domain'] : null);
        $source_locations_country = (!empty($opts['source_locations_country']) ? $opts['source_locations_country'] : null);
        $source_locations_state = (!empty($opts['source_locations_state']) ? $opts['source_locations_state'] : null);
        $source_locations_city = (!empty($opts['source_locations_city']) ? $opts['source_locations_city'] : null);
        $source_scopes_country = (!empty($opts['source_scopes_country']) ? $opts['source_scopes_country'] : null);
        $source_scopes_state = (!empty($opts['source_scopes_state']) ? $opts['source_scopes_state'] : null);
        $source_scopes_city = (!empty($opts['source_scopes_city']) ? $opts['source_scopes_city'] : null);
        $source_scopes_level = (!empty($opts['source_scopes_level']) ? $opts['source_scopes_level'] : null);
        $source_links_in_count_min = (!empty($opts['source_links_in_count_min']) ? $opts['source_links_in_count_min'] : null);
        $source_links_in_count_max = (!empty($opts['source_links_in_count_max']) ? $opts['source_links_in_count_max'] : null);
        $source_rankings_alexa_rank_min = (!empty($opts['source_rankings_alexa_rank_min']) ? $opts['source_rankings_alexa_rank_min'] : null);
        $source_rankings_alexa_rank_max = (!empty($opts['source_rankings_alexa_rank_max']) ? $opts['source_rankings_alexa_rank_max'] : null);
        $source_rankings_alexa_country = (!empty($opts['source_rankings_alexa_country']) ? $opts['source_rankings_alexa_country'] : null);
        $social_shares_count_facebook_min = (!empty($opts['social_shares_count_facebook_min']) ? $opts['social_shares_count_facebook_min'] : null);
        $social_shares_count_facebook_max = (!empty($opts['social_shares_count_facebook_max']) ? $opts['social_shares_count_facebook_max'] : null);
        $social_shares_count_google_plus_min = (!empty($opts['social_shares_count_google_plus_min']) ? $opts['social_shares_count_google_plus_min'] : null);
        $social_shares_count_google_plus_max = (!empty($opts['social_shares_count_google_plus_max']) ? $opts['social_shares_count_google_plus_max'] : null);
        $social_shares_count_linkedin_min = (!empty($opts['social_shares_count_linkedin_min']) ? $opts['social_shares_count_linkedin_min'] : null);
        $social_shares_count_linkedin_max = (!empty($opts['social_shares_count_linkedin_max']) ? $opts['social_shares_count_linkedin_max'] : null);
        $social_shares_count_reddit_min = (!empty($opts['social_shares_count_reddit_min']) ? $opts['social_shares_count_reddit_min'] : null);
        $social_shares_count_reddit_max = (!empty($opts['social_shares_count_reddit_max']) ? $opts['social_shares_count_reddit_max'] : null);
        $cluster = (!empty($opts['cluster']) ? $opts['cluster'] : null);
        $cluster_algorithm = (!empty($opts['cluster_algorithm']) ? $opts['cluster_algorithm'] : null);
        $return = (!empty($opts['return']) ? $opts['return'] : null);
        $story_id = (!empty($opts['story_id']) ? $opts['story_id'] : null);
        $story_url = (!empty($opts['story_url']) ? $opts['story_url'] : null);
        $story_title = (!empty($opts['story_title']) ? $opts['story_title'] : null);
        $story_body = (!empty($opts['story_body']) ? $opts['story_body'] : null);
        $boost_by = (!empty($opts['boost_by']) ? $opts['boost_by'] : null);
        $story_language = (!empty($opts['story_language']) ? $opts['story_language'] : null);
        $per_page = (!empty($opts['per_page']) ? $opts['per_page'] : null);
        
        if (!is_null($media_images_count_min) && ($media_images_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_count_max) && ($media_images_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_min) && ($media_images_width_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_max) && ($media_images_width_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_min) && ($media_images_height_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_max) && ($media_images_height_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_min) && ($media_images_content_length_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_max) && ($media_images_content_length_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_min) && ($media_videos_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_max) && ($media_videos_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_min) && ($source_links_in_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_max) && ($source_links_in_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_min) && ($source_rankings_alexa_rank_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_max) && ($source_rankings_alexa_rank_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_min) && ($social_shares_count_facebook_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_max) && ($social_shares_count_facebook_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_min) && ($social_shares_count_google_plus_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_max) && ($social_shares_count_google_plus_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_min) && ($social_shares_count_linkedin_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_max) && ($social_shares_count_linkedin_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_min) && ($social_shares_count_reddit_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_min" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_max) && ($social_shares_count_reddit_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_max" when calling DefaultApi.listRelatedStories, must be bigger than 0.0.');
        }

        if (!is_null($per_page) && ($per_page > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listRelatedStories, must be smaller than or equal to 100.0.');
        }
        if (!is_null($per_page) && ($per_page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listRelatedStories, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/related_stories";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($id !== null) {
            $formParams['id[]'] = $this->apiClient->getSerializer()->toFormValue($id);
        }
        // form params
        if ($title !== null) {
            $formParams['title'] = $this->apiClient->getSerializer()->toFormValue($title);
        }
        // form params
        if ($body !== null) {
            $formParams['body'] = $this->apiClient->getSerializer()->toFormValue($body);
        }
        // form params
        if ($text !== null) {
            $formParams['text'] = $this->apiClient->getSerializer()->toFormValue($text);
        }
        // form params
        if ($language !== null) {
            $formParams['language[]'] = $this->apiClient->getSerializer()->toFormValue($language);
        }
        // form params
        if ($published_at_start !== null) {
            $formParams['published_at.start'] = $this->apiClient->getSerializer()->toFormValue($published_at_start);
        }
        // form params
        if ($published_at_end !== null) {
            $formParams['published_at.end'] = $this->apiClient->getSerializer()->toFormValue($published_at_end);
        }
        // form params
        if ($categories_taxonomy !== null) {
            $formParams['categories.taxonomy'] = $this->apiClient->getSerializer()->toFormValue($categories_taxonomy);
        }
        // form params
        if ($categories_confident !== null) {
            $formParams['categories.confident'] = $this->apiClient->getSerializer()->toFormValue($categories_confident);
        }
        // form params
        if ($categories_id !== null) {
            $formParams['categories.id[]'] = $this->apiClient->getSerializer()->toFormValue($categories_id);
        }
        // form params
        if ($categories_level !== null) {
            $formParams['categories.level[]'] = $this->apiClient->getSerializer()->toFormValue($categories_level);
        }
        // form params
        if ($entities_title_text !== null) {
            $formParams['entities.title.text[]'] = $this->apiClient->getSerializer()->toFormValue($entities_title_text);
        }
        // form params
        if ($entities_title_type !== null) {
            $formParams['entities.title.type[]'] = $this->apiClient->getSerializer()->toFormValue($entities_title_type);
        }
        // form params
        if ($entities_title_links_dbpedia !== null) {
            $formParams['entities.title.links.dbpedia[]'] = $this->apiClient->getSerializer()->toFormValue($entities_title_links_dbpedia);
        }
        // form params
        if ($entities_body_text !== null) {
            $formParams['entities.body.text[]'] = $this->apiClient->getSerializer()->toFormValue($entities_body_text);
        }
        // form params
        if ($entities_body_type !== null) {
            $formParams['entities.body.type[]'] = $this->apiClient->getSerializer()->toFormValue($entities_body_type);
        }
        // form params
        if ($entities_body_links_dbpedia !== null) {
            $formParams['entities.body.links.dbpedia[]'] = $this->apiClient->getSerializer()->toFormValue($entities_body_links_dbpedia);
        }
        // form params
        if ($sentiment_title_polarity !== null) {
            $formParams['sentiment.title.polarity'] = $this->apiClient->getSerializer()->toFormValue($sentiment_title_polarity);
        }
        // form params
        if ($sentiment_body_polarity !== null) {
            $formParams['sentiment.body.polarity'] = $this->apiClient->getSerializer()->toFormValue($sentiment_body_polarity);
        }
        // form params
        if ($media_images_count_min !== null) {
            $formParams['media.images.count.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_count_min);
        }
        // form params
        if ($media_images_count_max !== null) {
            $formParams['media.images.count.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_count_max);
        }
        // form params
        if ($media_images_width_min !== null) {
            $formParams['media.images.width.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_width_min);
        }
        // form params
        if ($media_images_width_max !== null) {
            $formParams['media.images.width.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_width_max);
        }
        // form params
        if ($media_images_height_min !== null) {
            $formParams['media.images.height.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_height_min);
        }
        // form params
        if ($media_images_height_max !== null) {
            $formParams['media.images.height.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_height_max);
        }
        // form params
        if ($media_images_content_length_min !== null) {
            $formParams['media.images.content_length.min'] = $this->apiClient->getSerializer()->toFormValue($media_images_content_length_min);
        }
        // form params
        if ($media_images_content_length_max !== null) {
            $formParams['media.images.content_length.max'] = $this->apiClient->getSerializer()->toFormValue($media_images_content_length_max);
        }
        // form params
        if ($media_images_format !== null) {
            $formParams['media.images.format[]'] = $this->apiClient->getSerializer()->toFormValue($media_images_format);
        }
        // form params
        if ($media_videos_count_min !== null) {
            $formParams['media.videos.count.min'] = $this->apiClient->getSerializer()->toFormValue($media_videos_count_min);
        }
        // form params
        if ($media_videos_count_max !== null) {
            $formParams['media.videos.count.max'] = $this->apiClient->getSerializer()->toFormValue($media_videos_count_max);
        }
        // form params
        if ($author_id !== null) {
            $formParams['author.id[]'] = $this->apiClient->getSerializer()->toFormValue($author_id);
        }
        // form params
        if ($author_name !== null) {
            $formParams['author.name'] = $this->apiClient->getSerializer()->toFormValue($author_name);
        }
        // form params
        if ($source_id !== null) {
            $formParams['source.id[]'] = $this->apiClient->getSerializer()->toFormValue($source_id);
        }
        // form params
        if ($source_name !== null) {
            $formParams['source.name[]'] = $this->apiClient->getSerializer()->toFormValue($source_name);
        }
        // form params
        if ($source_domain !== null) {
            $formParams['source.domain[]'] = $this->apiClient->getSerializer()->toFormValue($source_domain);
        }
        // form params
        if ($source_locations_country !== null) {
            $formParams['source.locations.country[]'] = $this->apiClient->getSerializer()->toFormValue($source_locations_country);
        }
        // form params
        if ($source_locations_state !== null) {
            $formParams['source.locations.state[]'] = $this->apiClient->getSerializer()->toFormValue($source_locations_state);
        }
        // form params
        if ($source_locations_city !== null) {
            $formParams['source.locations.city[]'] = $this->apiClient->getSerializer()->toFormValue($source_locations_city);
        }
        // form params
        if ($source_scopes_country !== null) {
            $formParams['source.scopes.country[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_country);
        }
        // form params
        if ($source_scopes_state !== null) {
            $formParams['source.scopes.state[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_state);
        }
        // form params
        if ($source_scopes_city !== null) {
            $formParams['source.scopes.city[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_city);
        }
        // form params
        if ($source_scopes_level !== null) {
            $formParams['source.scopes.level[]'] = $this->apiClient->getSerializer()->toFormValue($source_scopes_level);
        }
        // form params
        if ($source_links_in_count_min !== null) {
            $formParams['source.links_in_count.min'] = $this->apiClient->getSerializer()->toFormValue($source_links_in_count_min);
        }
        // form params
        if ($source_links_in_count_max !== null) {
            $formParams['source.links_in_count.max'] = $this->apiClient->getSerializer()->toFormValue($source_links_in_count_max);
        }
        // form params
        if ($source_rankings_alexa_rank_min !== null) {
            $formParams['source.rankings.alexa.rank.min'] = $this->apiClient->getSerializer()->toFormValue($source_rankings_alexa_rank_min);
        }
        // form params
        if ($source_rankings_alexa_rank_max !== null) {
            $formParams['source.rankings.alexa.rank.max'] = $this->apiClient->getSerializer()->toFormValue($source_rankings_alexa_rank_max);
        }
        // form params
        if ($source_rankings_alexa_country !== null) {
            $formParams['source.rankings.alexa.country[]'] = $this->apiClient->getSerializer()->toFormValue($source_rankings_alexa_country);
        }
        // form params
        if ($social_shares_count_facebook_min !== null) {
            $formParams['social_shares_count.facebook.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_facebook_min);
        }
        // form params
        if ($social_shares_count_facebook_max !== null) {
            $formParams['social_shares_count.facebook.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_facebook_max);
        }
        // form params
        if ($social_shares_count_google_plus_min !== null) {
            $formParams['social_shares_count.google_plus.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_google_plus_min);
        }
        // form params
        if ($social_shares_count_google_plus_max !== null) {
            $formParams['social_shares_count.google_plus.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_google_plus_max);
        }
        // form params
        if ($social_shares_count_linkedin_min !== null) {
            $formParams['social_shares_count.linkedin.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_linkedin_min);
        }
        // form params
        if ($social_shares_count_linkedin_max !== null) {
            $formParams['social_shares_count.linkedin.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_linkedin_max);
        }
        // form params
        if ($social_shares_count_reddit_min !== null) {
            $formParams['social_shares_count.reddit.min'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_reddit_min);
        }
        // form params
        if ($social_shares_count_reddit_max !== null) {
            $formParams['social_shares_count.reddit.max'] = $this->apiClient->getSerializer()->toFormValue($social_shares_count_reddit_max);
        }
        // form params
        if ($cluster !== null) {
            $formParams['cluster'] = $this->apiClient->getSerializer()->toFormValue($cluster);
        }
        // form params
        if ($cluster_algorithm !== null) {
            $formParams['cluster.algorithm'] = $this->apiClient->getSerializer()->toFormValue($cluster_algorithm);
        }
        // form params
        if ($return !== null) {
            $formParams['return[]'] = $this->apiClient->getSerializer()->toFormValue($return);
        }
        // form params
        if ($story_id !== null) {
            $formParams['story_id'] = $this->apiClient->getSerializer()->toFormValue($story_id);
        }
        // form params
        if ($story_url !== null) {
            $formParams['story_url'] = $this->apiClient->getSerializer()->toFormValue($story_url);
        }
        // form params
        if ($story_title !== null) {
            $formParams['story_title'] = $this->apiClient->getSerializer()->toFormValue($story_title);
        }
        // form params
        if ($story_body !== null) {
            $formParams['story_body'] = $this->apiClient->getSerializer()->toFormValue($story_body);
        }
        // form params
        if ($boost_by !== null) {
            $formParams['boost_by'] = $this->apiClient->getSerializer()->toFormValue($boost_by);
        }
        // form params
        if ($story_language !== null) {
            $formParams['story_language'] = $this->apiClient->getSerializer()->toFormValue($story_language);
        }
        // form params
        if ($per_page !== null) {
            $formParams['per_page'] = $this->apiClient->getSerializer()->toFormValue($per_page);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\RelatedStories',
                '/related_stories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\RelatedStories', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\RelatedStories', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listStories
     *
     * List Stories
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param bool $cluster This parameter enables clustering for the returned stories. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to false)
     * @param string $cluster_algorithm This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to lingo)
     * @param string[] $return This parameter is used for specifying return fields. (optional)
     * @param string $sort_by This parameter is used for changing the order column of the results. (optional, default to published_at)
     * @param string $sort_direction This parameter is used for changing the order direction of the result. (optional, default to desc)
     * @param string $cursor This parameter is used for finding a specific page. You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results). (optional, default to *)
     * @param int $per_page This parameter is used for specifying number of items in each page You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results) (optional, default to 10)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return \Aylien\NewsApi\Models\Stories
     */
    public function listStories($opts = array())
    {
        list($response) = $this->listStoriesWithHttpInfo($opts);
        return $response;
    }

    /**
     * Operation listStoriesWithHttpInfo
     *
     * List Stories
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param bool $cluster This parameter enables clustering for the returned stories. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to false)
     * @param string $cluster_algorithm This parameter is used for specifying the clustering algorithm you wish to use. It supprts STC, Lingo and [k-means](https://en.wikipedia.org/wiki/K-means_clustering) algorithms. You can read more about working with clustering [here](https://newsapi.aylien.com/docs/working-with-clustering). (optional, default to lingo)
     * @param string[] $return This parameter is used for specifying return fields. (optional)
     * @param string $sort_by This parameter is used for changing the order column of the results. (optional, default to published_at)
     * @param string $sort_direction This parameter is used for changing the order direction of the result. (optional, default to desc)
     * @param string $cursor This parameter is used for finding a specific page. You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results). (optional, default to *)
     * @param int $per_page This parameter is used for specifying number of items in each page You can read more about pagination of results [here](https://newsapi.aylien.com/docs/pagination-of-results) (optional, default to 10)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return array of \Aylien\NewsApi\Models\Stories, HTTP status code, HTTP response headers (array of strings)
     */
    public function listStoriesWithHttpInfo($opts = array())
    {
        // define parameters
        $id = (!empty($opts['id']) ? $opts['id'] : null);
        $title = (!empty($opts['title']) ? $opts['title'] : null);
        $body = (!empty($opts['body']) ? $opts['body'] : null);
        $text = (!empty($opts['text']) ? $opts['text'] : null);
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $published_at_start = (!empty($opts['published_at_start']) ? $opts['published_at_start'] : null);
        $published_at_end = (!empty($opts['published_at_end']) ? $opts['published_at_end'] : null);
        $categories_taxonomy = (!empty($opts['categories_taxonomy']) ? $opts['categories_taxonomy'] : null);
        $categories_confident = (!empty($opts['categories_confident']) ? $opts['categories_confident'] : null);
        $categories_id = (!empty($opts['categories_id']) ? $opts['categories_id'] : null);
        $categories_level = (!empty($opts['categories_level']) ? $opts['categories_level'] : null);
        $entities_title_text = (!empty($opts['entities_title_text']) ? $opts['entities_title_text'] : null);
        $entities_title_type = (!empty($opts['entities_title_type']) ? $opts['entities_title_type'] : null);
        $entities_title_links_dbpedia = (!empty($opts['entities_title_links_dbpedia']) ? $opts['entities_title_links_dbpedia'] : null);
        $entities_body_text = (!empty($opts['entities_body_text']) ? $opts['entities_body_text'] : null);
        $entities_body_type = (!empty($opts['entities_body_type']) ? $opts['entities_body_type'] : null);
        $entities_body_links_dbpedia = (!empty($opts['entities_body_links_dbpedia']) ? $opts['entities_body_links_dbpedia'] : null);
        $sentiment_title_polarity = (!empty($opts['sentiment_title_polarity']) ? $opts['sentiment_title_polarity'] : null);
        $sentiment_body_polarity = (!empty($opts['sentiment_body_polarity']) ? $opts['sentiment_body_polarity'] : null);
        $media_images_count_min = (!empty($opts['media_images_count_min']) ? $opts['media_images_count_min'] : null);
        $media_images_count_max = (!empty($opts['media_images_count_max']) ? $opts['media_images_count_max'] : null);
        $media_images_width_min = (!empty($opts['media_images_width_min']) ? $opts['media_images_width_min'] : null);
        $media_images_width_max = (!empty($opts['media_images_width_max']) ? $opts['media_images_width_max'] : null);
        $media_images_height_min = (!empty($opts['media_images_height_min']) ? $opts['media_images_height_min'] : null);
        $media_images_height_max = (!empty($opts['media_images_height_max']) ? $opts['media_images_height_max'] : null);
        $media_images_content_length_min = (!empty($opts['media_images_content_length_min']) ? $opts['media_images_content_length_min'] : null);
        $media_images_content_length_max = (!empty($opts['media_images_content_length_max']) ? $opts['media_images_content_length_max'] : null);
        $media_images_format = (!empty($opts['media_images_format']) ? $opts['media_images_format'] : null);
        $media_videos_count_min = (!empty($opts['media_videos_count_min']) ? $opts['media_videos_count_min'] : null);
        $media_videos_count_max = (!empty($opts['media_videos_count_max']) ? $opts['media_videos_count_max'] : null);
        $author_id = (!empty($opts['author_id']) ? $opts['author_id'] : null);
        $author_name = (!empty($opts['author_name']) ? $opts['author_name'] : null);
        $source_id = (!empty($opts['source_id']) ? $opts['source_id'] : null);
        $source_name = (!empty($opts['source_name']) ? $opts['source_name'] : null);
        $source_domain = (!empty($opts['source_domain']) ? $opts['source_domain'] : null);
        $source_locations_country = (!empty($opts['source_locations_country']) ? $opts['source_locations_country'] : null);
        $source_locations_state = (!empty($opts['source_locations_state']) ? $opts['source_locations_state'] : null);
        $source_locations_city = (!empty($opts['source_locations_city']) ? $opts['source_locations_city'] : null);
        $source_scopes_country = (!empty($opts['source_scopes_country']) ? $opts['source_scopes_country'] : null);
        $source_scopes_state = (!empty($opts['source_scopes_state']) ? $opts['source_scopes_state'] : null);
        $source_scopes_city = (!empty($opts['source_scopes_city']) ? $opts['source_scopes_city'] : null);
        $source_scopes_level = (!empty($opts['source_scopes_level']) ? $opts['source_scopes_level'] : null);
        $source_links_in_count_min = (!empty($opts['source_links_in_count_min']) ? $opts['source_links_in_count_min'] : null);
        $source_links_in_count_max = (!empty($opts['source_links_in_count_max']) ? $opts['source_links_in_count_max'] : null);
        $source_rankings_alexa_rank_min = (!empty($opts['source_rankings_alexa_rank_min']) ? $opts['source_rankings_alexa_rank_min'] : null);
        $source_rankings_alexa_rank_max = (!empty($opts['source_rankings_alexa_rank_max']) ? $opts['source_rankings_alexa_rank_max'] : null);
        $source_rankings_alexa_country = (!empty($opts['source_rankings_alexa_country']) ? $opts['source_rankings_alexa_country'] : null);
        $social_shares_count_facebook_min = (!empty($opts['social_shares_count_facebook_min']) ? $opts['social_shares_count_facebook_min'] : null);
        $social_shares_count_facebook_max = (!empty($opts['social_shares_count_facebook_max']) ? $opts['social_shares_count_facebook_max'] : null);
        $social_shares_count_google_plus_min = (!empty($opts['social_shares_count_google_plus_min']) ? $opts['social_shares_count_google_plus_min'] : null);
        $social_shares_count_google_plus_max = (!empty($opts['social_shares_count_google_plus_max']) ? $opts['social_shares_count_google_plus_max'] : null);
        $social_shares_count_linkedin_min = (!empty($opts['social_shares_count_linkedin_min']) ? $opts['social_shares_count_linkedin_min'] : null);
        $social_shares_count_linkedin_max = (!empty($opts['social_shares_count_linkedin_max']) ? $opts['social_shares_count_linkedin_max'] : null);
        $social_shares_count_reddit_min = (!empty($opts['social_shares_count_reddit_min']) ? $opts['social_shares_count_reddit_min'] : null);
        $social_shares_count_reddit_max = (!empty($opts['social_shares_count_reddit_max']) ? $opts['social_shares_count_reddit_max'] : null);
        $cluster = (!empty($opts['cluster']) ? $opts['cluster'] : null);
        $cluster_algorithm = (!empty($opts['cluster_algorithm']) ? $opts['cluster_algorithm'] : null);
        $return = (!empty($opts['return']) ? $opts['return'] : null);
        $sort_by = (!empty($opts['sort_by']) ? $opts['sort_by'] : null);
        $sort_direction = (!empty($opts['sort_direction']) ? $opts['sort_direction'] : null);
        $cursor = (!empty($opts['cursor']) ? $opts['cursor'] : null);
        $per_page = (!empty($opts['per_page']) ? $opts['per_page'] : null);
        
        if (!is_null($media_images_count_min) && ($media_images_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_count_max) && ($media_images_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_min) && ($media_images_width_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_max) && ($media_images_width_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_min) && ($media_images_height_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_max) && ($media_images_height_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_min) && ($media_images_content_length_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_max) && ($media_images_content_length_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_min) && ($media_videos_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_max) && ($media_videos_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_min) && ($source_links_in_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_max) && ($source_links_in_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_min) && ($source_rankings_alexa_rank_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_max) && ($source_rankings_alexa_rank_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_min) && ($social_shares_count_facebook_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_max) && ($social_shares_count_facebook_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_min) && ($social_shares_count_google_plus_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_max) && ($social_shares_count_google_plus_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_min) && ($social_shares_count_linkedin_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_max) && ($social_shares_count_linkedin_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_min) && ($social_shares_count_reddit_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_min" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_max) && ($social_shares_count_reddit_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_max" when calling DefaultApi.listStories, must be bigger than 0.0.');
        }

        if (!is_null($per_page) && ($per_page > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listStories, must be smaller than or equal to 100.0.');
        }
        if (!is_null($per_page) && ($per_page < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$per_page" when calling DefaultApi.listStories, must be bigger than or equal to 1.0.');
        }

        // parse inputs
        $resourcePath = "/stories";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if (is_array($id)) {
            $id = $this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }
        if ($id !== null) {
            $queryParams['id[]'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = $this->apiClient->getSerializer()->toQueryValue($title);
        }
        // query params
        if ($body !== null) {
            $queryParams['body'] = $this->apiClient->getSerializer()->toQueryValue($body);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if (is_array($language)) {
            $language = $this->apiClient->getSerializer()->serializeCollection($language, 'multi', true);
        }
        if ($language !== null) {
            $queryParams['language[]'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($published_at_start !== null) {
            $queryParams['published_at.start'] = $this->apiClient->getSerializer()->toQueryValue($published_at_start);
        }
        // query params
        if ($published_at_end !== null) {
            $queryParams['published_at.end'] = $this->apiClient->getSerializer()->toQueryValue($published_at_end);
        }
        // query params
        if ($categories_taxonomy !== null) {
            $queryParams['categories.taxonomy'] = $this->apiClient->getSerializer()->toQueryValue($categories_taxonomy);
        }
        // query params
        if ($categories_confident !== null) {
            $queryParams['categories.confident'] = $this->apiClient->getSerializer()->toQueryValue($categories_confident);
        }
        // query params
        if (is_array($categories_id)) {
            $categories_id = $this->apiClient->getSerializer()->serializeCollection($categories_id, 'multi', true);
        }
        if ($categories_id !== null) {
            $queryParams['categories.id[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_id);
        }
        // query params
        if (is_array($categories_level)) {
            $categories_level = $this->apiClient->getSerializer()->serializeCollection($categories_level, 'multi', true);
        }
        if ($categories_level !== null) {
            $queryParams['categories.level[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_level);
        }
        // query params
        if (is_array($entities_title_text)) {
            $entities_title_text = $this->apiClient->getSerializer()->serializeCollection($entities_title_text, 'multi', true);
        }
        if ($entities_title_text !== null) {
            $queryParams['entities.title.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_text);
        }
        // query params
        if (is_array($entities_title_type)) {
            $entities_title_type = $this->apiClient->getSerializer()->serializeCollection($entities_title_type, 'multi', true);
        }
        if ($entities_title_type !== null) {
            $queryParams['entities.title.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_type);
        }
        // query params
        if (is_array($entities_title_links_dbpedia)) {
            $entities_title_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_title_links_dbpedia, 'multi', true);
        }
        if ($entities_title_links_dbpedia !== null) {
            $queryParams['entities.title.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_links_dbpedia);
        }
        // query params
        if (is_array($entities_body_text)) {
            $entities_body_text = $this->apiClient->getSerializer()->serializeCollection($entities_body_text, 'multi', true);
        }
        if ($entities_body_text !== null) {
            $queryParams['entities.body.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_text);
        }
        // query params
        if (is_array($entities_body_type)) {
            $entities_body_type = $this->apiClient->getSerializer()->serializeCollection($entities_body_type, 'multi', true);
        }
        if ($entities_body_type !== null) {
            $queryParams['entities.body.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_type);
        }
        // query params
        if (is_array($entities_body_links_dbpedia)) {
            $entities_body_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_body_links_dbpedia, 'multi', true);
        }
        if ($entities_body_links_dbpedia !== null) {
            $queryParams['entities.body.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_links_dbpedia);
        }
        // query params
        if ($sentiment_title_polarity !== null) {
            $queryParams['sentiment.title.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_title_polarity);
        }
        // query params
        if ($sentiment_body_polarity !== null) {
            $queryParams['sentiment.body.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_body_polarity);
        }
        // query params
        if ($media_images_count_min !== null) {
            $queryParams['media.images.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_min);
        }
        // query params
        if ($media_images_count_max !== null) {
            $queryParams['media.images.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_max);
        }
        // query params
        if ($media_images_width_min !== null) {
            $queryParams['media.images.width.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_min);
        }
        // query params
        if ($media_images_width_max !== null) {
            $queryParams['media.images.width.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_max);
        }
        // query params
        if ($media_images_height_min !== null) {
            $queryParams['media.images.height.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_min);
        }
        // query params
        if ($media_images_height_max !== null) {
            $queryParams['media.images.height.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_max);
        }
        // query params
        if ($media_images_content_length_min !== null) {
            $queryParams['media.images.content_length.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_min);
        }
        // query params
        if ($media_images_content_length_max !== null) {
            $queryParams['media.images.content_length.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_max);
        }
        // query params
        if (is_array($media_images_format)) {
            $media_images_format = $this->apiClient->getSerializer()->serializeCollection($media_images_format, 'multi', true);
        }
        if ($media_images_format !== null) {
            $queryParams['media.images.format[]'] = $this->apiClient->getSerializer()->toQueryValue($media_images_format);
        }
        // query params
        if ($media_videos_count_min !== null) {
            $queryParams['media.videos.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_min);
        }
        // query params
        if ($media_videos_count_max !== null) {
            $queryParams['media.videos.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_max);
        }
        // query params
        if (is_array($author_id)) {
            $author_id = $this->apiClient->getSerializer()->serializeCollection($author_id, 'multi', true);
        }
        if ($author_id !== null) {
            $queryParams['author.id[]'] = $this->apiClient->getSerializer()->toQueryValue($author_id);
        }
        // query params
        if ($author_name !== null) {
            $queryParams['author.name'] = $this->apiClient->getSerializer()->toQueryValue($author_name);
        }
        // query params
        if (is_array($source_id)) {
            $source_id = $this->apiClient->getSerializer()->serializeCollection($source_id, 'multi', true);
        }
        if ($source_id !== null) {
            $queryParams['source.id[]'] = $this->apiClient->getSerializer()->toQueryValue($source_id);
        }
        // query params
        if (is_array($source_name)) {
            $source_name = $this->apiClient->getSerializer()->serializeCollection($source_name, 'multi', true);
        }
        if ($source_name !== null) {
            $queryParams['source.name[]'] = $this->apiClient->getSerializer()->toQueryValue($source_name);
        }
        // query params
        if (is_array($source_domain)) {
            $source_domain = $this->apiClient->getSerializer()->serializeCollection($source_domain, 'multi', true);
        }
        if ($source_domain !== null) {
            $queryParams['source.domain[]'] = $this->apiClient->getSerializer()->toQueryValue($source_domain);
        }
        // query params
        if (is_array($source_locations_country)) {
            $source_locations_country = $this->apiClient->getSerializer()->serializeCollection($source_locations_country, 'multi', true);
        }
        if ($source_locations_country !== null) {
            $queryParams['source.locations.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_country);
        }
        // query params
        if (is_array($source_locations_state)) {
            $source_locations_state = $this->apiClient->getSerializer()->serializeCollection($source_locations_state, 'multi', true);
        }
        if ($source_locations_state !== null) {
            $queryParams['source.locations.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_state);
        }
        // query params
        if (is_array($source_locations_city)) {
            $source_locations_city = $this->apiClient->getSerializer()->serializeCollection($source_locations_city, 'multi', true);
        }
        if ($source_locations_city !== null) {
            $queryParams['source.locations.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_city);
        }
        // query params
        if (is_array($source_scopes_country)) {
            $source_scopes_country = $this->apiClient->getSerializer()->serializeCollection($source_scopes_country, 'multi', true);
        }
        if ($source_scopes_country !== null) {
            $queryParams['source.scopes.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_country);
        }
        // query params
        if (is_array($source_scopes_state)) {
            $source_scopes_state = $this->apiClient->getSerializer()->serializeCollection($source_scopes_state, 'multi', true);
        }
        if ($source_scopes_state !== null) {
            $queryParams['source.scopes.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_state);
        }
        // query params
        if (is_array($source_scopes_city)) {
            $source_scopes_city = $this->apiClient->getSerializer()->serializeCollection($source_scopes_city, 'multi', true);
        }
        if ($source_scopes_city !== null) {
            $queryParams['source.scopes.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_city);
        }
        // query params
        if (is_array($source_scopes_level)) {
            $source_scopes_level = $this->apiClient->getSerializer()->serializeCollection($source_scopes_level, 'multi', true);
        }
        if ($source_scopes_level !== null) {
            $queryParams['source.scopes.level[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_level);
        }
        // query params
        if ($source_links_in_count_min !== null) {
            $queryParams['source.links_in_count.min'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_min);
        }
        // query params
        if ($source_links_in_count_max !== null) {
            $queryParams['source.links_in_count.max'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_max);
        }
        // query params
        if ($source_rankings_alexa_rank_min !== null) {
            $queryParams['source.rankings.alexa.rank.min'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_min);
        }
        // query params
        if ($source_rankings_alexa_rank_max !== null) {
            $queryParams['source.rankings.alexa.rank.max'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_max);
        }
        // query params
        if (is_array($source_rankings_alexa_country)) {
            $source_rankings_alexa_country = $this->apiClient->getSerializer()->serializeCollection($source_rankings_alexa_country, 'multi', true);
        }
        if ($source_rankings_alexa_country !== null) {
            $queryParams['source.rankings.alexa.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_country);
        }
        // query params
        if ($social_shares_count_facebook_min !== null) {
            $queryParams['social_shares_count.facebook.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_min);
        }
        // query params
        if ($social_shares_count_facebook_max !== null) {
            $queryParams['social_shares_count.facebook.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_max);
        }
        // query params
        if ($social_shares_count_google_plus_min !== null) {
            $queryParams['social_shares_count.google_plus.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_min);
        }
        // query params
        if ($social_shares_count_google_plus_max !== null) {
            $queryParams['social_shares_count.google_plus.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_max);
        }
        // query params
        if ($social_shares_count_linkedin_min !== null) {
            $queryParams['social_shares_count.linkedin.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_min);
        }
        // query params
        if ($social_shares_count_linkedin_max !== null) {
            $queryParams['social_shares_count.linkedin.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_max);
        }
        // query params
        if ($social_shares_count_reddit_min !== null) {
            $queryParams['social_shares_count.reddit.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_min);
        }
        // query params
        if ($social_shares_count_reddit_max !== null) {
            $queryParams['social_shares_count.reddit.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_max);
        }
        // query params
        if ($cluster !== null) {
            $queryParams['cluster'] = $this->apiClient->getSerializer()->toQueryValue($cluster);
        }
        // query params
        if ($cluster_algorithm !== null) {
            $queryParams['cluster.algorithm'] = $this->apiClient->getSerializer()->toQueryValue($cluster_algorithm);
        }
        // query params
        if (is_array($return)) {
            $return = $this->apiClient->getSerializer()->serializeCollection($return, 'multi', true);
        }
        if ($return !== null) {
            $queryParams['return[]'] = $this->apiClient->getSerializer()->toQueryValue($return);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sort_by'] = $this->apiClient->getSerializer()->toQueryValue($sort_by);
        }
        // query params
        if ($sort_direction !== null) {
            $queryParams['sort_direction'] = $this->apiClient->getSerializer()->toQueryValue($sort_direction);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = $this->apiClient->getSerializer()->toQueryValue($cursor);
        }
        // query params
        if ($per_page !== null) {
            $queryParams['per_page'] = $this->apiClient->getSerializer()->toQueryValue($per_page);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\Stories',
                '/stories'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\Stories', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Stories', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listTimeSeries
     *
     * List time series
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional, default to NOW-7DAYS/DAY)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional, default to NOW/DAY)
     * @param string $period The size of each date range is expressed as an interval to be added to the lower bound. It supports Date Math Syntax. Valid options are &#x60;+&#x60; following an integer number greater than 0 and one of the Date Math keywords. e.g. &#x60;+1DAY&#x60;, &#x60;+2MINUTES&#x60; and &#x60;+1MONTH&#x60;. Here are [Supported keywords](https://newsapi.aylien.com/docs/working-with-dates#date-math). (optional, default to +1DAY)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return \Aylien\NewsApi\Models\TimeSeriesList
     */
    public function listTimeSeries($opts = array())
    {
        list($response) = $this->listTimeSeriesWithHttpInfo($opts);
        return $response;
    }

    /**
     * Operation listTimeSeriesWithHttpInfo
     *
     * List time series
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional, default to NOW-7DAYS/DAY)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional, default to NOW/DAY)
     * @param string $period The size of each date range is expressed as an interval to be added to the lower bound. It supports Date Math Syntax. Valid options are &#x60;+&#x60; following an integer number greater than 0 and one of the Date Math keywords. e.g. &#x60;+1DAY&#x60;, &#x60;+2MINUTES&#x60; and &#x60;+1MONTH&#x60;. Here are [Supported keywords](https://newsapi.aylien.com/docs/working-with-dates#date-math). (optional, default to +1DAY)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return array of \Aylien\NewsApi\Models\TimeSeriesList, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTimeSeriesWithHttpInfo($opts = array())
    {
        // define parameters
        $id = (!empty($opts['id']) ? $opts['id'] : null);
        $title = (!empty($opts['title']) ? $opts['title'] : null);
        $body = (!empty($opts['body']) ? $opts['body'] : null);
        $text = (!empty($opts['text']) ? $opts['text'] : null);
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $categories_taxonomy = (!empty($opts['categories_taxonomy']) ? $opts['categories_taxonomy'] : null);
        $categories_confident = (!empty($opts['categories_confident']) ? $opts['categories_confident'] : null);
        $categories_id = (!empty($opts['categories_id']) ? $opts['categories_id'] : null);
        $categories_level = (!empty($opts['categories_level']) ? $opts['categories_level'] : null);
        $entities_title_text = (!empty($opts['entities_title_text']) ? $opts['entities_title_text'] : null);
        $entities_title_type = (!empty($opts['entities_title_type']) ? $opts['entities_title_type'] : null);
        $entities_title_links_dbpedia = (!empty($opts['entities_title_links_dbpedia']) ? $opts['entities_title_links_dbpedia'] : null);
        $entities_body_text = (!empty($opts['entities_body_text']) ? $opts['entities_body_text'] : null);
        $entities_body_type = (!empty($opts['entities_body_type']) ? $opts['entities_body_type'] : null);
        $entities_body_links_dbpedia = (!empty($opts['entities_body_links_dbpedia']) ? $opts['entities_body_links_dbpedia'] : null);
        $sentiment_title_polarity = (!empty($opts['sentiment_title_polarity']) ? $opts['sentiment_title_polarity'] : null);
        $sentiment_body_polarity = (!empty($opts['sentiment_body_polarity']) ? $opts['sentiment_body_polarity'] : null);
        $media_images_count_min = (!empty($opts['media_images_count_min']) ? $opts['media_images_count_min'] : null);
        $media_images_count_max = (!empty($opts['media_images_count_max']) ? $opts['media_images_count_max'] : null);
        $media_images_width_min = (!empty($opts['media_images_width_min']) ? $opts['media_images_width_min'] : null);
        $media_images_width_max = (!empty($opts['media_images_width_max']) ? $opts['media_images_width_max'] : null);
        $media_images_height_min = (!empty($opts['media_images_height_min']) ? $opts['media_images_height_min'] : null);
        $media_images_height_max = (!empty($opts['media_images_height_max']) ? $opts['media_images_height_max'] : null);
        $media_images_content_length_min = (!empty($opts['media_images_content_length_min']) ? $opts['media_images_content_length_min'] : null);
        $media_images_content_length_max = (!empty($opts['media_images_content_length_max']) ? $opts['media_images_content_length_max'] : null);
        $media_images_format = (!empty($opts['media_images_format']) ? $opts['media_images_format'] : null);
        $media_videos_count_min = (!empty($opts['media_videos_count_min']) ? $opts['media_videos_count_min'] : null);
        $media_videos_count_max = (!empty($opts['media_videos_count_max']) ? $opts['media_videos_count_max'] : null);
        $author_id = (!empty($opts['author_id']) ? $opts['author_id'] : null);
        $author_name = (!empty($opts['author_name']) ? $opts['author_name'] : null);
        $source_id = (!empty($opts['source_id']) ? $opts['source_id'] : null);
        $source_name = (!empty($opts['source_name']) ? $opts['source_name'] : null);
        $source_domain = (!empty($opts['source_domain']) ? $opts['source_domain'] : null);
        $source_locations_country = (!empty($opts['source_locations_country']) ? $opts['source_locations_country'] : null);
        $source_locations_state = (!empty($opts['source_locations_state']) ? $opts['source_locations_state'] : null);
        $source_locations_city = (!empty($opts['source_locations_city']) ? $opts['source_locations_city'] : null);
        $source_scopes_country = (!empty($opts['source_scopes_country']) ? $opts['source_scopes_country'] : null);
        $source_scopes_state = (!empty($opts['source_scopes_state']) ? $opts['source_scopes_state'] : null);
        $source_scopes_city = (!empty($opts['source_scopes_city']) ? $opts['source_scopes_city'] : null);
        $source_scopes_level = (!empty($opts['source_scopes_level']) ? $opts['source_scopes_level'] : null);
        $source_links_in_count_min = (!empty($opts['source_links_in_count_min']) ? $opts['source_links_in_count_min'] : null);
        $source_links_in_count_max = (!empty($opts['source_links_in_count_max']) ? $opts['source_links_in_count_max'] : null);
        $source_rankings_alexa_rank_min = (!empty($opts['source_rankings_alexa_rank_min']) ? $opts['source_rankings_alexa_rank_min'] : null);
        $source_rankings_alexa_rank_max = (!empty($opts['source_rankings_alexa_rank_max']) ? $opts['source_rankings_alexa_rank_max'] : null);
        $source_rankings_alexa_country = (!empty($opts['source_rankings_alexa_country']) ? $opts['source_rankings_alexa_country'] : null);
        $social_shares_count_facebook_min = (!empty($opts['social_shares_count_facebook_min']) ? $opts['social_shares_count_facebook_min'] : null);
        $social_shares_count_facebook_max = (!empty($opts['social_shares_count_facebook_max']) ? $opts['social_shares_count_facebook_max'] : null);
        $social_shares_count_google_plus_min = (!empty($opts['social_shares_count_google_plus_min']) ? $opts['social_shares_count_google_plus_min'] : null);
        $social_shares_count_google_plus_max = (!empty($opts['social_shares_count_google_plus_max']) ? $opts['social_shares_count_google_plus_max'] : null);
        $social_shares_count_linkedin_min = (!empty($opts['social_shares_count_linkedin_min']) ? $opts['social_shares_count_linkedin_min'] : null);
        $social_shares_count_linkedin_max = (!empty($opts['social_shares_count_linkedin_max']) ? $opts['social_shares_count_linkedin_max'] : null);
        $social_shares_count_reddit_min = (!empty($opts['social_shares_count_reddit_min']) ? $opts['social_shares_count_reddit_min'] : null);
        $social_shares_count_reddit_max = (!empty($opts['social_shares_count_reddit_max']) ? $opts['social_shares_count_reddit_max'] : null);
        $published_at_start = (!empty($opts['published_at_start']) ? $opts['published_at_start'] : null);
        $published_at_end = (!empty($opts['published_at_end']) ? $opts['published_at_end'] : null);
        $period = (!empty($opts['period']) ? $opts['period'] : null);
        
        if (!is_null($media_images_count_min) && ($media_images_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_count_max) && ($media_images_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_min) && ($media_images_width_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_max) && ($media_images_width_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_min) && ($media_images_height_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_max) && ($media_images_height_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_min) && ($media_images_content_length_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_max) && ($media_images_content_length_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_min) && ($media_videos_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_max) && ($media_videos_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_min) && ($source_links_in_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_max) && ($source_links_in_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_min) && ($source_rankings_alexa_rank_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_max) && ($source_rankings_alexa_rank_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_min) && ($social_shares_count_facebook_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_max) && ($social_shares_count_facebook_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_min) && ($social_shares_count_google_plus_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_max) && ($social_shares_count_google_plus_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_min) && ($social_shares_count_linkedin_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_max) && ($social_shares_count_linkedin_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_min) && ($social_shares_count_reddit_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_min" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_max) && ($social_shares_count_reddit_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_max" when calling DefaultApi.listTimeSeries, must be bigger than 0.0.');
        }

        // parse inputs
        $resourcePath = "/time_series";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if (is_array($id)) {
            $id = $this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }
        if ($id !== null) {
            $queryParams['id[]'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = $this->apiClient->getSerializer()->toQueryValue($title);
        }
        // query params
        if ($body !== null) {
            $queryParams['body'] = $this->apiClient->getSerializer()->toQueryValue($body);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if (is_array($language)) {
            $language = $this->apiClient->getSerializer()->serializeCollection($language, 'multi', true);
        }
        if ($language !== null) {
            $queryParams['language[]'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($categories_taxonomy !== null) {
            $queryParams['categories.taxonomy'] = $this->apiClient->getSerializer()->toQueryValue($categories_taxonomy);
        }
        // query params
        if ($categories_confident !== null) {
            $queryParams['categories.confident'] = $this->apiClient->getSerializer()->toQueryValue($categories_confident);
        }
        // query params
        if (is_array($categories_id)) {
            $categories_id = $this->apiClient->getSerializer()->serializeCollection($categories_id, 'multi', true);
        }
        if ($categories_id !== null) {
            $queryParams['categories.id[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_id);
        }
        // query params
        if (is_array($categories_level)) {
            $categories_level = $this->apiClient->getSerializer()->serializeCollection($categories_level, 'multi', true);
        }
        if ($categories_level !== null) {
            $queryParams['categories.level[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_level);
        }
        // query params
        if (is_array($entities_title_text)) {
            $entities_title_text = $this->apiClient->getSerializer()->serializeCollection($entities_title_text, 'multi', true);
        }
        if ($entities_title_text !== null) {
            $queryParams['entities.title.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_text);
        }
        // query params
        if (is_array($entities_title_type)) {
            $entities_title_type = $this->apiClient->getSerializer()->serializeCollection($entities_title_type, 'multi', true);
        }
        if ($entities_title_type !== null) {
            $queryParams['entities.title.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_type);
        }
        // query params
        if (is_array($entities_title_links_dbpedia)) {
            $entities_title_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_title_links_dbpedia, 'multi', true);
        }
        if ($entities_title_links_dbpedia !== null) {
            $queryParams['entities.title.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_links_dbpedia);
        }
        // query params
        if (is_array($entities_body_text)) {
            $entities_body_text = $this->apiClient->getSerializer()->serializeCollection($entities_body_text, 'multi', true);
        }
        if ($entities_body_text !== null) {
            $queryParams['entities.body.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_text);
        }
        // query params
        if (is_array($entities_body_type)) {
            $entities_body_type = $this->apiClient->getSerializer()->serializeCollection($entities_body_type, 'multi', true);
        }
        if ($entities_body_type !== null) {
            $queryParams['entities.body.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_type);
        }
        // query params
        if (is_array($entities_body_links_dbpedia)) {
            $entities_body_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_body_links_dbpedia, 'multi', true);
        }
        if ($entities_body_links_dbpedia !== null) {
            $queryParams['entities.body.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_links_dbpedia);
        }
        // query params
        if ($sentiment_title_polarity !== null) {
            $queryParams['sentiment.title.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_title_polarity);
        }
        // query params
        if ($sentiment_body_polarity !== null) {
            $queryParams['sentiment.body.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_body_polarity);
        }
        // query params
        if ($media_images_count_min !== null) {
            $queryParams['media.images.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_min);
        }
        // query params
        if ($media_images_count_max !== null) {
            $queryParams['media.images.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_max);
        }
        // query params
        if ($media_images_width_min !== null) {
            $queryParams['media.images.width.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_min);
        }
        // query params
        if ($media_images_width_max !== null) {
            $queryParams['media.images.width.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_max);
        }
        // query params
        if ($media_images_height_min !== null) {
            $queryParams['media.images.height.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_min);
        }
        // query params
        if ($media_images_height_max !== null) {
            $queryParams['media.images.height.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_max);
        }
        // query params
        if ($media_images_content_length_min !== null) {
            $queryParams['media.images.content_length.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_min);
        }
        // query params
        if ($media_images_content_length_max !== null) {
            $queryParams['media.images.content_length.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_max);
        }
        // query params
        if (is_array($media_images_format)) {
            $media_images_format = $this->apiClient->getSerializer()->serializeCollection($media_images_format, 'multi', true);
        }
        if ($media_images_format !== null) {
            $queryParams['media.images.format[]'] = $this->apiClient->getSerializer()->toQueryValue($media_images_format);
        }
        // query params
        if ($media_videos_count_min !== null) {
            $queryParams['media.videos.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_min);
        }
        // query params
        if ($media_videos_count_max !== null) {
            $queryParams['media.videos.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_max);
        }
        // query params
        if (is_array($author_id)) {
            $author_id = $this->apiClient->getSerializer()->serializeCollection($author_id, 'multi', true);
        }
        if ($author_id !== null) {
            $queryParams['author.id[]'] = $this->apiClient->getSerializer()->toQueryValue($author_id);
        }
        // query params
        if ($author_name !== null) {
            $queryParams['author.name'] = $this->apiClient->getSerializer()->toQueryValue($author_name);
        }
        // query params
        if (is_array($source_id)) {
            $source_id = $this->apiClient->getSerializer()->serializeCollection($source_id, 'multi', true);
        }
        if ($source_id !== null) {
            $queryParams['source.id[]'] = $this->apiClient->getSerializer()->toQueryValue($source_id);
        }
        // query params
        if (is_array($source_name)) {
            $source_name = $this->apiClient->getSerializer()->serializeCollection($source_name, 'multi', true);
        }
        if ($source_name !== null) {
            $queryParams['source.name[]'] = $this->apiClient->getSerializer()->toQueryValue($source_name);
        }
        // query params
        if (is_array($source_domain)) {
            $source_domain = $this->apiClient->getSerializer()->serializeCollection($source_domain, 'multi', true);
        }
        if ($source_domain !== null) {
            $queryParams['source.domain[]'] = $this->apiClient->getSerializer()->toQueryValue($source_domain);
        }
        // query params
        if (is_array($source_locations_country)) {
            $source_locations_country = $this->apiClient->getSerializer()->serializeCollection($source_locations_country, 'multi', true);
        }
        if ($source_locations_country !== null) {
            $queryParams['source.locations.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_country);
        }
        // query params
        if (is_array($source_locations_state)) {
            $source_locations_state = $this->apiClient->getSerializer()->serializeCollection($source_locations_state, 'multi', true);
        }
        if ($source_locations_state !== null) {
            $queryParams['source.locations.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_state);
        }
        // query params
        if (is_array($source_locations_city)) {
            $source_locations_city = $this->apiClient->getSerializer()->serializeCollection($source_locations_city, 'multi', true);
        }
        if ($source_locations_city !== null) {
            $queryParams['source.locations.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_city);
        }
        // query params
        if (is_array($source_scopes_country)) {
            $source_scopes_country = $this->apiClient->getSerializer()->serializeCollection($source_scopes_country, 'multi', true);
        }
        if ($source_scopes_country !== null) {
            $queryParams['source.scopes.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_country);
        }
        // query params
        if (is_array($source_scopes_state)) {
            $source_scopes_state = $this->apiClient->getSerializer()->serializeCollection($source_scopes_state, 'multi', true);
        }
        if ($source_scopes_state !== null) {
            $queryParams['source.scopes.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_state);
        }
        // query params
        if (is_array($source_scopes_city)) {
            $source_scopes_city = $this->apiClient->getSerializer()->serializeCollection($source_scopes_city, 'multi', true);
        }
        if ($source_scopes_city !== null) {
            $queryParams['source.scopes.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_city);
        }
        // query params
        if (is_array($source_scopes_level)) {
            $source_scopes_level = $this->apiClient->getSerializer()->serializeCollection($source_scopes_level, 'multi', true);
        }
        if ($source_scopes_level !== null) {
            $queryParams['source.scopes.level[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_level);
        }
        // query params
        if ($source_links_in_count_min !== null) {
            $queryParams['source.links_in_count.min'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_min);
        }
        // query params
        if ($source_links_in_count_max !== null) {
            $queryParams['source.links_in_count.max'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_max);
        }
        // query params
        if ($source_rankings_alexa_rank_min !== null) {
            $queryParams['source.rankings.alexa.rank.min'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_min);
        }
        // query params
        if ($source_rankings_alexa_rank_max !== null) {
            $queryParams['source.rankings.alexa.rank.max'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_max);
        }
        // query params
        if (is_array($source_rankings_alexa_country)) {
            $source_rankings_alexa_country = $this->apiClient->getSerializer()->serializeCollection($source_rankings_alexa_country, 'multi', true);
        }
        if ($source_rankings_alexa_country !== null) {
            $queryParams['source.rankings.alexa.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_country);
        }
        // query params
        if ($social_shares_count_facebook_min !== null) {
            $queryParams['social_shares_count.facebook.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_min);
        }
        // query params
        if ($social_shares_count_facebook_max !== null) {
            $queryParams['social_shares_count.facebook.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_max);
        }
        // query params
        if ($social_shares_count_google_plus_min !== null) {
            $queryParams['social_shares_count.google_plus.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_min);
        }
        // query params
        if ($social_shares_count_google_plus_max !== null) {
            $queryParams['social_shares_count.google_plus.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_max);
        }
        // query params
        if ($social_shares_count_linkedin_min !== null) {
            $queryParams['social_shares_count.linkedin.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_min);
        }
        // query params
        if ($social_shares_count_linkedin_max !== null) {
            $queryParams['social_shares_count.linkedin.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_max);
        }
        // query params
        if ($social_shares_count_reddit_min !== null) {
            $queryParams['social_shares_count.reddit.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_min);
        }
        // query params
        if ($social_shares_count_reddit_max !== null) {
            $queryParams['social_shares_count.reddit.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_max);
        }
        // query params
        if ($published_at_start !== null) {
            $queryParams['published_at.start'] = $this->apiClient->getSerializer()->toQueryValue($published_at_start);
        }
        // query params
        if ($published_at_end !== null) {
            $queryParams['published_at.end'] = $this->apiClient->getSerializer()->toQueryValue($published_at_end);
        }
        // query params
        if ($period !== null) {
            $queryParams['period'] = $this->apiClient->getSerializer()->toQueryValue($period);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\TimeSeriesList',
                '/time_series'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\TimeSeriesList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\TimeSeriesList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listTrends
     *
     * List trends
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param string $field This parameter is used to specify the trend field. (optional)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return \Aylien\NewsApi\Models\Trends
     */
    public function listTrends($opts = array())
    {
        list($response) = $this->listTrendsWithHttpInfo($opts);
        return $response;
    }

    /**
     * Operation listTrendsWithHttpInfo
     *
     * List trends
     *
     * @param int[] $id This parameter is used for finding stories by story id. (optional)
     * @param string $title This parameter is used for finding stories whose title contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $body This parameter is used for finding stories whose body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string $text This parameter is used for finding stories whose title or body contains a specfic keyword. It supports [boolean operators](https://newsapi.aylien.com/docs/boolean-operators). (optional)
     * @param string[] $language This parameter is used for finding stories whose language is the specified value. It supports [ISO 639-1](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes) language codes. (optional)
     * @param string $published_at_start This parameter is used for finding stories whose published at time is greater than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $published_at_end This parameter is used for finding stories whose published at time is less than the specified value. [Here](https://newsapi.aylien.com/docs/working-with-dates) you can find more information about how [to work with dates](https://newsapi.aylien.com/docs/working-with-dates). (optional)
     * @param string $categories_taxonomy This parameter is used for defining the type of the taxonomy for the rest of the categories queries. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param bool $categories_confident This parameter is used for finding stories whose categories are confident. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional, default to true)
     * @param string[] $categories_id This parameter is used for finding stories by categories id. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param int[] $categories_level This parameter is used for finding stories by categories level. You can read more about working with categories [here](https://newsapi.aylien.com/docs/working-with-categories). (optional)
     * @param string[] $entities_title_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_title_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in story titles. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_text This parameter is used to find stories based on the specified entities &#x60;text&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_type This parameter is used to find stories based on the specified entities &#x60;type&#x60; in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string[] $entities_body_links_dbpedia This parameter is used to find stories based on the specified entities dbpedia URL in the body of stories. You can read more about working with entities [here](https://newsapi.aylien.com/docs/working-with-entities). (optional)
     * @param string $sentiment_title_polarity This parameter is used for finding stories whose title sentiment is the specified value. (optional)
     * @param string $sentiment_body_polarity This parameter is used for finding stories whose body sentiment is the specified value. (optional)
     * @param int $media_images_count_min This parameter is used for finding stories whose number of images is greater than or equal to the specified value. (optional)
     * @param int $media_images_count_max This parameter is used for finding stories whose number of images is less than or equal to the specified value. (optional)
     * @param int $media_images_width_min This parameter is used for finding stories whose width of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_width_max This parameter is used for finding stories whose width of images are less than or equal to the specified value. (optional)
     * @param int $media_images_height_min This parameter is used for finding stories whose height of images are greater than or equal to the specified value. (optional)
     * @param int $media_images_height_max This parameter is used for finding stories whose height of images are less than or equal to the specified value. (optional)
     * @param int $media_images_content_length_min This parameter is used for finding stories whose images content length are greater than or equal to the specified value. (optional)
     * @param int $media_images_content_length_max This parameter is used for finding stories whose images content length are less than or equal to the specified value. (optional)
     * @param string[] $media_images_format This parameter is used for finding stories whose images format are the specified value. (optional)
     * @param int $media_videos_count_min This parameter is used for finding stories whose number of videos is greater than or equal to the specified value. (optional)
     * @param int $media_videos_count_max This parameter is used for finding stories whose number of videos is less than or equal to the specified value. (optional)
     * @param int[] $author_id This parameter is used for finding stories whose author id is the specified value. (optional)
     * @param string $author_name This parameter is used for finding stories whose author full name contains the specified value. (optional)
     * @param int[] $source_id This parameter is used for finding stories whose source id is the specified value. (optional)
     * @param string[] $source_name This parameter is used for finding stories whose source name contains the specified value. (optional)
     * @param string[] $source_domain This parameter is used for finding stories whose source domain is the specified value. (optional)
     * @param string[] $source_locations_country This parameter is used for finding stories whose source country is the specified value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_state This parameter is used for finding stories whose source state/province is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_locations_city This parameter is used for finding stories whose source city is the specified value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_country This parameter is used for finding stories whose source scopes is the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_state This parameter is used for finding stories whose source scopes is the specified state/province value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_city This parameter is used for finding stories whose source scopes is the specified city value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param string[] $source_scopes_level This parameter is used for finding stories whose source scopes is the specified level value. [Here](https://newsapi.aylien.com/docs/working-with-locations) you can find more information about how [to work with locations](https://newsapi.aylien.com/docs/working-with-locations). (optional)
     * @param int $source_links_in_count_min This parameter is used for finding stories from sources whose Links in count is greater than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_links_in_count_max This parameter is used for finding stories from sources whose Links in count is less than or equal to the specified value. You can read more about working with Links in count [here](https://newsapi.aylien.com/docs/working-with-links-in-count). (optional)
     * @param int $source_rankings_alexa_rank_min This parameter is used for finding stories from sources whose Alexa rank is greater than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $source_rankings_alexa_rank_max This parameter is used for finding stories from sources whose Alexa rank is less than or equal to the specified value. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param string[] $source_rankings_alexa_country This parameter is used for finding stories from sources whose Alexa rank is in the specified country value. It supports [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country codes. You can read more about working with Alexa ranks [here](https://newsapi.aylien.com/docs/working-with-alexa-ranks). (optional)
     * @param int $social_shares_count_facebook_min This parameter is used for finding stories whose Facebook social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_facebook_max This parameter is used for finding stories whose Facebook social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_min This parameter is used for finding stories whose Google+ social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_google_plus_max This parameter is used for finding stories whose Google+ social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_min This parameter is used for finding stories whose LinkedIn social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_linkedin_max This parameter is used for finding stories whose LinkedIn social shares count is less than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_min This parameter is used for finding stories whose Reddit social shares count is greater than or equal to the specified value. (optional)
     * @param int $social_shares_count_reddit_max This parameter is used for finding stories whose Reddit social shares count is less than or equal to the specified value. (optional)
     * @param string $field This parameter is used to specify the trend field. (optional)
     * @throws \Aylien\NewsApi\ApiException on non-2xx response
     * @return array of \Aylien\NewsApi\Models\Trends, HTTP status code, HTTP response headers (array of strings)
     */
    public function listTrendsWithHttpInfo($opts = array())
    {
        // define parameters
        $id = (!empty($opts['id']) ? $opts['id'] : null);
        $title = (!empty($opts['title']) ? $opts['title'] : null);
        $body = (!empty($opts['body']) ? $opts['body'] : null);
        $text = (!empty($opts['text']) ? $opts['text'] : null);
        $language = (!empty($opts['language']) ? $opts['language'] : null);
        $published_at_start = (!empty($opts['published_at_start']) ? $opts['published_at_start'] : null);
        $published_at_end = (!empty($opts['published_at_end']) ? $opts['published_at_end'] : null);
        $categories_taxonomy = (!empty($opts['categories_taxonomy']) ? $opts['categories_taxonomy'] : null);
        $categories_confident = (!empty($opts['categories_confident']) ? $opts['categories_confident'] : null);
        $categories_id = (!empty($opts['categories_id']) ? $opts['categories_id'] : null);
        $categories_level = (!empty($opts['categories_level']) ? $opts['categories_level'] : null);
        $entities_title_text = (!empty($opts['entities_title_text']) ? $opts['entities_title_text'] : null);
        $entities_title_type = (!empty($opts['entities_title_type']) ? $opts['entities_title_type'] : null);
        $entities_title_links_dbpedia = (!empty($opts['entities_title_links_dbpedia']) ? $opts['entities_title_links_dbpedia'] : null);
        $entities_body_text = (!empty($opts['entities_body_text']) ? $opts['entities_body_text'] : null);
        $entities_body_type = (!empty($opts['entities_body_type']) ? $opts['entities_body_type'] : null);
        $entities_body_links_dbpedia = (!empty($opts['entities_body_links_dbpedia']) ? $opts['entities_body_links_dbpedia'] : null);
        $sentiment_title_polarity = (!empty($opts['sentiment_title_polarity']) ? $opts['sentiment_title_polarity'] : null);
        $sentiment_body_polarity = (!empty($opts['sentiment_body_polarity']) ? $opts['sentiment_body_polarity'] : null);
        $media_images_count_min = (!empty($opts['media_images_count_min']) ? $opts['media_images_count_min'] : null);
        $media_images_count_max = (!empty($opts['media_images_count_max']) ? $opts['media_images_count_max'] : null);
        $media_images_width_min = (!empty($opts['media_images_width_min']) ? $opts['media_images_width_min'] : null);
        $media_images_width_max = (!empty($opts['media_images_width_max']) ? $opts['media_images_width_max'] : null);
        $media_images_height_min = (!empty($opts['media_images_height_min']) ? $opts['media_images_height_min'] : null);
        $media_images_height_max = (!empty($opts['media_images_height_max']) ? $opts['media_images_height_max'] : null);
        $media_images_content_length_min = (!empty($opts['media_images_content_length_min']) ? $opts['media_images_content_length_min'] : null);
        $media_images_content_length_max = (!empty($opts['media_images_content_length_max']) ? $opts['media_images_content_length_max'] : null);
        $media_images_format = (!empty($opts['media_images_format']) ? $opts['media_images_format'] : null);
        $media_videos_count_min = (!empty($opts['media_videos_count_min']) ? $opts['media_videos_count_min'] : null);
        $media_videos_count_max = (!empty($opts['media_videos_count_max']) ? $opts['media_videos_count_max'] : null);
        $author_id = (!empty($opts['author_id']) ? $opts['author_id'] : null);
        $author_name = (!empty($opts['author_name']) ? $opts['author_name'] : null);
        $source_id = (!empty($opts['source_id']) ? $opts['source_id'] : null);
        $source_name = (!empty($opts['source_name']) ? $opts['source_name'] : null);
        $source_domain = (!empty($opts['source_domain']) ? $opts['source_domain'] : null);
        $source_locations_country = (!empty($opts['source_locations_country']) ? $opts['source_locations_country'] : null);
        $source_locations_state = (!empty($opts['source_locations_state']) ? $opts['source_locations_state'] : null);
        $source_locations_city = (!empty($opts['source_locations_city']) ? $opts['source_locations_city'] : null);
        $source_scopes_country = (!empty($opts['source_scopes_country']) ? $opts['source_scopes_country'] : null);
        $source_scopes_state = (!empty($opts['source_scopes_state']) ? $opts['source_scopes_state'] : null);
        $source_scopes_city = (!empty($opts['source_scopes_city']) ? $opts['source_scopes_city'] : null);
        $source_scopes_level = (!empty($opts['source_scopes_level']) ? $opts['source_scopes_level'] : null);
        $source_links_in_count_min = (!empty($opts['source_links_in_count_min']) ? $opts['source_links_in_count_min'] : null);
        $source_links_in_count_max = (!empty($opts['source_links_in_count_max']) ? $opts['source_links_in_count_max'] : null);
        $source_rankings_alexa_rank_min = (!empty($opts['source_rankings_alexa_rank_min']) ? $opts['source_rankings_alexa_rank_min'] : null);
        $source_rankings_alexa_rank_max = (!empty($opts['source_rankings_alexa_rank_max']) ? $opts['source_rankings_alexa_rank_max'] : null);
        $source_rankings_alexa_country = (!empty($opts['source_rankings_alexa_country']) ? $opts['source_rankings_alexa_country'] : null);
        $social_shares_count_facebook_min = (!empty($opts['social_shares_count_facebook_min']) ? $opts['social_shares_count_facebook_min'] : null);
        $social_shares_count_facebook_max = (!empty($opts['social_shares_count_facebook_max']) ? $opts['social_shares_count_facebook_max'] : null);
        $social_shares_count_google_plus_min = (!empty($opts['social_shares_count_google_plus_min']) ? $opts['social_shares_count_google_plus_min'] : null);
        $social_shares_count_google_plus_max = (!empty($opts['social_shares_count_google_plus_max']) ? $opts['social_shares_count_google_plus_max'] : null);
        $social_shares_count_linkedin_min = (!empty($opts['social_shares_count_linkedin_min']) ? $opts['social_shares_count_linkedin_min'] : null);
        $social_shares_count_linkedin_max = (!empty($opts['social_shares_count_linkedin_max']) ? $opts['social_shares_count_linkedin_max'] : null);
        $social_shares_count_reddit_min = (!empty($opts['social_shares_count_reddit_min']) ? $opts['social_shares_count_reddit_min'] : null);
        $social_shares_count_reddit_max = (!empty($opts['social_shares_count_reddit_max']) ? $opts['social_shares_count_reddit_max'] : null);
        $field = (!empty($opts['field']) ? $opts['field'] : null);
        
        if (!is_null($media_images_count_min) && ($media_images_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_count_max) && ($media_images_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_count_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_min) && ($media_images_width_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_width_max) && ($media_images_width_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_width_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_min) && ($media_images_height_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_height_max) && ($media_images_height_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_height_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_min) && ($media_images_content_length_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_images_content_length_max) && ($media_images_content_length_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_images_content_length_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_min) && ($media_videos_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($media_videos_count_max) && ($media_videos_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$media_videos_count_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_min) && ($source_links_in_count_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($source_links_in_count_max) && ($source_links_in_count_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_links_in_count_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_min) && ($source_rankings_alexa_rank_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($source_rankings_alexa_rank_max) && ($source_rankings_alexa_rank_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$source_rankings_alexa_rank_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_min) && ($social_shares_count_facebook_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_facebook_max) && ($social_shares_count_facebook_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_facebook_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_min) && ($social_shares_count_google_plus_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_google_plus_max) && ($social_shares_count_google_plus_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_google_plus_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_min) && ($social_shares_count_linkedin_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_linkedin_max) && ($social_shares_count_linkedin_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_linkedin_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_min) && ($social_shares_count_reddit_min <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_min" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        if (!is_null($social_shares_count_reddit_max) && ($social_shares_count_reddit_max <= 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$social_shares_count_reddit_max" when calling DefaultApi.listTrends, must be bigger than 0.0.');
        }

        // parse inputs
        $resourcePath = "/trends";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/x-www-form-urlencoded']);

        // query params
        if (is_array($id)) {
            $id = $this->apiClient->getSerializer()->serializeCollection($id, 'multi', true);
        }
        if ($id !== null) {
            $queryParams['id[]'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($title !== null) {
            $queryParams['title'] = $this->apiClient->getSerializer()->toQueryValue($title);
        }
        // query params
        if ($body !== null) {
            $queryParams['body'] = $this->apiClient->getSerializer()->toQueryValue($body);
        }
        // query params
        if ($text !== null) {
            $queryParams['text'] = $this->apiClient->getSerializer()->toQueryValue($text);
        }
        // query params
        if (is_array($language)) {
            $language = $this->apiClient->getSerializer()->serializeCollection($language, 'multi', true);
        }
        if ($language !== null) {
            $queryParams['language[]'] = $this->apiClient->getSerializer()->toQueryValue($language);
        }
        // query params
        if ($published_at_start !== null) {
            $queryParams['published_at.start'] = $this->apiClient->getSerializer()->toQueryValue($published_at_start);
        }
        // query params
        if ($published_at_end !== null) {
            $queryParams['published_at.end'] = $this->apiClient->getSerializer()->toQueryValue($published_at_end);
        }
        // query params
        if ($categories_taxonomy !== null) {
            $queryParams['categories.taxonomy'] = $this->apiClient->getSerializer()->toQueryValue($categories_taxonomy);
        }
        // query params
        if ($categories_confident !== null) {
            $queryParams['categories.confident'] = $this->apiClient->getSerializer()->toQueryValue($categories_confident);
        }
        // query params
        if (is_array($categories_id)) {
            $categories_id = $this->apiClient->getSerializer()->serializeCollection($categories_id, 'multi', true);
        }
        if ($categories_id !== null) {
            $queryParams['categories.id[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_id);
        }
        // query params
        if (is_array($categories_level)) {
            $categories_level = $this->apiClient->getSerializer()->serializeCollection($categories_level, 'multi', true);
        }
        if ($categories_level !== null) {
            $queryParams['categories.level[]'] = $this->apiClient->getSerializer()->toQueryValue($categories_level);
        }
        // query params
        if (is_array($entities_title_text)) {
            $entities_title_text = $this->apiClient->getSerializer()->serializeCollection($entities_title_text, 'multi', true);
        }
        if ($entities_title_text !== null) {
            $queryParams['entities.title.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_text);
        }
        // query params
        if (is_array($entities_title_type)) {
            $entities_title_type = $this->apiClient->getSerializer()->serializeCollection($entities_title_type, 'multi', true);
        }
        if ($entities_title_type !== null) {
            $queryParams['entities.title.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_type);
        }
        // query params
        if (is_array($entities_title_links_dbpedia)) {
            $entities_title_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_title_links_dbpedia, 'multi', true);
        }
        if ($entities_title_links_dbpedia !== null) {
            $queryParams['entities.title.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_title_links_dbpedia);
        }
        // query params
        if (is_array($entities_body_text)) {
            $entities_body_text = $this->apiClient->getSerializer()->serializeCollection($entities_body_text, 'multi', true);
        }
        if ($entities_body_text !== null) {
            $queryParams['entities.body.text[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_text);
        }
        // query params
        if (is_array($entities_body_type)) {
            $entities_body_type = $this->apiClient->getSerializer()->serializeCollection($entities_body_type, 'multi', true);
        }
        if ($entities_body_type !== null) {
            $queryParams['entities.body.type[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_type);
        }
        // query params
        if (is_array($entities_body_links_dbpedia)) {
            $entities_body_links_dbpedia = $this->apiClient->getSerializer()->serializeCollection($entities_body_links_dbpedia, 'multi', true);
        }
        if ($entities_body_links_dbpedia !== null) {
            $queryParams['entities.body.links.dbpedia[]'] = $this->apiClient->getSerializer()->toQueryValue($entities_body_links_dbpedia);
        }
        // query params
        if ($sentiment_title_polarity !== null) {
            $queryParams['sentiment.title.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_title_polarity);
        }
        // query params
        if ($sentiment_body_polarity !== null) {
            $queryParams['sentiment.body.polarity'] = $this->apiClient->getSerializer()->toQueryValue($sentiment_body_polarity);
        }
        // query params
        if ($media_images_count_min !== null) {
            $queryParams['media.images.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_min);
        }
        // query params
        if ($media_images_count_max !== null) {
            $queryParams['media.images.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_count_max);
        }
        // query params
        if ($media_images_width_min !== null) {
            $queryParams['media.images.width.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_min);
        }
        // query params
        if ($media_images_width_max !== null) {
            $queryParams['media.images.width.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_width_max);
        }
        // query params
        if ($media_images_height_min !== null) {
            $queryParams['media.images.height.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_min);
        }
        // query params
        if ($media_images_height_max !== null) {
            $queryParams['media.images.height.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_height_max);
        }
        // query params
        if ($media_images_content_length_min !== null) {
            $queryParams['media.images.content_length.min'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_min);
        }
        // query params
        if ($media_images_content_length_max !== null) {
            $queryParams['media.images.content_length.max'] = $this->apiClient->getSerializer()->toQueryValue($media_images_content_length_max);
        }
        // query params
        if (is_array($media_images_format)) {
            $media_images_format = $this->apiClient->getSerializer()->serializeCollection($media_images_format, 'multi', true);
        }
        if ($media_images_format !== null) {
            $queryParams['media.images.format[]'] = $this->apiClient->getSerializer()->toQueryValue($media_images_format);
        }
        // query params
        if ($media_videos_count_min !== null) {
            $queryParams['media.videos.count.min'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_min);
        }
        // query params
        if ($media_videos_count_max !== null) {
            $queryParams['media.videos.count.max'] = $this->apiClient->getSerializer()->toQueryValue($media_videos_count_max);
        }
        // query params
        if (is_array($author_id)) {
            $author_id = $this->apiClient->getSerializer()->serializeCollection($author_id, 'multi', true);
        }
        if ($author_id !== null) {
            $queryParams['author.id[]'] = $this->apiClient->getSerializer()->toQueryValue($author_id);
        }
        // query params
        if ($author_name !== null) {
            $queryParams['author.name'] = $this->apiClient->getSerializer()->toQueryValue($author_name);
        }
        // query params
        if (is_array($source_id)) {
            $source_id = $this->apiClient->getSerializer()->serializeCollection($source_id, 'multi', true);
        }
        if ($source_id !== null) {
            $queryParams['source.id[]'] = $this->apiClient->getSerializer()->toQueryValue($source_id);
        }
        // query params
        if (is_array($source_name)) {
            $source_name = $this->apiClient->getSerializer()->serializeCollection($source_name, 'multi', true);
        }
        if ($source_name !== null) {
            $queryParams['source.name[]'] = $this->apiClient->getSerializer()->toQueryValue($source_name);
        }
        // query params
        if (is_array($source_domain)) {
            $source_domain = $this->apiClient->getSerializer()->serializeCollection($source_domain, 'multi', true);
        }
        if ($source_domain !== null) {
            $queryParams['source.domain[]'] = $this->apiClient->getSerializer()->toQueryValue($source_domain);
        }
        // query params
        if (is_array($source_locations_country)) {
            $source_locations_country = $this->apiClient->getSerializer()->serializeCollection($source_locations_country, 'multi', true);
        }
        if ($source_locations_country !== null) {
            $queryParams['source.locations.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_country);
        }
        // query params
        if (is_array($source_locations_state)) {
            $source_locations_state = $this->apiClient->getSerializer()->serializeCollection($source_locations_state, 'multi', true);
        }
        if ($source_locations_state !== null) {
            $queryParams['source.locations.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_state);
        }
        // query params
        if (is_array($source_locations_city)) {
            $source_locations_city = $this->apiClient->getSerializer()->serializeCollection($source_locations_city, 'multi', true);
        }
        if ($source_locations_city !== null) {
            $queryParams['source.locations.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_locations_city);
        }
        // query params
        if (is_array($source_scopes_country)) {
            $source_scopes_country = $this->apiClient->getSerializer()->serializeCollection($source_scopes_country, 'multi', true);
        }
        if ($source_scopes_country !== null) {
            $queryParams['source.scopes.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_country);
        }
        // query params
        if (is_array($source_scopes_state)) {
            $source_scopes_state = $this->apiClient->getSerializer()->serializeCollection($source_scopes_state, 'multi', true);
        }
        if ($source_scopes_state !== null) {
            $queryParams['source.scopes.state[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_state);
        }
        // query params
        if (is_array($source_scopes_city)) {
            $source_scopes_city = $this->apiClient->getSerializer()->serializeCollection($source_scopes_city, 'multi', true);
        }
        if ($source_scopes_city !== null) {
            $queryParams['source.scopes.city[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_city);
        }
        // query params
        if (is_array($source_scopes_level)) {
            $source_scopes_level = $this->apiClient->getSerializer()->serializeCollection($source_scopes_level, 'multi', true);
        }
        if ($source_scopes_level !== null) {
            $queryParams['source.scopes.level[]'] = $this->apiClient->getSerializer()->toQueryValue($source_scopes_level);
        }
        // query params
        if ($source_links_in_count_min !== null) {
            $queryParams['source.links_in_count.min'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_min);
        }
        // query params
        if ($source_links_in_count_max !== null) {
            $queryParams['source.links_in_count.max'] = $this->apiClient->getSerializer()->toQueryValue($source_links_in_count_max);
        }
        // query params
        if ($source_rankings_alexa_rank_min !== null) {
            $queryParams['source.rankings.alexa.rank.min'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_min);
        }
        // query params
        if ($source_rankings_alexa_rank_max !== null) {
            $queryParams['source.rankings.alexa.rank.max'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_rank_max);
        }
        // query params
        if (is_array($source_rankings_alexa_country)) {
            $source_rankings_alexa_country = $this->apiClient->getSerializer()->serializeCollection($source_rankings_alexa_country, 'multi', true);
        }
        if ($source_rankings_alexa_country !== null) {
            $queryParams['source.rankings.alexa.country[]'] = $this->apiClient->getSerializer()->toQueryValue($source_rankings_alexa_country);
        }
        // query params
        if ($social_shares_count_facebook_min !== null) {
            $queryParams['social_shares_count.facebook.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_min);
        }
        // query params
        if ($social_shares_count_facebook_max !== null) {
            $queryParams['social_shares_count.facebook.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_facebook_max);
        }
        // query params
        if ($social_shares_count_google_plus_min !== null) {
            $queryParams['social_shares_count.google_plus.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_min);
        }
        // query params
        if ($social_shares_count_google_plus_max !== null) {
            $queryParams['social_shares_count.google_plus.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_google_plus_max);
        }
        // query params
        if ($social_shares_count_linkedin_min !== null) {
            $queryParams['social_shares_count.linkedin.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_min);
        }
        // query params
        if ($social_shares_count_linkedin_max !== null) {
            $queryParams['social_shares_count.linkedin.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_linkedin_max);
        }
        // query params
        if ($social_shares_count_reddit_min !== null) {
            $queryParams['social_shares_count.reddit.min'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_min);
        }
        // query params
        if ($social_shares_count_reddit_max !== null) {
            $queryParams['social_shares_count.reddit.max'] = $this->apiClient->getSerializer()->toQueryValue($social_shares_count_reddit_max);
        }
        // query params
        if ($field !== null) {
            $queryParams['field'] = $this->apiClient->getSerializer()->toQueryValue($field);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-Key');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-Key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-AYLIEN-NewsAPI-Application-ID');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-AYLIEN-NewsAPI-Application-ID'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Aylien\NewsApi\Models\Trends',
                '/trends'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Aylien\NewsApi\Models\Trends', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Trends', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Aylien\NewsApi\Models\Errors', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
