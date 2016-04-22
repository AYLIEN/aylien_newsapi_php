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
 * Category Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Category implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'Category';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'id' => 'string',
        'taxonomy' => 'string',
        'level' => 'int',
        'score' => 'double',
        'confident' => 'bool',
        'links' => '\Aylien\NewsApi\Models\CategoryLinks'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'taxonomy' => 'taxonomy',
        'level' => 'level',
        'score' => 'score',
        'confident' => 'confident',
        'links' => 'links'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'taxonomy' => 'setTaxonomy',
        'level' => 'setLevel',
        'score' => 'setScore',
        'confident' => 'setConfident',
        'links' => 'setLinks'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'taxonomy' => 'getTaxonomy',
        'level' => 'getLevel',
        'score' => 'getScore',
        'confident' => 'getConfident',
        'links' => 'getLinks'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id The ID of the category
      * @var string
      */
    protected $id;
    /**
      * $taxonomy The taxonomy of the category
      * @var string
      */
    protected $taxonomy;
    /**
      * $level The level of the category
      * @var int
      */
    protected $level;
    /**
      * $score The score of the category
      * @var double
      */
    protected $score;
    /**
      * $confident It defines whether the extracted category is confident or not
      * @var bool
      */
    protected $confident;
    /**
      * $links Related links for the category
      * @var \Aylien\NewsApi\Models\CategoryLinks
      */
    protected $links;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->taxonomy = $data["taxonomy"];
            $this->level = $data["level"];
            $this->score = $data["score"];
            $this->confident = $data["confident"];
            $this->links = $data["links"];
        }
    }
    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param string $id The ID of the category
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    /**
     * Gets taxonomy
     * @return string
     */
    public function getTaxonomy()
    {
        return $this->taxonomy;
    }
  
    /**
     * Sets taxonomy
     * @param string $taxonomy The taxonomy of the category
     * @return $this
     */
    public function setTaxonomy($taxonomy)
    {
        $allowed_values = array("iab-qag", "iptc-subjectcode");
        if (!in_array($taxonomy, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'taxonomy', must be one of 'iab-qag', 'iptc-subjectcode'");
        }
        $this->taxonomy = $taxonomy;
        return $this;
    }
    /**
     * Gets level
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }
  
    /**
     * Sets level
     * @param int $level The level of the category
     * @return $this
     */
    public function setLevel($level)
    {
        
        $this->level = $level;
        return $this;
    }
    /**
     * Gets score
     * @return double
     */
    public function getScore()
    {
        return $this->score;
    }
  
    /**
     * Sets score
     * @param double $score The score of the category
     * @return $this
     */
    public function setScore($score)
    {
        
        $this->score = $score;
        return $this;
    }
    /**
     * Gets confident
     * @return bool
     */
    public function getConfident()
    {
        return $this->confident;
    }
  
    /**
     * Sets confident
     * @param bool $confident It defines whether the extracted category is confident or not
     * @return $this
     */
    public function setConfident($confident)
    {
        
        $this->confident = $confident;
        return $this;
    }
    /**
     * Gets links
     * @return \Aylien\NewsApi\Models\CategoryLinks
     */
    public function getLinks()
    {
        return $this->links;
    }
  
    /**
     * Sets links
     * @param \Aylien\NewsApi\Models\CategoryLinks $links Related links for the category
     * @return $this
     */
    public function setLinks($links)
    {
        
        $this->links = $links;
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
