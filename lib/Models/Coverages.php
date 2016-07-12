<?php
/**
 * Coverages
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
 * Coverages Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Coverages implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Coverages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = array(
        'story_title' => 'string',
        'story_body' => 'string',
        'story_published_at' => '\DateTime',
        'story_language' => 'string',
        'coverages' => '\Aylien\NewsApi\Models\Story[]',
        'clusters' => '\Aylien\NewsApi\Models\StoryCluster[]'
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
        'story_title' => 'story_title',
        'story_body' => 'story_body',
        'story_published_at' => 'story_published_at',
        'story_language' => 'story_language',
        'coverages' => 'coverages',
        'clusters' => 'clusters'
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
        'story_title' => 'setStoryTitle',
        'story_body' => 'setStoryBody',
        'story_published_at' => 'setStoryPublishedAt',
        'story_language' => 'setStoryLanguage',
        'coverages' => 'setCoverages',
        'clusters' => 'setClusters'
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
        'story_title' => 'getStoryTitle',
        'story_body' => 'getStoryBody',
        'story_published_at' => 'getStoryPublishedAt',
        'story_language' => 'getStoryLanguage',
        'coverages' => 'getCoverages',
        'clusters' => 'getClusters'
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
        $this->container['story_title'] = isset($data['story_title']) ? $data['story_title'] : null;
        $this->container['story_body'] = isset($data['story_body']) ? $data['story_body'] : null;
        $this->container['story_published_at'] = isset($data['story_published_at']) ? $data['story_published_at'] : null;
        $this->container['story_language'] = isset($data['story_language']) ? $data['story_language'] : null;
        $this->container['coverages'] = isset($data['coverages']) ? $data['coverages'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
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
     * Gets story_published_at
     * @return \DateTime
     */
    public function getStoryPublishedAt()
    {
        return $this->container['story_published_at'];
    }

    /**
     * Sets story_published_at
     * @param \DateTime $story_published_at The input story published date
     * @return $this
     */
    public function setStoryPublishedAt($story_published_at)
    {
        $this->container['story_published_at'] = $story_published_at;

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
     * Gets coverages
     * @return \Aylien\NewsApi\Models\Story[]
     */
    public function getCoverages()
    {
        return $this->container['coverages'];
    }

    /**
     * Sets coverages
     * @param \Aylien\NewsApi\Models\Story[] $coverages An array of coverages for the input story
     * @return $this
     */
    public function setCoverages($coverages)
    {
        $this->container['coverages'] = $coverages;

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
