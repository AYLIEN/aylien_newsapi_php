<?php
/**
 * CategoryLinks
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
 * CategoryLinks Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class CategoryLinks implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'CategoryLinks';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'self' => 'string',
        'parent' => 'string'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'self' => 'self',
        'parent' => 'parent'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'self' => 'setSelf',
        'parent' => 'setParent'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'self' => 'getSelf',
        'parent' => 'getParent'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $self A URL points to the category
      * @var string
      */
    protected $self;
    /**
      * $parent A URL points to the parent category
      * @var string
      */
    protected $parent;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->self = $data["self"];
            $this->parent = $data["parent"];
        }
    }
    /**
     * Gets self
     * @return string
     */
    public function getSelf()
    {
        return $this->self;
    }
  
    /**
     * Sets self
     * @param string $self A URL points to the category
     * @return $this
     */
    public function setSelf($self)
    {
        
        $this->self = $self;
        return $this;
    }
    /**
     * Gets parent
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
  
    /**
     * Sets parent
     * @param string $parent A URL points to the parent category
     * @return $this
     */
    public function setParent($parent)
    {
        
        $this->parent = $parent;
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
