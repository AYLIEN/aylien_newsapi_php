<?php
/**
 * Entity
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
 * Entity Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Entity implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = array(
        'text' => 'string',
        'score' => 'double',
        'types' => 'string[]',
        'links' => '\Aylien\NewsApi\Models\EntityLinks',
        'indices' => 'int[][]'
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
        'text' => 'text',
        'score' => 'score',
        'types' => 'types',
        'links' => 'links',
        'indices' => 'indices'
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
        'text' => 'setText',
        'score' => 'setScore',
        'types' => 'setTypes',
        'links' => 'setLinks',
        'indices' => 'setIndices'
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
        'text' => 'getText',
        'score' => 'getScore',
        'types' => 'getTypes',
        'links' => 'getLinks',
        'indices' => 'getIndices'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['score']) && ($this->container['score'] > 1.0)) {
            $invalid_properties[] = "invalid value for 'score', must be smaller than or equal to 1.0.";
        }

        if (!is_null($this->container['score']) && ($this->container['score'] < 0.0)) {
            $invalid_properties[] = "invalid value for 'score', must be bigger than or equal to 0.0.";
        }

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
        if ($this->container['score'] > 1.0) {
            return false;
        }
        if ($this->container['score'] < 0.0) {
            return false;
        }
        return true;
    }


    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     * @param string $text The entity text
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets score
     * @return double
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     * @param double $score The entity score
     * @return $this
     */
    public function setScore($score)
    {

        if ($score > 1.0) {
            throw new \InvalidArgumentException('invalid value for $score when calling Entity., must be smaller than or equal to 1.0.');
        }
        if ($score < 0.0) {
            throw new \InvalidArgumentException('invalid value for $score when calling Entity., must be bigger than or equal to 0.0.');
        }
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets types
     * @return string[]
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     * @param string[] $types An array of the dbpedia types
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets links
     * @return \Aylien\NewsApi\Models\EntityLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Aylien\NewsApi\Models\EntityLinks $links Related links to the entity
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets indices
     * @return int[][]
     */
    public function getIndices()
    {
        return $this->container['indices'];
    }

    /**
     * Sets indices
     * @param int[][] $indices The indices of the entity text
     * @return $this
     */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;

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
