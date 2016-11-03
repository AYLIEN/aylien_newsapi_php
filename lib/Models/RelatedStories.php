<?php
/**
 * RelatedStories
 *
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

namespace Aylien\NewsApi\Models;

use \ArrayAccess;

/**
 * RelatedStories Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://newsapi.aylien.com/
 */
class RelatedStories implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'RelatedStories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = [
        'story_title' => 'string',
        'story_body' => 'string',
        'story_language' => 'string',
        'related_stories' => '\Aylien\NewsApi\Models\Story[]',
        'clusters' => '\Aylien\NewsApi\Models\StoryCluster[]'
    ];

    public static function apiTypes()
    {
        return self::$apiTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'story_title' => 'story_title',
        'story_body' => 'story_body',
        'story_language' => 'story_language',
        'related_stories' => 'related_stories',
        'clusters' => 'clusters'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'story_title' => 'setStoryTitle',
        'story_body' => 'setStoryBody',
        'story_language' => 'setStoryLanguage',
        'related_stories' => 'setRelatedStories',
        'clusters' => 'setClusters'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'story_title' => 'getStoryTitle',
        'story_body' => 'getStoryBody',
        'story_language' => 'getStoryLanguage',
        'related_stories' => 'getRelatedStories',
        'clusters' => 'getClusters'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['story_title'] = isset($data['story_title']) ? $data['story_title'] : null;
        $this->container['story_body'] = isset($data['story_body']) ? $data['story_body'] : null;
        $this->container['story_language'] = isset($data['story_language']) ? $data['story_language'] : null;
        $this->container['related_stories'] = isset($data['related_stories']) ? $data['related_stories'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
     * Gets story_title
     * @return string
     */
    public function getStoryTitle()
    {
        return $this->container['story_title'];
    }

    /**
     * Sets story_title
     * @param string $story_title The input story title
     * @return $this
     */
    public function setStoryTitle($story_title)
    {
        $this->container['story_title'] = $story_title;

        return $this;
    }

    /**
     * Gets story_body
     * @return string
     */
    public function getStoryBody()
    {
        return $this->container['story_body'];
    }

    /**
     * Sets story_body
     * @param string $story_body The input story body
     * @return $this
     */
    public function setStoryBody($story_body)
    {
        $this->container['story_body'] = $story_body;

        return $this;
    }

    /**
     * Gets story_language
     * @return string
     */
    public function getStoryLanguage()
    {
        return $this->container['story_language'];
    }

    /**
     * Sets story_language
     * @param string $story_language The input story language
     * @return $this
     */
    public function setStoryLanguage($story_language)
    {
        $this->container['story_language'] = $story_language;

        return $this;
    }

    /**
     * Gets related_stories
     * @return \Aylien\NewsApi\Models\Story[]
     */
    public function getRelatedStories()
    {
        return $this->container['related_stories'];
    }

    /**
     * Sets related_stories
     * @param \Aylien\NewsApi\Models\Story[] $related_stories An array of related stories for the input story
     * @return $this
     */
    public function setRelatedStories($related_stories)
    {
        $this->container['related_stories'] = $related_stories;

        return $this;
    }

    /**
     * Gets clusters
     * @return \Aylien\NewsApi\Models\StoryCluster[]
     */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
     * Sets clusters
     * @param \Aylien\NewsApi\Models\StoryCluster[] $clusters An array of clusters
     * @return $this
     */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;

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
