<?php
/**
 * Clusters
 *
 * PHP version 5
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * AYLIEN News API
 *
 * The AYLIEN News API is the most powerful way of sourcing, searching and syndicating analyzed and enriched news content. It is accessed by sending HTTP requests to our server, which returns information to your client.
 *
 * The version of the OpenAPI document: 3.0
 * Contact: support@aylien.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aylien\NewsApi\Models;

use \ArrayAccess;
use \Aylien\NewsApi\ObjectSerializer;

/**
 * Clusters Class Doc Comment
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Clusters implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Clusters';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cluster_count' => 'int',
        'clusters' => '\Aylien\NewsApi\Models\Cluster[]',
        'next_page_cursor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'cluster_count' => 'int64',
        'clusters' => null,
        'next_page_cursor' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cluster_count' => 'cluster_count',
        'clusters' => 'clusters',
        'next_page_cursor' => 'next_page_cursor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cluster_count' => 'setClusterCount',
        'clusters' => 'setClusters',
        'next_page_cursor' => 'setNextPageCursor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cluster_count' => 'getClusterCount',
        'clusters' => 'getClusters',
        'next_page_cursor' => 'getNextPageCursor'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['cluster_count'] = isset($data['cluster_count']) ? $data['cluster_count'] : null;
        $this->container['clusters'] = isset($data['clusters']) ? $data['clusters'] : null;
        $this->container['next_page_cursor'] = isset($data['next_page_cursor']) ? $data['next_page_cursor'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets cluster_count
     *
     * @return int|null
     */
    public function getClusterCount()
    {
        return $this->container['cluster_count'];
    }

    /**
     * Sets cluster_count
     *
     * @param int|null $cluster_count The total number of clusters
     *
     * @return $this
     */
    public function setClusterCount($cluster_count)
    {
        $this->container['cluster_count'] = $cluster_count;

        return $this;
    }

    /**
     * Gets clusters
     *
     * @return \Aylien\NewsApi\Models\Cluster[]|null
     */
    public function getClusters()
    {
        return $this->container['clusters'];
    }

    /**
     * Sets clusters
     *
     * @param \Aylien\NewsApi\Models\Cluster[]|null $clusters An array of clusters
     *
     * @return $this
     */
    public function setClusters($clusters)
    {
        $this->container['clusters'] = $clusters;

        return $this;
    }

    /**
     * Gets next_page_cursor
     *
     * @return string|null
     */
    public function getNextPageCursor()
    {
        return $this->container['next_page_cursor'];
    }

    /**
     * Sets next_page_cursor
     *
     * @param string|null $next_page_cursor The next page cursor
     *
     * @return $this
     */
    public function setNextPageCursor($next_page_cursor)
    {
        $this->container['next_page_cursor'] = $next_page_cursor;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


