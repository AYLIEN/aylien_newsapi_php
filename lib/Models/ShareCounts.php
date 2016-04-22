<?php
/**
 * ShareCounts
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
 * ShareCounts Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class ShareCounts implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'ShareCounts';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'facebook' => '\Aylien\NewsApi\Models\ShareCount[]',
        'google_plus' => '\Aylien\NewsApi\Models\ShareCount[]',
        'linkedin' => '\Aylien\NewsApi\Models\ShareCount[]',
        'reddit' => '\Aylien\NewsApi\Models\ShareCount[]'
    );
  
    static function apiTypes() {
        return self::$apiTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'facebook' => 'facebook',
        'google_plus' => 'google_plus',
        'linkedin' => 'linkedin',
        'reddit' => 'reddit'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'facebook' => 'setFacebook',
        'google_plus' => 'setGooglePlus',
        'linkedin' => 'setLinkedin',
        'reddit' => 'setReddit'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'facebook' => 'getFacebook',
        'google_plus' => 'getGooglePlus',
        'linkedin' => 'getLinkedin',
        'reddit' => 'getReddit'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $facebook Facebook shares count
      * @var \Aylien\NewsApi\Models\ShareCount[]
      */
    protected $facebook;
    /**
      * $google_plus Google Plus shares count
      * @var \Aylien\NewsApi\Models\ShareCount[]
      */
    protected $google_plus;
    /**
      * $linkedin LinkedIn shares count
      * @var \Aylien\NewsApi\Models\ShareCount[]
      */
    protected $linkedin;
    /**
      * $reddit Reddit shares count
      * @var \Aylien\NewsApi\Models\ShareCount[]
      */
    protected $reddit;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->facebook = $data["facebook"];
            $this->google_plus = $data["google_plus"];
            $this->linkedin = $data["linkedin"];
            $this->reddit = $data["reddit"];
        }
    }
    /**
     * Gets facebook
     * @return \Aylien\NewsApi\Models\ShareCount[]
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
  
    /**
     * Sets facebook
     * @param \Aylien\NewsApi\Models\ShareCount[] $facebook Facebook shares count
     * @return $this
     */
    public function setFacebook($facebook)
    {
        
        $this->facebook = $facebook;
        return $this;
    }
    /**
     * Gets google_plus
     * @return \Aylien\NewsApi\Models\ShareCount[]
     */
    public function getGooglePlus()
    {
        return $this->google_plus;
    }
  
    /**
     * Sets google_plus
     * @param \Aylien\NewsApi\Models\ShareCount[] $google_plus Google Plus shares count
     * @return $this
     */
    public function setGooglePlus($google_plus)
    {
        
        $this->google_plus = $google_plus;
        return $this;
    }
    /**
     * Gets linkedin
     * @return \Aylien\NewsApi\Models\ShareCount[]
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }
  
    /**
     * Sets linkedin
     * @param \Aylien\NewsApi\Models\ShareCount[] $linkedin LinkedIn shares count
     * @return $this
     */
    public function setLinkedin($linkedin)
    {
        
        $this->linkedin = $linkedin;
        return $this;
    }
    /**
     * Gets reddit
     * @return \Aylien\NewsApi\Models\ShareCount[]
     */
    public function getReddit()
    {
        return $this->reddit;
    }
  
    /**
     * Sets reddit
     * @param \Aylien\NewsApi\Models\ShareCount[] $reddit Reddit shares count
     * @return $this
     */
    public function setReddit($reddit)
    {
        
        $this->reddit = $reddit;
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
