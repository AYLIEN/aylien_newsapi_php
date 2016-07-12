<?php
/**
 * Stories
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
 * Stories Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Stories implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Stories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = array(
        'stories' => '\Aylien\NewsApi\Models\Story[]',
        'clusters' => '\Aylien\NewsApi\Models\StoryCluster[]',
        'next_page_cursor' => 'string'
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
        'stories' => 'stories',
        'clusters' => 'clusters',
        'next_page_cursor' => 'next_page_cursor'
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
        'stories' => 'setStories',
        'clusters' => 'setClusters',
        'next_page_cursor' => 'setNextPageCursor'
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
        'stories' => 'getStories',
        'clusters' => 'getClusters',
        'next_page_cursor' => 'getNextPageCursor'
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
        $this->container['stories'] = isset($data['stories']) ? $data['stories'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
        $this->container['next_page_cursor'] = isset($data['next_page_cursor']) ? $data['next_page_cursor'] : null;
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
     * Gets stories
     * @return \Aylien\NewsApi\Models\Story[]
     */
    public function getStories()
    {
        return $this->container['stories'];
    }

    /**
     * Sets stories
     * @param \Aylien\NewsApi\Models\Story[] $stories An array of stories
     * @return $this
     */
    public function setStories($stories)
    {
        $this->container['stories'] = $stories;

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
     * Gets next_page_cursor
     * @return string
     */
    public function getNextPageCursor()
    {
        return $this->container['next_page_cursor'];
    }

    /**
     * Sets next_page_cursor
     * @param string $next_page_cursor The next page cursor
     * @return $this
     */
    public function setNextPageCursor($next_page_cursor)
    {
        $this->container['next_page_cursor'] = $next_page_cursor;

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
