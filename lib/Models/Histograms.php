<?php
/**
 * Histograms
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
 * Histograms Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Histograms implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'Histograms';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'intervals' => '\Aylien\NewsApi\Models\HistogramInterval[]',
        'interval_start' => 'int',
        'interval_end' => 'int',
        'interval_width' => 'int',
        'field' => 'string'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'intervals' => 'intervals',
        'interval_start' => 'interval.start',
        'interval_end' => 'interval.end',
        'interval_width' => 'interval.width',
        'field' => 'field'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'intervals' => 'setIntervals',
        'interval_start' => 'setIntervalStart',
        'interval_end' => 'setIntervalEnd',
        'interval_width' => 'setIntervalWidth',
        'field' => 'setField'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'intervals' => 'getIntervals',
        'interval_start' => 'getIntervalStart',
        'interval_end' => 'getIntervalEnd',
        'interval_width' => 'getIntervalWidth',
        'field' => 'getField'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $intervals The intervals of the histograms
      * @var \Aylien\NewsApi\Models\HistogramInterval[]
      */
    protected $intervals;
    /**
      * $interval_start The start interval of the histogram
      * @var int
      */
    protected $interval_start;
    /**
      * $interval_end The end interval of the histogram
      * @var int
      */
    protected $interval_end;
    /**
      * $interval_width The width of the histogram
      * @var int
      */
    protected $interval_width;
    /**
      * $field 
      * @var string
      */
    protected $field;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->intervals = $data["intervals"];
            $this->interval_start = $data["interval_start"];
            $this->interval_end = $data["interval_end"];
            $this->interval_width = $data["interval_width"];
            $this->field = $data["field"];
        }
    }
    /**
     * Gets intervals
     * @return \Aylien\NewsApi\Models\HistogramInterval[]
     */
    public function getIntervals()
    {
        return $this->intervals;
    }
  
    /**
     * Sets intervals
     * @param \Aylien\NewsApi\Models\HistogramInterval[] $intervals The intervals of the histograms
     * @return $this
     */
    public function setIntervals($intervals)
    {
        
        $this->intervals = $intervals;
        return $this;
    }
    /**
     * Gets interval_start
     * @return int
     */
    public function getIntervalStart()
    {
        return $this->interval_start;
    }
  
    /**
     * Sets interval_start
     * @param int $interval_start The start interval of the histogram
     * @return $this
     */
    public function setIntervalStart($interval_start)
    {
        
        $this->interval_start = $interval_start;
        return $this;
    }
    /**
     * Gets interval_end
     * @return int
     */
    public function getIntervalEnd()
    {
        return $this->interval_end;
    }
  
    /**
     * Sets interval_end
     * @param int $interval_end The end interval of the histogram
     * @return $this
     */
    public function setIntervalEnd($interval_end)
    {
        
        $this->interval_end = $interval_end;
        return $this;
    }
    /**
     * Gets interval_width
     * @return int
     */
    public function getIntervalWidth()
    {
        return $this->interval_width;
    }
  
    /**
     * Sets interval_width
     * @param int $interval_width The width of the histogram
     * @return $this
     */
    public function setIntervalWidth($interval_width)
    {
        
        $this->interval_width = $interval_width;
        return $this;
    }
    /**
     * Gets field
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }
  
    /**
     * Sets field
     * @param string $field 
     * @return $this
     */
    public function setField($field)
    {
        
        $this->field = $field;
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
