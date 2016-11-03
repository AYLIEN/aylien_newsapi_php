<?php
/**
 * Media
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
 * Media Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Aylien\NewsApi
 * @author      Hamed Ramezanian Nik
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://newsapi.aylien.com/
 */
class Media implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $apiModelName = 'Media';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $apiTypes = [
        'type' => 'string',
        'url' => 'string',
        'format' => 'string',
        'content_length' => 'int',
        'width' => 'int',
        'height' => 'int'
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
        'type' => 'type',
        'url' => 'url',
        'format' => 'format',
        'content_length' => 'content_length',
        'width' => 'width',
        'height' => 'height'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'url' => 'setUrl',
        'format' => 'setFormat',
        'content_length' => 'setContentLength',
        'width' => 'setWidth',
        'height' => 'setHeight'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'url' => 'getUrl',
        'format' => 'getFormat',
        'content_length' => 'getContentLength',
        'width' => 'getWidth',
        'height' => 'getHeight'
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

    const TYPE_IMAGE = 'image';
    const TYPE_VIDEO = 'video';
    const FORMAT_BMP = 'BMP';
    const FORMAT_GIF = 'GIF';
    const FORMAT_JPEG = 'JPEG';
    const FORMAT_PNG = 'PNG';
    const FORMAT_TIFF = 'TIFF';
    const FORMAT_PSD = 'PSD';
    const FORMAT_ICO = 'ICO';
    const FORMAT_CUR = 'CUR';
    const FORMAT_WEBP = 'WEBP';
    const FORMAT_SVG = 'SVG';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IMAGE,
            self::TYPE_VIDEO,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFormatAllowableValues()
    {
        return [
            self::FORMAT_BMP,
            self::FORMAT_GIF,
            self::FORMAT_JPEG,
            self::FORMAT_PNG,
            self::FORMAT_TIFF,
            self::FORMAT_PSD,
            self::FORMAT_ICO,
            self::FORMAT_CUR,
            self::FORMAT_WEBP,
            self::FORMAT_SVG,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['content_length'] = isset($data['content_length']) ? $data['content_length'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        $allowed_values = ["image", "video"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        $allowed_values = ["BMP", "GIF", "JPEG", "PNG", "TIFF", "PSD", "ICO", "CUR", "WEBP", "SVG"];
        if (!in_array($this->container['format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'format', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = ["image", "video"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["BMP", "GIF", "JPEG", "PNG", "TIFF", "PSD", "ICO", "CUR", "WEBP", "SVG"];
        if (!in_array($this->container['format'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The type of media
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('image', 'video');
        if (!is_null($type) && (!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'image', 'video'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url A URL which points to the media file
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format The format of media
     * @return $this
     */
    public function setFormat($format)
    {
        $allowed_values = array('BMP', 'GIF', 'JPEG', 'PNG', 'TIFF', 'PSD', 'ICO', 'CUR', 'WEBP', 'SVG');
        if (!is_null($format) && (!in_array($format, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'format', must be one of 'BMP', 'GIF', 'JPEG', 'PNG', 'TIFF', 'PSD', 'ICO', 'CUR', 'WEBP', 'SVG'");
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets content_length
     * @return int
     */
    public function getContentLength()
    {
        return $this->container['content_length'];
    }

    /**
     * Sets content_length
     * @param int $content_length The content length of media
     * @return $this
     */
    public function setContentLength($content_length)
    {
        $this->container['content_length'] = $content_length;

        return $this;
    }

    /**
     * Gets width
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param int $width The width of media
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param int $height The height of media
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
