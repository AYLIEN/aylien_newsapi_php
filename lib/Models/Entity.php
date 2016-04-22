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
 * @category    Class
 * @description 
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
    static $apiModelName = 'Entity';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'text' => 'string',
        'score' => 'double',
        'types' => 'string[]',
        'links' => '\Aylien\NewsApi\Models\EntityLinks',
        'indices' => 'int[][]'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'text' => 'text',
        'score' => 'score',
        'types' => 'types',
        'links' => 'links',
        'indices' => 'indices'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'text' => 'setText',
        'score' => 'setScore',
        'types' => 'setTypes',
        'links' => 'setLinks',
        'indices' => 'setIndices'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'text' => 'getText',
        'score' => 'getScore',
        'types' => 'getTypes',
        'links' => 'getLinks',
        'indices' => 'getIndices'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $text The entity text
      * @var string
      */
    protected $text;
    /**
      * $score The entity score
      * @var double
      */
    protected $score;
    /**
      * $types An array of the dbpedia types
      * @var string[]
      */
    protected $types;
    /**
      * $links Related links to the entity
      * @var \Aylien\NewsApi\Models\EntityLinks
      */
    protected $links;
    /**
      * $indices The indices of the entity text
      * @var int[][]
      */
    protected $indices;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->text = $data["text"];
            $this->score = $data["score"];
            $this->types = $data["types"];
            $this->links = $data["links"];
            $this->indices = $data["indices"];
        }
    }
    /**
     * Gets text
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
  
    /**
     * Sets text
     * @param string $text The entity text
     * @return $this
     */
    public function setText($text)
    {
        
        $this->text = $text;
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
     * @param double $score The entity score
     * @return $this
     */
    public function setScore($score)
    {
        
        $this->score = $score;
        return $this;
    }
    /**
     * Gets types
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }
  
    /**
     * Sets types
     * @param string[] $types An array of the dbpedia types
     * @return $this
     */
    public function setTypes($types)
    {
        
        $this->types = $types;
        return $this;
    }
    /**
     * Gets links
     * @return \Aylien\NewsApi\Models\EntityLinks
     */
    public function getLinks()
    {
        return $this->links;
    }
  
    /**
     * Sets links
     * @param \Aylien\NewsApi\Models\EntityLinks $links Related links to the entity
     * @return $this
     */
    public function setLinks($links)
    {
        
        $this->links = $links;
        return $this;
    }
    /**
     * Gets indices
     * @return int[][]
     */
    public function getIndices()
    {
        return $this->indices;
    }
  
    /**
     * Sets indices
     * @param int[][] $indices The indices of the entity text
     * @return $this
     */
    public function setIndices($indices)
    {
        
        $this->indices = $indices;
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
