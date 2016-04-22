<?php
/**
 * Source
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
 * Source Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/AYLIEN/aylien_newsapi_php
 */
class Source implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    static $apiModelName = 'Source';

    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $apiTypes = array(
        'id' => 'int',
        'name' => 'string',
        'domain' => 'string',
        'logo_url' => 'string',
        'locations' => '\Aylien\NewsApi\Models\Location[]',
        'scopes' => '\Aylien\NewsApi\Models\Scope[]'
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
        'name' => 'name',
        'domain' => 'domain',
        'logo_url' => 'logo_url',
        'locations' => 'locations',
        'scopes' => 'scopes'
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
        'name' => 'setName',
        'domain' => 'setDomain',
        'logo_url' => 'setLogoUrl',
        'locations' => 'setLocations',
        'scopes' => 'setScopes'
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
        'name' => 'getName',
        'domain' => 'getDomain',
        'logo_url' => 'getLogoUrl',
        'locations' => 'getLocations',
        'scopes' => 'getScopes'
    );
  
    static function getters() {
        return self::$getters;
    }

    /**
      * $id The source id which is a unique value
      * @var int
      */
    protected $id;
    /**
      * $name The source name
      * @var string
      */
    protected $name;
    /**
      * $domain Domain name of the source which is extracted from the source URL
      * @var string
      */
    protected $domain;
    /**
      * $logo_url A URL which points to the source logo
      * @var string
      */
    protected $logo_url;
    /**
      * $locations The source locations which are tend to be the physical locations of the source, e.g. BBC headquarter is located in London.
      * @var \Aylien\NewsApi\Models\Location[]
      */
    protected $locations;
    /**
      * $scopes The source scopes which is tend to be scope locations of the source, e.g. BBC scopes is international. 
      * @var \Aylien\NewsApi\Models\Scope[]
      */
    protected $scopes;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->name = $data["name"];
            $this->domain = $data["domain"];
            $this->logo_url = $data["logo_url"];
            $this->locations = $data["locations"];
            $this->scopes = $data["scopes"];
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
     * @param int $id The source id which is a unique value
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name The source name
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }
  
    /**
     * Sets domain
     * @param string $domain Domain name of the source which is extracted from the source URL
     * @return $this
     */
    public function setDomain($domain)
    {
        
        $this->domain = $domain;
        return $this;
    }
    /**
     * Gets logo_url
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logo_url;
    }
  
    /**
     * Sets logo_url
     * @param string $logo_url A URL which points to the source logo
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        
        $this->logo_url = $logo_url;
        return $this;
    }
    /**
     * Gets locations
     * @return \Aylien\NewsApi\Models\Location[]
     */
    public function getLocations()
    {
        return $this->locations;
    }
  
    /**
     * Sets locations
     * @param \Aylien\NewsApi\Models\Location[] $locations The source locations which are tend to be the physical locations of the source, e.g. BBC headquarter is located in London.
     * @return $this
     */
    public function setLocations($locations)
    {
        
        $this->locations = $locations;
        return $this;
    }
    /**
     * Gets scopes
     * @return \Aylien\NewsApi\Models\Scope[]
     */
    public function getScopes()
    {
        return $this->scopes;
    }
  
    /**
     * Sets scopes
     * @param \Aylien\NewsApi\Models\Scope[] $scopes The source scopes which is tend to be scope locations of the source, e.g. BBC scopes is international. 
     * @return $this
     */
    public function setScopes($scopes)
    {
        
        $this->scopes = $scopes;
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
