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
    static $apiModelName = 'Coverages';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'story_title' => 'string',
        'story_body' => 'string',
        'story_published_at' => '\DateTime',
        'story_language' => 'string',
        'coverages' => '\Aylien\NewsApi\Models\Story[]'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'story_title' => 'story_title',
        'story_body' => 'story_body',
        'story_published_at' => 'story_published_at',
        'story_language' => 'story_language',
        'coverages' => 'coverages'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'story_title' => 'setStoryTitle',
        'story_body' => 'setStoryBody',
        'story_published_at' => 'setStoryPublishedAt',
        'story_language' => 'setStoryLanguage',
        'coverages' => 'setCoverages'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'story_title' => 'getStoryTitle',
        'story_body' => 'getStoryBody',
        'story_published_at' => 'getStoryPublishedAt',
        'story_language' => 'getStoryLanguage',
        'coverages' => 'getCoverages'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $story_title The input story title
      * @var string
      */
    protected $story_title;
    /**
      * $story_body The input story body
      * @var string
      */
    protected $story_body;
    /**
      * $story_published_at The input story published date
      * @var \DateTime
      */
    protected $story_published_at;
    /**
      * $story_language The input story language
      * @var string
      */
    protected $story_language;
    /**
      * $coverages An array of coverages for the input story
      * @var \Aylien\NewsApi\Models\Story[]
      */
    protected $coverages;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->story_title = $data["story_title"];
            $this->story_body = $data["story_body"];
            $this->story_published_at = $data["story_published_at"];
            $this->story_language = $data["story_language"];
            $this->coverages = $data["coverages"];
        }
    }
    /**
     * Gets story_title
     * @return string
     */
    public function getStoryTitle()
    {
        return $this->story_title;
    }
  
    /**
     * Sets story_title
     * @param string $story_title The input story title
     * @return $this
     */
    public function setStoryTitle($story_title)
    {
        
        $this->story_title = $story_title;
        return $this;
    }
    /**
     * Gets story_body
     * @return string
     */
    public function getStoryBody()
    {
        return $this->story_body;
    }
  
    /**
     * Sets story_body
     * @param string $story_body The input story body
     * @return $this
     */
    public function setStoryBody($story_body)
    {
        
        $this->story_body = $story_body;
        return $this;
    }
    /**
     * Gets story_published_at
     * @return \DateTime
     */
    public function getStoryPublishedAt()
    {
        return $this->story_published_at;
    }
  
    /**
     * Sets story_published_at
     * @param \DateTime $story_published_at The input story published date
     * @return $this
     */
    public function setStoryPublishedAt($story_published_at)
    {
        
        $this->story_published_at = $story_published_at;
        return $this;
    }
    /**
     * Gets story_language
     * @return string
     */
    public function getStoryLanguage()
    {
        return $this->story_language;
    }
  
    /**
     * Sets story_language
     * @param string $story_language The input story language
     * @return $this
     */
    public function setStoryLanguage($story_language)
    {
        
        $this->story_language = $story_language;
        return $this;
    }
    /**
     * Gets coverages
     * @return \Aylien\NewsApi\Models\Story[]
     */
    public function getCoverages()
    {
        return $this->coverages;
    }
  
    /**
     * Sets coverages
     * @param \Aylien\NewsApi\Models\Story[] $coverages An array of coverages for the input story
     * @return $this
     */
    public function setCoverages($coverages)
    {
        
        $this->coverages = $coverages;
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
