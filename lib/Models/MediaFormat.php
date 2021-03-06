<?php
/**
 * MediaFormat
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
use \Aylien\NewsApi\ObjectSerializer;

/**
 * MediaFormat Class Doc Comment
 *
 * @category Class
 * @description The format of media
 * @package  Aylien\NewsApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MediaFormat
{
    /**
     * Possible values of this enum
     */
    const BMP = 'BMP';
    const GIF = 'GIF';
    const JPEG = 'JPEG';
    const PNG = 'PNG';
    const TIFF = 'TIFF';
    const PSD = 'PSD';
    const ICO = 'ICO';
    const CUR = 'CUR';
    const WEBP = 'WEBP';
    const SVG = 'SVG';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BMP,
            self::GIF,
            self::JPEG,
            self::PNG,
            self::TIFF,
            self::PSD,
            self::ICO,
            self::CUR,
            self::WEBP,
            self::SVG,
        ];
    }
}


