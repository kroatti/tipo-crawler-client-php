<?php
/**
 * DownloadViewModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Tipo API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * DownloadViewModel Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DownloadViewModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DownloadViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'application_number' => 'string',
        'item_type' => 'string',
        'case_type' => 'string',
        'case_number' => 'string',
        'application_number_enc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'application_number' => null,
        'item_type' => null,
        'case_type' => null,
        'case_number' => null,
        'application_number_enc' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'application_number' => 'applicationNumber',
        'item_type' => 'itemType',
        'case_type' => 'caseType',
        'case_number' => 'caseNumber',
        'application_number_enc' => 'applicationNumberEnc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_number' => 'setApplicationNumber',
        'item_type' => 'setItemType',
        'case_type' => 'setCaseType',
        'case_number' => 'setCaseNumber',
        'application_number_enc' => 'setApplicationNumberEnc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_number' => 'getApplicationNumber',
        'item_type' => 'getItemType',
        'case_type' => 'getCaseType',
        'case_number' => 'getCaseNumber',
        'application_number_enc' => 'getApplicationNumberEnc'
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
        return self::$swaggerModelName;
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
        $this->container['application_number'] = isset($data['application_number']) ? $data['application_number'] : null;
        $this->container['item_type'] = isset($data['item_type']) ? $data['item_type'] : null;
        $this->container['case_type'] = isset($data['case_type']) ? $data['case_type'] : null;
        $this->container['case_number'] = isset($data['case_number']) ? $data['case_number'] : null;
        $this->container['application_number_enc'] = isset($data['application_number_enc']) ? $data['application_number_enc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['application_number'] === null) {
            $invalidProperties[] = "'application_number' can't be null";
        }
        if (!preg_match("/\\d*/", $this->container['application_number'])) {
            $invalidProperties[] = "invalid value for 'application_number', must be conform to the pattern /\\d*/.";
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

        if ($this->container['application_number'] === null) {
            return false;
        }
        if (!preg_match("/\\d*/", $this->container['application_number'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets application_number
     *
     * @return string
     */
    public function getApplicationNumber()
    {
        return $this->container['application_number'];
    }

    /**
     * Sets application_number
     *
     * @param string $application_number application_number
     *
     * @return $this
     */
    public function setApplicationNumber($application_number)
    {

        if ((!preg_match("/\\d*/", $application_number))) {
            throw new \InvalidArgumentException("invalid value for $application_number when calling DownloadViewModel., must conform to the pattern /\\d*/.");
        }

        $this->container['application_number'] = $application_number;

        return $this;
    }

    /**
     * Gets item_type
     *
     * @return string
     */
    public function getItemType()
    {
        return $this->container['item_type'];
    }

    /**
     * Sets item_type
     *
     * @param string $item_type item_type
     *
     * @return $this
     */
    public function setItemType($item_type)
    {
        $this->container['item_type'] = $item_type;

        return $this;
    }

    /**
     * Gets case_type
     *
     * @return string
     */
    public function getCaseType()
    {
        return $this->container['case_type'];
    }

    /**
     * Sets case_type
     *
     * @param string $case_type case_type
     *
     * @return $this
     */
    public function setCaseType($case_type)
    {
        $this->container['case_type'] = $case_type;

        return $this;
    }

    /**
     * Gets case_number
     *
     * @return string
     */
    public function getCaseNumber()
    {
        return $this->container['case_number'];
    }

    /**
     * Sets case_number
     *
     * @param string $case_number case_number
     *
     * @return $this
     */
    public function setCaseNumber($case_number)
    {
        $this->container['case_number'] = $case_number;

        return $this;
    }

    /**
     * Gets application_number_enc
     *
     * @return string
     */
    public function getApplicationNumberEnc()
    {
        return $this->container['application_number_enc'];
    }

    /**
     * Sets application_number_enc
     *
     * @param string $application_number_enc application_number_enc
     *
     * @return $this
     */
    public function setApplicationNumberEnc($application_number_enc)
    {
        $this->container['application_number_enc'] = $application_number_enc;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

