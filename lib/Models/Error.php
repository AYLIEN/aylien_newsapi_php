<?php
/**
 * Error
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
 * Error Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Error implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'Error';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'id' => 'string',
        'links' => '\Aylien\NewsApi\Models\ErrorLinks',
        'status' => 'string',
        'code' => 'string',
        'title' => 'string',
        'detail' => 'string'
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
        'links' => 'links',
        'status' => 'status',
        'code' => 'code',
        'title' => 'title',
        'detail' => 'detail'
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
        'links' => 'setLinks',
        'status' => 'setStatus',
        'code' => 'setCode',
        'title' => 'setTitle',
        'detail' => 'setDetail'
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
        'links' => 'getLinks',
        'status' => 'getStatus',
        'code' => 'getCode',
        'title' => 'getTitle',
        'detail' => 'getDetail'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id 
      * @var string
      */
    protected $id;
    /**
      * $links 
      * @var \Aylien\NewsApi\Models\ErrorLinks
      */
    protected $links;
    /**
      * $status 
      * @var string
      */
    protected $status;
    /**
      * $code 
      * @var string
      */
    protected $code;
    /**
      * $title 
      * @var string
      */
    protected $title;
    /**
      * $detail 
      * @var string
      */
    protected $detail;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->links = $data["links"];
            $this->status = $data["status"];
            $this->code = $data["code"];
            $this->title = $data["title"];
            $this->detail = $data["detail"];
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
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    /**
     * Gets links
     * @return \Aylien\NewsApi\Models\ErrorLinks
     */
    public function getLinks()
    {
        return $this->links;
    }
  
    /**
     * Sets links
     * @param \Aylien\NewsApi\Models\ErrorLinks $links 
     * @return $this
     */
    public function setLinks($links)
    {
        
        $this->links = $links;
        return $this;
    }
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status 
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
  
    /**
     * Sets code
     * @param string $code 
     * @return $this
     */
    public function setCode($code)
    {
        
        $this->code = $code;
        return $this;
    }
    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
  
    /**
     * Sets title
     * @param string $title 
     * @return $this
     */
    public function setTitle($title)
    {
        
        $this->title = $title;
        return $this;
    }
    /**
     * Gets detail
     * @return string
     */
    public function getDetail()
    {
        return $this->detail;
    }
  
    /**
     * Sets detail
     * @param string $detail 
     * @return $this
     */
    public function setDetail($detail)
    {
        
        $this->detail = $detail;
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