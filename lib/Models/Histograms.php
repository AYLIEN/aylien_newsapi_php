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
 * @link     https://newsapi.aylien.com/
 */

/**
 * AYLIEN News API
 *
 * AYLIEN News API is the most powerful way of sourcing, searching and syndicating analyzed and enriched news content.
 *
 *  Copyright 2017 Aylien, Inc.
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
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://newsapi.aylien.com/
 */
class Histograms implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Histograms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = [
        'intervals' => '\Aylien\NewsApi\Models\HistogramInterval[]',
        'interval_start' => 'int',
        'interval_end' => 'int',
        'interval_width' => 'int',
        'field' => 'string'
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
        'intervals' => 'intervals',
        'interval_start' => 'interval.start',
        'interval_end' => 'interval.end',
        'interval_width' => 'interval.width',
        'field' => 'field'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'intervals' => 'setIntervals',
        'interval_start' => 'setIntervalStart',
        'interval_end' => 'setIntervalEnd',
        'interval_width' => 'setIntervalWidth',
        'field' => 'setField'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'intervals' => 'getIntervals',
        'interval_start' => 'getIntervalStart',
        'interval_end' => 'getIntervalEnd',
        'interval_width' => 'getIntervalWidth',
        'field' => 'getField'
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
        $this->container['intervals'] = isset($data['intervals']) ? $data['intervals'] : null;
        $this->container['interval_start'] = isset($data['interval_start']) ? $data['interval_start'] : null;
        $this->container['interval_end'] = isset($data['interval_end']) ? $data['interval_end'] : null;
        $this->container['interval_width'] = isset($data['interval_width']) ? $data['interval_width'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
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
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets intervals
     * @return \Aylien\NewsApi\Models\HistogramInterval[]
     */
    public function getIntervals()
    {
        return $this->container['intervals'];
    }

    /**
     * Sets intervals
     * @param \Aylien\NewsApi\Models\HistogramInterval[] $intervals The intervals of the histograms
     * @return $this
     */
    public function setIntervals($intervals)
    {
        $this->container['intervals'] = $intervals;

        return $this;
    }

    /**
     * Gets interval_start
     * @return int
     */
    public function getIntervalStart()
    {
        return $this->container['interval_start'];
    }

    /**
     * Sets interval_start
     * @param int $interval_start The start interval of the histogram
     * @return $this
     */
    public function setIntervalStart($interval_start)
    {
        $this->container['interval_start'] = $interval_start;

        return $this;
    }

    /**
     * Gets interval_end
     * @return int
     */
    public function getIntervalEnd()
    {
        return $this->container['interval_end'];
    }

    /**
     * Sets interval_end
     * @param int $interval_end The end interval of the histogram
     * @return $this
     */
    public function setIntervalEnd($interval_end)
    {
        $this->container['interval_end'] = $interval_end;

        return $this;
    }

    /**
     * Gets interval_width
     * @return int
     */
    public function getIntervalWidth()
    {
        return $this->container['interval_width'];
    }

    /**
     * Sets interval_width
     * @param int $interval_width The width of the histogram
     * @return $this
     */
    public function setIntervalWidth($interval_width)
    {
        $this->container['interval_width'] = $interval_width;

        return $this;
    }

    /**
     * Gets field
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     * @param string $field
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

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


