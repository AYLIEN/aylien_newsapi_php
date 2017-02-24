<?php
/**
 * Category
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
 * Category Class Doc Comment
 *
 * @category    Class
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://newsapi.aylien.com/
 */
class Category implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = [
        'id' => 'string',
        'taxonomy' => 'string',
        'level' => 'int',
        'score' => 'double',
        'confident' => 'bool',
        'links' => '\Aylien\NewsApi\Models\CategoryLinks'
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
        'id' => 'id',
        'taxonomy' => 'taxonomy',
        'level' => 'level',
        'score' => 'score',
        'confident' => 'confident',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'taxonomy' => 'setTaxonomy',
        'level' => 'setLevel',
        'score' => 'setScore',
        'confident' => 'setConfident',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'taxonomy' => 'getTaxonomy',
        'level' => 'getLevel',
        'score' => 'getScore',
        'confident' => 'getConfident',
        'links' => 'getLinks'
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

    const TAXONOMY_IAB_QAG = 'iab-qag';
    const TAXONOMY_IPTC_SUBJECTCODE = 'iptc-subjectcode';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTaxonomyAllowableValues()
    {
        return [
            self::TAXONOMY_IAB_QAG,
            self::TAXONOMY_IPTC_SUBJECTCODE,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['taxonomy'] = isset($data['taxonomy']) ? $data['taxonomy'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['confident'] = isset($data['confident']) ? $data['confident'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["iab-qag", "iptc-subjectcode"];
        if (!in_array($this->container['taxonomy'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'taxonomy', must be one of 'iab-qag', 'iptc-subjectcode'.";
        }

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

        $allowed_values = ["iab-qag", "iptc-subjectcode"];
        if (!in_array($this->container['taxonomy'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id The ID of the category
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets taxonomy
     * @return string
     */
    public function getTaxonomy()
    {
        return $this->container['taxonomy'];
    }

    /**
     * Sets taxonomy
     * @param string $taxonomy The taxonomy of the category
     * @return $this
     */
    public function setTaxonomy($taxonomy)
    {
        $allowed_values = array('iab-qag', 'iptc-subjectcode');
        if (!is_null($taxonomy) && (!in_array($taxonomy, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'taxonomy', must be one of 'iab-qag', 'iptc-subjectcode'");
        }
        $this->container['taxonomy'] = $taxonomy;

        return $this;
    }

    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     * @param int $level The level of the category
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

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
     * @param double $score The score of the category
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets confident
     * @return bool
     */
    public function getConfident()
    {
        return $this->container['confident'];
    }

    /**
     * Sets confident
     * @param bool $confident It defines whether the extracted category is confident or not
     * @return $this
     */
    public function setConfident($confident)
    {
        $this->container['confident'] = $confident;

        return $this;
    }

    /**
     * Gets links
     * @return \Aylien\NewsApi\Models\CategoryLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Aylien\NewsApi\Models\CategoryLinks $links Related links for the category
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


