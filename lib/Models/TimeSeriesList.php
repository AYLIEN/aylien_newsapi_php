<?php
/**
 * TimeSeriesList
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
 * TimeSeriesList Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class TimeSeriesList implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'TimeSeriesList';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'time_series' => '\Aylien\NewsApi\Models\TimeSeries[]',
        'period' => 'string',
        'published_at_start' => '\DateTime',
        'published_at_end' => '\DateTime'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'time_series' => 'time_series',
        'period' => 'period',
        'published_at_start' => 'published_at.start',
        'published_at_end' => 'published_at.end'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'time_series' => 'setTimeSeries',
        'period' => 'setPeriod',
        'published_at_start' => 'setPublishedAtStart',
        'published_at_end' => 'setPublishedAtEnd'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'time_series' => 'getTimeSeries',
        'period' => 'getPeriod',
        'published_at_start' => 'getPublishedAtStart',
        'published_at_end' => 'getPublishedAtEnd'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $time_series An array of time series
      * @var \Aylien\NewsApi\Models\TimeSeries[]
      */
    protected $time_series;
    /**
      * $period The size of each date range expressed as an interval to be added to the lower bound.
      * @var string
      */
    protected $period;
    /**
      * $published_at_start The start published date of the time series
      * @var \DateTime
      */
    protected $published_at_start;
    /**
      * $published_at_end The end published date of the time series
      * @var \DateTime
      */
    protected $published_at_end;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->time_series = $data["time_series"];
            $this->period = $data["period"];
            $this->published_at_start = $data["published_at_start"];
            $this->published_at_end = $data["published_at_end"];
        }
    }
    /**
     * Gets time_series
     * @return \Aylien\NewsApi\Models\TimeSeries[]
     */
    public function getTimeSeries()
    {
        return $this->time_series;
    }
  
    /**
     * Sets time_series
     * @param \Aylien\NewsApi\Models\TimeSeries[] $time_series An array of time series
     * @return $this
     */
    public function setTimeSeries($time_series)
    {
        
        $this->time_series = $time_series;
        return $this;
    }
    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->period;
    }
  
    /**
     * Sets period
     * @param string $period The size of each date range expressed as an interval to be added to the lower bound.
     * @return $this
     */
    public function setPeriod($period)
    {
        
        $this->period = $period;
        return $this;
    }
    /**
     * Gets published_at_start
     * @return \DateTime
     */
    public function getPublishedAtStart()
    {
        return $this->published_at_start;
    }
  
    /**
     * Sets published_at_start
     * @param \DateTime $published_at_start The start published date of the time series
     * @return $this
     */
    public function setPublishedAtStart($published_at_start)
    {
        
        $this->published_at_start = $published_at_start;
        return $this;
    }
    /**
     * Gets published_at_end
     * @return \DateTime
     */
    public function getPublishedAtEnd()
    {
        return $this->published_at_end;
    }
  
    /**
     * Sets published_at_end
     * @param \DateTime $published_at_end The end published date of the time series
     * @return $this
     */
    public function setPublishedAtEnd($published_at_end)
    {
        
        $this->published_at_end = $published_at_end;
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