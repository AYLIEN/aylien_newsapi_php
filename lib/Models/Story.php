<?php
/**
 * Story
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   Hamed Ramezanian Nik
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/AYLIEN/aylien_newsapi_php
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

namespace Aylien\NewsApi\Models;

use \ArrayAccess;

/**
 * Story Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Story implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Story';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = array(
        'id' => 'int',
        'title' => 'string',
        'body' => 'string',
        'summary' => '\Aylien\NewsApi\Models\Summary',
        'source' => '\Aylien\NewsApi\Models\Source',
        'author' => '\Aylien\NewsApi\Models\Author',
        'entities' => '\Aylien\NewsApi\Models\Entities',
        'keywords' => 'string[]',
        'hashtags' => 'string[]',
        'characters_count' => 'int',
        'words_count' => 'int',
        'sentences_count' => 'int',
        'paragraphs_count' => 'int',
        'categories' => '\Aylien\NewsApi\Models\Category[]',
        'social_shares_count' => '\Aylien\NewsApi\Models\ShareCounts',
        'media' => '\Aylien\NewsApi\Models\Media[]',
        'sentiment' => '\Aylien\NewsApi\Models\Sentiments',
        'language' => 'string',
        'published_at' => '\DateTime',
        'links' => '\Aylien\NewsApi\Models\StoryLinks'
    );

    public static function apiTypes()
    {
        return self::$apiTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'title' => 'title',
        'body' => 'body',
        'summary' => 'summary',
        'source' => 'source',
        'author' => 'author',
        'entities' => 'entities',
        'keywords' => 'keywords',
        'hashtags' => 'hashtags',
        'characters_count' => 'characters_count',
        'words_count' => 'words_count',
        'sentences_count' => 'sentences_count',
        'paragraphs_count' => 'paragraphs_count',
        'categories' => 'categories',
        'social_shares_count' => 'social_shares_count',
        'media' => 'media',
        'sentiment' => 'sentiment',
        'language' => 'language',
        'published_at' => 'published_at',
        'links' => 'links'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'title' => 'setTitle',
        'body' => 'setBody',
        'summary' => 'setSummary',
        'source' => 'setSource',
        'author' => 'setAuthor',
        'entities' => 'setEntities',
        'keywords' => 'setKeywords',
        'hashtags' => 'setHashtags',
        'characters_count' => 'setCharactersCount',
        'words_count' => 'setWordsCount',
        'sentences_count' => 'setSentencesCount',
        'paragraphs_count' => 'setParagraphsCount',
        'categories' => 'setCategories',
        'social_shares_count' => 'setSocialSharesCount',
        'media' => 'setMedia',
        'sentiment' => 'setSentiment',
        'language' => 'setLanguage',
        'published_at' => 'setPublishedAt',
        'links' => 'setLinks'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'title' => 'getTitle',
        'body' => 'getBody',
        'summary' => 'getSummary',
        'source' => 'getSource',
        'author' => 'getAuthor',
        'entities' => 'getEntities',
        'keywords' => 'getKeywords',
        'hashtags' => 'getHashtags',
        'characters_count' => 'getCharactersCount',
        'words_count' => 'getWordsCount',
        'sentences_count' => 'getSentencesCount',
        'paragraphs_count' => 'getParagraphsCount',
        'categories' => 'getCategories',
        'social_shares_count' => 'getSocialSharesCount',
        'media' => 'getMedia',
        'sentiment' => 'getSentiment',
        'language' => 'getLanguage',
        'published_at' => 'getPublishedAt',
        'links' => 'getLinks'
    );

    public static function getters()
    {
        return self::$getters;
    }

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['hashtags'] = isset($data['hashtags']) ? $data['hashtags'] : null;
        $this->container['characters_count'] = isset($data['characters_count']) ? $data['characters_count'] : null;
        $this->container['words_count'] = isset($data['words_count']) ? $data['words_count'] : null;
        $this->container['sentences_count'] = isset($data['sentences_count']) ? $data['sentences_count'] : null;
        $this->container['paragraphs_count'] = isset($data['paragraphs_count']) ? $data['paragraphs_count'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['social_shares_count'] = isset($data['social_shares_count']) ? $data['social_shares_count'] : null;
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['sentiment'] = isset($data['sentiment']) ? $data['sentiment'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['published_at'] = isset($data['published_at']) ? $data['published_at'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the story which is a unique identification
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Title of the story
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     * @param string $body Body of the story
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets summary
     * @return \Aylien\NewsApi\Models\Summary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     * @param \Aylien\NewsApi\Models\Summary $summary The suggested story summary
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets source
     * @return \Aylien\NewsApi\Models\Source
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     * @param \Aylien\NewsApi\Models\Source $source The story source
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets author
     * @return \Aylien\NewsApi\Models\Author
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
     * Sets author
     * @param \Aylien\NewsApi\Models\Author $author The story author
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /**
     * Gets entities
     * @return \Aylien\NewsApi\Models\Entities
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     * @param \Aylien\NewsApi\Models\Entities $entities Extracted entities from the story title or body
     * @return $this
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets keywords
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     * @param string[] $keywords Extracted keywords mentioned in the story title or body
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets hashtags
     * @return string[]
     */
    public function getHashtags()
    {
        return $this->container['hashtags'];
    }

    /**
     * Sets hashtags
     * @param string[] $hashtags An array of suggested Story hashtags
     * @return $this
     */
    public function setHashtags($hashtags)
    {
        $this->container['hashtags'] = $hashtags;

        return $this;
    }

    /**
     * Gets characters_count
     * @return int
     */
    public function getCharactersCount()
    {
        return $this->container['characters_count'];
    }

    /**
     * Sets characters_count
     * @param int $characters_count Character count of the story body
     * @return $this
     */
    public function setCharactersCount($characters_count)
    {
        $this->container['characters_count'] = $characters_count;

        return $this;
    }

    /**
     * Gets words_count
     * @return int
     */
    public function getWordsCount()
    {
        return $this->container['words_count'];
    }

    /**
     * Sets words_count
     * @param int $words_count Word count of the story body
     * @return $this
     */
    public function setWordsCount($words_count)
    {
        $this->container['words_count'] = $words_count;

        return $this;
    }

    /**
     * Gets sentences_count
     * @return int
     */
    public function getSentencesCount()
    {
        return $this->container['sentences_count'];
    }

    /**
     * Sets sentences_count
     * @param int $sentences_count Sentence count of the story body
     * @return $this
     */
    public function setSentencesCount($sentences_count)
    {
        $this->container['sentences_count'] = $sentences_count;

        return $this;
    }

    /**
     * Gets paragraphs_count
     * @return int
     */
    public function getParagraphsCount()
    {
        return $this->container['paragraphs_count'];
    }

    /**
     * Sets paragraphs_count
     * @param int $paragraphs_count Paragraph count of the story body
     * @return $this
     */
    public function setParagraphsCount($paragraphs_count)
    {
        $this->container['paragraphs_count'] = $paragraphs_count;

        return $this;
    }

    /**
     * Gets categories
     * @return \Aylien\NewsApi\Models\Category[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     * @param \Aylien\NewsApi\Models\Category[] $categories Suggested categories for the story
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets social_shares_count
     * @return \Aylien\NewsApi\Models\ShareCounts
     */
    public function getSocialSharesCount()
    {
        return $this->container['social_shares_count'];
    }

    /**
     * Sets social_shares_count
     * @param \Aylien\NewsApi\Models\ShareCounts $social_shares_count Social shares count for the story
     * @return $this
     */
    public function setSocialSharesCount($social_shares_count)
    {
        $this->container['social_shares_count'] = $social_shares_count;

        return $this;
    }

    /**
     * Gets media
     * @return \Aylien\NewsApi\Models\Media[]
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     * @param \Aylien\NewsApi\Models\Media[] $media An array of extracted media such as images and videos
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets sentiment
     * @return \Aylien\NewsApi\Models\Sentiments
     */
    public function getSentiment()
    {
        return $this->container['sentiment'];
    }

    /**
     * Sets sentiment
     * @param \Aylien\NewsApi\Models\Sentiments $sentiment Suggested sentiments for the story title or body
     * @return $this
     */
    public function setSentiment($sentiment)
    {
        $this->container['sentiment'] = $sentiment;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language Language of the story
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets published_at
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->container['published_at'];
    }

    /**
     * Sets published_at
     * @param \DateTime $published_at Published date of the story
     * @return $this
     */
    public function setPublishedAt($published_at)
    {
        $this->container['published_at'] = $published_at;

        return $this;
    }

    /**
     * Gets links
     * @return \Aylien\NewsApi\Models\StoryLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Aylien\NewsApi\Models\StoryLinks $links Links which is related to the story
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Aylien\NewsApi\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Aylien\NewsApi\ObjectSerializer::sanitizeForSerialization($this));
    }
}
