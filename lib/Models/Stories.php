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
    static $apiModelName = 'Stories';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'stories' => '\Aylien\NewsApi\Models\Story[]',
        'clusters' => '\Aylien\NewsApi\Models\StoryCluster[]',
        'next_page_cursor' => 'string'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'stories' => 'stories',
        'clusters' => 'clusters',
        'next_page_cursor' => 'next_page_cursor'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'stories' => 'setStories',
        'clusters' => 'setClusters',
        'next_page_cursor' => 'setNextPageCursor'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'stories' => 'getStories',
        'clusters' => 'getClusters',
        'next_page_cursor' => 'getNextPageCursor'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $stories An array of stories
      * @var \Aylien\NewsApi\Models\Story[]
      */
    protected $stories;
    /**
      * $clusters An array of clusters
      * @var \Aylien\NewsApi\Models\StoryCluster[]
      */
    protected $clusters;
    /**
      * $next_page_cursor The next page cursor
      * @var string
      */
    protected $next_page_cursor;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->stories = $data["stories"];
            $this->clusters = $data["clusters"];
            $this->next_page_cursor = $data["next_page_cursor"];
        }
    }
    /**
     * Gets stories
     * @return \Aylien\NewsApi\Models\Story[]
     */
    public function getStories()
    {
        return $this->stories;
    }
  
    /**
     * Sets stories
     * @param \Aylien\NewsApi\Models\Story[] $stories An array of stories
     * @return $this
     */
    public function setStories($stories)
    {
        
        $this->stories = $stories;
        return $this;
    }
    /**
     * Gets clusters
     * @return \Aylien\NewsApi\Models\StoryCluster[]
     */
    public function getClusters()
    {
        return $this->clusters;
    }
  
    /**
     * Sets clusters
     * @param \Aylien\NewsApi\Models\StoryCluster[] $clusters An array of clusters
     * @return $this
     */
    public function setClusters($clusters)
    {
        
        $this->clusters = $clusters;
        return $this;
    }
    /**
     * Gets next_page_cursor
     * @return string
     */
    public function getNextPageCursor()
    {
        return $this->next_page_cursor;
    }
  
    /**
     * Sets next_page_cursor
     * @param string $next_page_cursor The next page cursor
     * @return $this
     */
    public function setNextPageCursor($next_page_cursor)
    {
        
        $this->next_page_cursor = $next_page_cursor;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
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
