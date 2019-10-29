<?php
/**
 * Cluster
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
 * OpenAPI Generator version: 4.1.3-SNAPSHOT
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
 * Cluster Class Doc Comment
 *
 * @category Class
 * @package  Aylien\NewsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Cluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cluster';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earliestStory' => '\DateTime',
        'id' => 'int',
        'latestStory' => '\DateTime',
        'location' => '\Aylien\NewsApi\Models\Location',
        'representativeStory' => '\Aylien\NewsApi\Models\RepresentativeStory',
        'storyCount' => 'int',
        'time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earliestStory' => 'date-time',
        'id' => 'int64',
        'latestStory' => 'date-time',
        'location' => null,
        'representativeStory' => null,
        'storyCount' => 'int32',
        'time' => 'date-time'
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
        'earliestStory' => 'earliest_story',
        'id' => 'id',
        'latestStory' => 'latest_story',
        'location' => 'location',
        'representativeStory' => 'representative_story',
        'storyCount' => 'story_count',
        'time' => 'time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earliestStory' => 'setEarliestStory',
        'id' => 'setId',
        'latestStory' => 'setLatestStory',
        'location' => 'setLocation',
        'representativeStory' => 'setRepresentativeStory',
        'storyCount' => 'setStoryCount',
        'time' => 'setTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earliestStory' => 'getEarliestStory',
        'id' => 'getId',
        'latestStory' => 'getLatestStory',
        'location' => 'getLocation',
        'representativeStory' => 'getRepresentativeStory',
        'storyCount' => 'getStoryCount',
        'time' => 'getTime'
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
        $this->container['earliestStory'] = isset($data['earliestStory']) ? $data['earliestStory'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['latestStory'] = isset($data['latestStory']) ? $data['latestStory'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['representativeStory'] = isset($data['representativeStory']) ? $data['representativeStory'] : null;
        $this->container['storyCount'] = isset($data['storyCount']) ? $data['storyCount'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
     * Gets earliestStory
     *
     * @return \DateTime|null
     */
    public function getEarliestStory()
    {
        return $this->container['earliestStory'];
    }

    /**
     * Sets earliestStory
     *
     * @param \DateTime|null $earliestStory Publication date of the earliest story in cluster
     *
     * @return $this
     */
    public function setEarliestStory($earliestStory)
    {
        $this->container['earliestStory'] = $earliestStory;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id ID of the cluster which is a unique identification
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets latestStory
     *
     * @return \DateTime|null
     */
    public function getLatestStory()
    {
        return $this->container['latestStory'];
    }

    /**
     * Sets latestStory
     *
     * @param \DateTime|null $latestStory Publication date of the latest story in cluster
     *
     * @return $this
     */
    public function setLatestStory($latestStory)
    {
        $this->container['latestStory'] = $latestStory;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Aylien\NewsApi\Models\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Aylien\NewsApi\Models\Location|null $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets representativeStory
     *
     * @return \Aylien\NewsApi\Models\RepresentativeStory|null
     */
    public function getRepresentativeStory()
    {
        return $this->container['representativeStory'];
    }

    /**
     * Sets representativeStory
     *
     * @param \Aylien\NewsApi\Models\RepresentativeStory|null $representativeStory representativeStory
     *
     * @return $this
     */
    public function setRepresentativeStory($representativeStory)
    {
        $this->container['representativeStory'] = $representativeStory;

        return $this;
    }

    /**
     * Gets storyCount
     *
     * @return int|null
     */
    public function getStoryCount()
    {
        return $this->container['storyCount'];
    }

    /**
     * Sets storyCount
     *
     * @param int|null $storyCount Number of stories associated with the cluster
     *
     * @return $this
     */
    public function setStoryCount($storyCount)
    {
        $this->container['storyCount'] = $storyCount;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime|null $time Time of the event
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

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
}


