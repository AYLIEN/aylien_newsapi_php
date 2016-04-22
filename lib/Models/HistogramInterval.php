<?php
/**
 * HistogramInterval
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
 * HistogramInterval Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class HistogramInterval implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'HistogramInterval';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'bin' => 'int',
        'count' => 'int'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'bin' => 'bin',
        'count' => 'count'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'bin' => 'setBin',
        'count' => 'setCount'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'bin' => 'getBin',
        'count' => 'getCount'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $bin Histogram bin
      * @var int
      */
    protected $bin;
    /**
      * $count Histogram bin size
      * @var int
      */
    protected $count;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->bin = $data["bin"];
            $this->count = $data["count"];
        }
    }
    /**
     * Gets bin
     * @return int
     */
    public function getBin()
    {
        return $this->bin;
    }
  
    /**
     * Sets bin
     * @param int $bin Histogram bin
     * @return $this
     */
    public function setBin($bin)
    {
        
        $this->bin = $bin;
        return $this;
    }
    /**
     * Gets count
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }
  
    /**
     * Sets count
     * @param int $count Histogram bin size
     * @return $this
     */
    public function setCount($count)
    {
        
        $this->count = $count;
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
