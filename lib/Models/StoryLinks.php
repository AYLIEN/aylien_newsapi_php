<?php
/**
 * StoryLinks
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
 * StoryLinks Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class StoryLinks implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'StoryLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'permalink' => 'string',
        'related_stories' => 'string',
        'coverages' => 'string'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'permalink' => 'permalink',
        'related_stories' => 'related_stories',
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
        'permalink' => 'setPermalink',
        'related_stories' => 'setRelatedStories',
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
        'permalink' => 'getPermalink',
        'related_stories' => 'getRelatedStories',
        'coverages' => 'getCoverages'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $permalink The story permalink URL
      * @var string
      */
    protected $permalink;
    /**
      * $related_stories The related stories URL
      * @var string
      */
    protected $related_stories;
    /**
      * $coverages The coverages URL
      * @var string
      */
    protected $coverages;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->permalink = $data["permalink"];
            $this->related_stories = $data["related_stories"];
            $this->coverages = $data["coverages"];
        }
    }
    /**
     * Gets permalink
     * @return string
     */
    public function getPermalink()
    {
        return $this->permalink;
    }
  
    /**
     * Sets permalink
     * @param string $permalink The story permalink URL
     * @return $this
     */
    public function setPermalink($permalink)
    {
        
        $this->permalink = $permalink;
        return $this;
    }
    /**
     * Gets related_stories
     * @return string
     */
    public function getRelatedStories()
    {
        return $this->related_stories;
    }
  
    /**
     * Sets related_stories
     * @param string $related_stories The related stories URL
     * @return $this
     */
    public function setRelatedStories($related_stories)
    {
        
        $this->related_stories = $related_stories;
        return $this;
    }
    /**
     * Gets coverages
     * @return string
     */
    public function getCoverages()
    {
        return $this->coverages;
    }
  
    /**
     * Sets coverages
     * @param string $coverages The coverages URL
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
