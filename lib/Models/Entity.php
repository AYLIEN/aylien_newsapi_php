<?php
/**
 * Entity
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
 * Entity Class Doc Comment
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Entity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Entity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'indices' => 'int[][]',
        'links' => '\Aylien\NewsApi\Models\EntityLinks',
        'score' => 'double',
        'text' => 'string',
        'types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'indices' => 'int32',
        'links' => null,
        'score' => 'double',
        'text' => null,
        'types' => null
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
        'indices' => 'indices',
        'links' => 'links',
        'score' => 'score',
        'text' => 'text',
        'types' => 'types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'indices' => 'setIndices',
        'links' => 'setLinks',
        'score' => 'setScore',
        'text' => 'setText',
        'types' => 'setTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'indices' => 'getIndices',
        'links' => 'getLinks',
        'score' => 'getScore',
        'text' => 'getText',
        'types' => 'getTypes'
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
        $this->container['indices'] = isset($data['indices']) ? $data['indices'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['score']) && ($this->container['score'] > 1)) {
            $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['score']) && ($this->container['score'] < 0)) {
            $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to 0.";
        }

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
     * Gets indices
     *
     * @return int[][]|null
     */
    public function getIndices()
    {
        return $this->container['indices'];
    }

    /**
     * Sets indices
     *
     * @param int[][]|null $indices The indices of the entity text
     *
     * @return $this
     */
    public function setIndices($indices)
    {
        $this->container['indices'] = $indices;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Aylien\NewsApi\Models\EntityLinks|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Aylien\NewsApi\Models\EntityLinks|null $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets score
     *
     * @return double|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param double|null $score The entity score
     *
     * @return $this
     */
    public function setScore($score)
    {

        if (!is_null($score) && ($score > 1)) {
            throw new \InvalidArgumentException('invalid value for $score when calling Entity., must be smaller than or equal to 1.');
        }
        if (!is_null($score) && ($score < 0)) {
            throw new \InvalidArgumentException('invalid value for $score when calling Entity., must be bigger than or equal to 0.');
        }

        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The entity text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets types
     *
     * @return string[]|null
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[]|null $types An array of the dbpedia types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

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


