<?php
/**
 * StoryCluster
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
 * StoryCluster Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class StoryCluster implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'StoryCluster';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'id' => 'int',
        'phrases' => 'string[]',
        'size' => 'int',
        'stories' => 'int[]',
        'score' => 'double'
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
        'phrases' => 'phrases',
        'size' => 'size',
        'stories' => 'stories',
        'score' => 'score'
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
        'phrases' => 'setPhrases',
        'size' => 'setSize',
        'stories' => 'setStories',
        'score' => 'setScore'
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
        'phrases' => 'getPhrases',
        'size' => 'getSize',
        'stories' => 'getStories',
        'score' => 'getScore'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id A unique identification for the cluster
      * @var int
      */
    protected $id;
    /**
      * $phrases Suggested labels for the cluster
      * @var string[]
      */
    protected $phrases;
    /**
      * $size Size of the cluster
      * @var int
      */
    protected $size;
    /**
      * $stories Story ids which are in the cluster
      * @var int[]
      */
    protected $stories;
    /**
      * $score The cluster score
      * @var double
      */
    protected $score;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->phrases = $data["phrases"];
            $this->size = $data["size"];
            $this->stories = $data["stories"];
            $this->score = $data["score"];
        }
    }
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id A unique identification for the cluster
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    /**
     * Gets phrases
     * @return string[]
     */
    public function getPhrases()
    {
        return $this->phrases;
    }
  
    /**
     * Sets phrases
     * @param string[] $phrases Suggested labels for the cluster
     * @return $this
     */
    public function setPhrases($phrases)
    {
        
        $this->phrases = $phrases;
        return $this;
    }
    /**
     * Gets size
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param int $size Size of the cluster
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    /**
     * Gets stories
     * @return int[]
     */
    public function getStories()
    {
        return $this->stories;
    }
  
    /**
     * Sets stories
     * @param int[] $stories Story ids which are in the cluster
     * @return $this
     */
    public function setStories($stories)
    {
        
        $this->stories = $stories;
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
     * @param double $score The cluster score
     * @return $this
     */
    public function setScore($score)
    {
        
        $this->score = $score;
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
