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
 * Source Class Doc Comment
 *
 * @category    Class
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://newsapi.aylien.com/
 */
class Source implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Source';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = [
        'id' => 'int',
        'name' => 'string',
        'title' => 'string',
        'description' => 'string',
        'links_in_count' => 'int',
        'home_page_url' => 'string',
        'domain' => 'string',
        'logo_url' => 'string',
        'locations' => '\Aylien\NewsApi\Models\Location[]',
        'scopes' => '\Aylien\NewsApi\Models\Scope[]',
        'rankings' => '\Aylien\NewsApi\Models\Rankings'
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
        'name' => 'name',
        'title' => 'title',
        'description' => 'description',
        'links_in_count' => 'links_in_count',
        'home_page_url' => 'home_page_url',
        'domain' => 'domain',
        'logo_url' => 'logo_url',
        'locations' => 'locations',
        'scopes' => 'scopes',
        'rankings' => 'rankings'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'links_in_count' => 'setLinksInCount',
        'home_page_url' => 'setHomePageUrl',
        'domain' => 'setDomain',
        'logo_url' => 'setLogoUrl',
        'locations' => 'setLocations',
        'scopes' => 'setScopes',
        'rankings' => 'setRankings'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'links_in_count' => 'getLinksInCount',
        'home_page_url' => 'getHomePageUrl',
        'domain' => 'getDomain',
        'logo_url' => 'getLogoUrl',
        'locations' => 'getLocations',
        'scopes' => 'getScopes',
        'rankings' => 'getRankings'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['links_in_count'] = isset($data['links_in_count']) ? $data['links_in_count'] : null;
        $this->container['home_page_url'] = isset($data['home_page_url']) ? $data['home_page_url'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['logo_url'] = isset($data['logo_url']) ? $data['logo_url'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['scopes'] = isset($data['scopes']) ? $data['scopes'] : null;
        $this->container['rankings'] = isset($data['rankings']) ? $data['rankings'] : null;
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
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The source id which is a unique value
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The source name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title of the home page URL
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description A general explanation about the source
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets links_in_count
     * @return int
     */
    public function getLinksInCount()
    {
        return $this->container['links_in_count'];
    }

    /**
     * Sets links_in_count
     * @param int $links_in_count The number of websites that link to the source
     * @return $this
     */
    public function setLinksInCount($links_in_count)
    {
        $this->container['links_in_count'] = $links_in_count;

        return $this;
    }

    /**
     * Gets home_page_url
     * @return string
     */
    public function getHomePageUrl()
    {
        return $this->container['home_page_url'];
    }

    /**
     * Sets home_page_url
     * @param string $home_page_url The home page URL of the source
     * @return $this
     */
    public function setHomePageUrl($home_page_url)
    {
        $this->container['home_page_url'] = $home_page_url;

        return $this;
    }

    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     * @param string $domain The domain name of the source which is extracted from the source URL
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets logo_url
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     * @param string $logo_url A URL which points to the source logo
     * @return $this
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets locations
     * @return \Aylien\NewsApi\Models\Location[]
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     * @param \Aylien\NewsApi\Models\Location[] $locations The source locations which are tend to be the physical locations of the source, e.g. BBC headquarter is located in London.
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets scopes
     * @return \Aylien\NewsApi\Models\Scope[]
     */
    public function getScopes()
    {
        return $this->container['scopes'];
    }

    /**
     * Sets scopes
     * @param \Aylien\NewsApi\Models\Scope[] $scopes The source scopes which is tend to be scope locations of the source, e.g. BBC scopes is international.
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->container['scopes'] = $scopes;

        return $this;
    }

    /**
     * Gets rankings
     * @return \Aylien\NewsApi\Models\Rankings
     */
    public function getRankings()
    {
        return $this->container['rankings'];
    }

    /**
     * Sets rankings
     * @param \Aylien\NewsApi\Models\Rankings $rankings The web rankings of the source
     * @return $this
     */
    public function setRankings($rankings)
    {
        $this->container['rankings'] = $rankings;

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


