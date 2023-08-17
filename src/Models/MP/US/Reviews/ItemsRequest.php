<?php

/**
 * ItemsRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Reviews Acceleration
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Reviews;

use Walmart\Models\BaseModel;

/**
 * ItemsRequest Class Doc Comment
 *
 * @category Class

 * @description Items

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemsRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemId' => 'string',
        'targetReviews' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemId' => null,
        'targetReviews' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemId' => false,
        'targetReviews' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemId' => 'itemId',
        'targetReviews' => 'targetReviews'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemId' => 'setItemId',
        'targetReviews' => 'setTargetReviews'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemId' => 'getItemId',
        'targetReviews' => 'getTargetReviews'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemId', $data ?? [], null);
        $this->setIfExists('targetReviews', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemId'] === null) {
            $invalidProperties[] = "'itemId' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets itemId
     *
     * @return string
    
     */
    public function getItemId()
    {
        return $this->container['itemId'];
    }

    /**
     * Sets itemId
     *
     * @param string $itemId Specifies the item identifier.
     *
     * @return self
    
     */
    public function setItemId($itemId)
    {
        if (is_null($itemId)) {
            throw new \InvalidArgumentException('non-nullable itemId cannot be null');
        }

        $this->container['itemId'] = $itemId;
        return $this;
    }

    /**
     * Gets targetReviews
     *
     * @return int|null
    
     */
    public function getTargetReviews()
    {
        return $this->container['targetReviews'];
    }

    /**
     * Sets targetReviews
     *
     * @param int|null $targetReviews Custom target number of reviews requested to be collected for the item. Default is 5.
     *
     * @return self
    
     */
    public function setTargetReviews($targetReviews)
    {
        if (is_null($targetReviews)) {
            throw new \InvalidArgumentException('non-nullable targetReviews cannot be null');
        }

        $this->container['targetReviews'] = $targetReviews;
        return $this;
    }
}