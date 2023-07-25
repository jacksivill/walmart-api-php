<?php

/**
 * ItemResponse
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
 * Item Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\Supplier\US\Items;

use Walmart\Models\BaseModel;

/**
 * ItemResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'gtin' => 'string',
        'sku' => 'string',
        'variantGroupId' => 'string',
        'productName' => 'string',
        'brand' => 'string',
        'mainImageUrl' => 'string',
        'shortDescription' => 'string',
        'productType' => 'string',
        'shelfName' => 'string',
        'publishedStatus' => 'string',
        'unpublishedReasons' => 'string[]',
        'itemPageURL' => 'string',
        'price' => '\Walmart\Models\Supplier\US\Items\Price',
        '_1pBuyBox' => 'string',
        'siteDates' => '\Walmart\Models\Supplier\US\Items\SiteDates',
        'customerRating' => 'float',
        'customerReviewCount' => 'int',
        'contentQualityScore' => 'float',
        'walmartOrderAttributes' => '\Walmart\Models\Supplier\US\Items\WalmartOrderAttributes',
        'itemConfigurations' => '\Walmart\Models\Supplier\US\Items\ItemConfigurations[]',
        'attributeContentInsights' => '\Walmart\Models\Supplier\US\Items\AttributeContentInsights[]',
        'variantGroupInfo' => '\Walmart\Models\Supplier\US\Items\VariantGroupInfo',
        'additionalProductAttributes' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'gtin' => null,
        'sku' => null,
        'variantGroupId' => null,
        'productName' => null,
        'brand' => null,
        'mainImageUrl' => null,
        'shortDescription' => null,
        'productType' => null,
        'shelfName' => null,
        'publishedStatus' => null,
        'unpublishedReasons' => null,
        'itemPageURL' => null,
        'price' => null,
        '_1pBuyBox' => null,
        'siteDates' => null,
        'customerRating' => 'float',
        'customerReviewCount' => 'int32',
        'contentQualityScore' => 'float',
        'walmartOrderAttributes' => null,
        'itemConfigurations' => null,
        'attributeContentInsights' => null,
        'variantGroupInfo' => null,
        'additionalProductAttributes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gtin' => false,
        'sku' => false,
        'variantGroupId' => false,
        'productName' => false,
        'brand' => false,
        'mainImageUrl' => false,
        'shortDescription' => false,
        'productType' => false,
        'shelfName' => false,
        'publishedStatus' => false,
        'unpublishedReasons' => false,
        'itemPageURL' => false,
        'price' => false,
        '_1pBuyBox' => false,
        'siteDates' => false,
        'customerRating' => false,
        'customerReviewCount' => false,
        'contentQualityScore' => false,
        'walmartOrderAttributes' => false,
        'itemConfigurations' => false,
        'attributeContentInsights' => false,
        'variantGroupInfo' => false,
        'additionalProductAttributes' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'gtin' => 'gtin',
        'sku' => 'sku',
        'variantGroupId' => 'variantGroupId',
        'productName' => 'productName',
        'brand' => 'brand',
        'mainImageUrl' => 'mainImageUrl',
        'shortDescription' => 'shortDescription',
        'productType' => 'productType',
        'shelfName' => 'shelfName',
        'publishedStatus' => 'publishedStatus',
        'unpublishedReasons' => 'unpublishedReasons',
        'itemPageURL' => 'itemPageURL',
        'price' => 'price',
        '_1pBuyBox' => '1PBuyBox',
        'siteDates' => 'siteDates',
        'customerRating' => 'customerRating',
        'customerReviewCount' => 'customerReviewCount',
        'contentQualityScore' => 'contentQualityScore',
        'walmartOrderAttributes' => 'walmartOrderAttributes',
        'itemConfigurations' => 'itemConfigurations',
        'attributeContentInsights' => 'attributeContentInsights',
        'variantGroupInfo' => 'variantGroupInfo',
        'additionalProductAttributes' => 'additionalProductAttributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'gtin' => 'setGtin',
        'sku' => 'setSku',
        'variantGroupId' => 'setVariantGroupId',
        'productName' => 'setProductName',
        'brand' => 'setBrand',
        'mainImageUrl' => 'setMainImageUrl',
        'shortDescription' => 'setShortDescription',
        'productType' => 'setProductType',
        'shelfName' => 'setShelfName',
        'publishedStatus' => 'setPublishedStatus',
        'unpublishedReasons' => 'setUnpublishedReasons',
        'itemPageURL' => 'setItemPageURL',
        'price' => 'setPrice',
        '_1pBuyBox' => 'set1pBuyBox',
        'siteDates' => 'setSiteDates',
        'customerRating' => 'setCustomerRating',
        'customerReviewCount' => 'setCustomerReviewCount',
        'contentQualityScore' => 'setContentQualityScore',
        'walmartOrderAttributes' => 'setWalmartOrderAttributes',
        'itemConfigurations' => 'setItemConfigurations',
        'attributeContentInsights' => 'setAttributeContentInsights',
        'variantGroupInfo' => 'setVariantGroupInfo',
        'additionalProductAttributes' => 'setAdditionalProductAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'gtin' => 'getGtin',
        'sku' => 'getSku',
        'variantGroupId' => 'getVariantGroupId',
        'productName' => 'getProductName',
        'brand' => 'getBrand',
        'mainImageUrl' => 'getMainImageUrl',
        'shortDescription' => 'getShortDescription',
        'productType' => 'getProductType',
        'shelfName' => 'getShelfName',
        'publishedStatus' => 'getPublishedStatus',
        'unpublishedReasons' => 'getUnpublishedReasons',
        'itemPageURL' => 'getItemPageURL',
        'price' => 'getPrice',
        '_1pBuyBox' => 'get1pBuyBox',
        'siteDates' => 'getSiteDates',
        'customerRating' => 'getCustomerRating',
        'customerReviewCount' => 'getCustomerReviewCount',
        'contentQualityScore' => 'getContentQualityScore',
        'walmartOrderAttributes' => 'getWalmartOrderAttributes',
        'itemConfigurations' => 'getItemConfigurations',
        'attributeContentInsights' => 'getAttributeContentInsights',
        'variantGroupInfo' => 'getVariantGroupInfo',
        'additionalProductAttributes' => 'getAdditionalProductAttributes'
    ];


    public const PUBLISHED_STATUS_PUBLISHED = 'Published';

    public const PUBLISHED_STATUS_UNPUBLISHED = 'Unpublished';

    public const PUBLISHED_STATUS_IN_PROGRESS = 'In Progress';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPublishedStatusAllowableValues()
    {
        return [
            self::PUBLISHED_STATUS_PUBLISHED,
            self::PUBLISHED_STATUS_UNPUBLISHED,
            self::PUBLISHED_STATUS_IN_PROGRESS,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('gtin', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('variantGroupId', $data ?? [], null);
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('mainImageUrl', $data ?? [], null);
        $this->setIfExists('shortDescription', $data ?? [], null);
        $this->setIfExists('productType', $data ?? [], null);
        $this->setIfExists('shelfName', $data ?? [], null);
        $this->setIfExists('publishedStatus', $data ?? [], null);
        $this->setIfExists('unpublishedReasons', $data ?? [], null);
        $this->setIfExists('itemPageURL', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('_1pBuyBox', $data ?? [], null);
        $this->setIfExists('siteDates', $data ?? [], null);
        $this->setIfExists('customerRating', $data ?? [], null);
        $this->setIfExists('customerReviewCount', $data ?? [], null);
        $this->setIfExists('contentQualityScore', $data ?? [], null);
        $this->setIfExists('walmartOrderAttributes', $data ?? [], null);
        $this->setIfExists('itemConfigurations', $data ?? [], null);
        $this->setIfExists('attributeContentInsights', $data ?? [], null);
        $this->setIfExists('variantGroupInfo', $data ?? [], null);
        $this->setIfExists('additionalProductAttributes', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPublishedStatusAllowableValues();
        if (!is_null($this->container['publishedStatus']) && !in_array($this->container['publishedStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'publishedStatus', must be one of '%s'",
                $this->container['publishedStatus'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets gtin
     *
     * @return string|null
    
     */
    public function getGtin()
    {
        return $this->container['gtin'];
    }

    /**
     * Sets gtin
     *
     * @param string|null $gtin Indicates the global trade Item number (in the GTIN-14 format).  The 14-digit Global Trade item number. If the returned value is less than 14 digits, add zeros at the beginning to lengthen it to 14 digits.
     *
     * @return self
    
     */
    public function setGtin($gtin)
    {
        if (is_null($gtin)) {
            throw new \InvalidArgumentException('non-nullable gtin cannot be null');
        }

        $this->container['gtin'] = $gtin;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku Indicates the stock keeping unit (SKU) identifier for the item and is assigned by the supplier.
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets variantGroupId
     *
     * @return string|null
    
     */
    public function getVariantGroupId()
    {
        return $this->container['variantGroupId'];
    }

    /**
     * Sets variantGroupId
     *
     * @param string|null $variantGroupId Indicates the variant group identifier of the item.  This value is included only if the item part of a variant or variant group.
     *
     * @return self
    
     */
    public function setVariantGroupId($variantGroupId)
    {
        if (is_null($variantGroupId)) {
            throw new \InvalidArgumentException('non-nullable variantGroupId cannot be null');
        }

        $this->container['variantGroupId'] = $variantGroupId;
        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName Indicates the name of the product that is displayed on the item page.
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
    
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand Indicates the name provided by the brand owner.  The brand assists recognition by the consumer as represented on the product.  If the item does not have a brand, it will be listed as `Unbranded`.
     *
     * @return self
    
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }

        $this->container['brand'] = $brand;
        return $this;
    }

    /**
     * Gets mainImageUrl
     *
     * @return string|null
    
     */
    public function getMainImageUrl()
    {
        return $this->container['mainImageUrl'];
    }

    /**
     * Sets mainImageUrl
     *
     * @param string|null $mainImageUrl Indicates the URL of the main image of the item.
     *
     * @return self
    
     */
    public function setMainImageUrl($mainImageUrl)
    {
        if (is_null($mainImageUrl)) {
            throw new \InvalidArgumentException('non-nullable mainImageUrl cannot be null');
        }

        $this->container['mainImageUrl'] = $mainImageUrl;
        return $this;
    }

    /**
     * Gets shortDescription
     *
     * @return string|null
    
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     *
     * @param string|null $shortDescription Indicates the descriptive overview of the item's key selling points, marketing content, and highlights.  For SEO purposes, repeat the product name and relevant keywords here.
     *
     * @return self
    
     */
    public function setShortDescription($shortDescription)
    {
        if (is_null($shortDescription)) {
            throw new \InvalidArgumentException('non-nullable shortDescription cannot be null');
        }

        $this->container['shortDescription'] = $shortDescription;
        return $this;
    }

    /**
     * Gets productType
     *
     * @return string|null
    
     */
    public function getProductType()
    {
        return $this->container['productType'];
    }

    /**
     * Sets productType
     *
     * @param string|null $productType Indicates Walmart's product type classification.  If there is no `ProductType` defined for the item, it will be shown as `null`.
     *
     * @return self
    
     */
    public function setProductType($productType)
    {
        if (is_null($productType)) {
            throw new \InvalidArgumentException('non-nullable productType cannot be null');
        }

        $this->container['productType'] = $productType;
        return $this;
    }

    /**
     * Gets shelfName
     *
     * @return string|null
    
     */
    public function getShelfName()
    {
        return $this->container['shelfName'];
    }

    /**
     * Sets shelfName
     *
     * @param string|null $shelfName Indicates the Walmart-assigned item shelf name used for the site.
     *
     * @return self
    
     */
    public function setShelfName($shelfName)
    {
        if (is_null($shelfName)) {
            throw new \InvalidArgumentException('non-nullable shelfName cannot be null');
        }

        $this->container['shelfName'] = $shelfName;
        return $this;
    }

    /**
     * Gets publishedStatus
     *
     * @return string|null
    
     */
    public function getPublishedStatus()
    {
        return $this->container['publishedStatus'];
    }

    /**
     * Sets publishedStatus
     *
     * @param string|null $publishedStatus Indicates the status of an item during the submission process.  The valid values are:  | Value | Meaning | | --- | ----------- | | Published | The item has been accepted and is published. | | Unpublished | The item has either been rejected during the submission process or removed from the site. It is not available on the site. | | In Progress | The item is still in the submission process and a publishing decision has yet been made. |   Example: Published
     *
     * @return self
    
     */
    public function setPublishedStatus($publishedStatus)
    {
        if (is_null($publishedStatus)) {
            throw new \InvalidArgumentException('non-nullable publishedStatus cannot be null');
        }
        $allowedValues = $this->getPublishedStatusAllowableValues();
        if (!in_array($publishedStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'publishedStatus', must be one of '%s'",
                    $publishedStatus,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['publishedStatus'] = $publishedStatus;
        return $this;
    }

    /**
     * Gets unpublishedReasons
     *
     * @return string[]|null
    
     */
    public function getUnpublishedReasons()
    {
        return $this->container['unpublishedReasons'];
    }

    /**
     * Sets unpublishedReasons
     *
     * @param string[]|null $unpublishedReasons Indicates the reason the item is unpublished.
     *
     * @return self
    
     */
    public function setUnpublishedReasons($unpublishedReasons)
    {
        if (is_null($unpublishedReasons)) {
            throw new \InvalidArgumentException('non-nullable unpublishedReasons cannot be null');
        }

        $this->container['unpublishedReasons'] = $unpublishedReasons;
        return $this;
    }

    /**
     * Gets itemPageURL
     *
     * @return string|null
    
     */
    public function getItemPageURL()
    {
        return $this->container['itemPageURL'];
    }

    /**
     * Sets itemPageURL
     *
     * @param string|null $itemPageURL Indicates the URL for the item's product page on Walmart.com.
     *
     * @return self
    
     */
    public function setItemPageURL($itemPageURL)
    {
        if (is_null($itemPageURL)) {
            throw new \InvalidArgumentException('non-nullable itemPageURL cannot be null');
        }

        $this->container['itemPageURL'] = $itemPageURL;
        return $this;
    }

    /**
     * Gets price
     *
     * @return \Walmart\Models\Supplier\US\Items\Price|null
    
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Walmart\Models\Supplier\US\Items\Price|null $price price
     *
     * @return self
    
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }

        $this->container['price'] = $price;
        return $this;
    }

    /**
     * Gets _1pBuyBox
     *
     * @return string|null
    
     */
    public function get1pBuyBox()
    {
        return $this->container['_1pBuyBox'];
    }

    /**
     * Sets _1pBuyBox
     *
     * @param string|null $_1pBuyBox Indicates a 1P offer is winning the buy-box for the item.  If `YES`, a 1P offer is winning the buy-box for the item.  If `NO`, a 1P offer is not winning the buy-box for the item.
     *
     * @return self
    
     */
    public function set1pBuyBox($_1pBuyBox)
    {
        if (is_null($_1pBuyBox)) {
            throw new \InvalidArgumentException('non-nullable _1pBuyBox cannot be null');
        }

        $this->container['_1pBuyBox'] = $_1pBuyBox;
        return $this;
    }

    /**
     * Gets siteDates
     *
     * @return \Walmart\Models\Supplier\US\Items\SiteDates|null
    
     */
    public function getSiteDates()
    {
        return $this->container['siteDates'];
    }

    /**
     * Sets siteDates
     *
     * @param \Walmart\Models\Supplier\US\Items\SiteDates|null $siteDates siteDates
     *
     * @return self
    
     */
    public function setSiteDates($siteDates)
    {
        if (is_null($siteDates)) {
            throw new \InvalidArgumentException('non-nullable siteDates cannot be null');
        }

        $this->container['siteDates'] = $siteDates;
        return $this;
    }

    /**
     * Gets customerRating
     *
     * @return float|null
    
     */
    public function getCustomerRating()
    {
        return $this->container['customerRating'];
    }

    /**
     * Sets customerRating
     *
     * @param float|null $customerRating Indicates the average customer review score for the item.  The scale is 1 to 5, 5 being the best review.  See the parameter `customerReviewCount` for the number of reviews for the item.
     *
     * @return self
    
     */
    public function setCustomerRating($customerRating)
    {
        if (is_null($customerRating)) {
            throw new \InvalidArgumentException('non-nullable customerRating cannot be null');
        }

        $this->container['customerRating'] = $customerRating;
        return $this;
    }

    /**
     * Gets customerReviewCount
     *
     * @return int|null
    
     */
    public function getCustomerReviewCount()
    {
        return $this->container['customerReviewCount'];
    }

    /**
     * Sets customerReviewCount
     *
     * @param int|null $customerReviewCount Indicates the number of customer reviews for the item.  See the parameter `customerRating` for the item's averaged rating.
     *
     * @return self
    
     */
    public function setCustomerReviewCount($customerReviewCount)
    {
        if (is_null($customerReviewCount)) {
            throw new \InvalidArgumentException('non-nullable customerReviewCount cannot be null');
        }

        $this->container['customerReviewCount'] = $customerReviewCount;
        return $this;
    }

    /**
     * Gets contentQualityScore
     *
     * @return float|null
    
     */
    public function getContentQualityScore()
    {
        return $this->container['contentQualityScore'];
    }

    /**
     * Sets contentQualityScore
     *
     * @param float|null $contentQualityScore Indicates the item's content quality score.  The scale is 0 to 100, 100 being the best quality score.
     *
     * @return self
    
     */
    public function setContentQualityScore($contentQualityScore)
    {
        if (is_null($contentQualityScore)) {
            throw new \InvalidArgumentException('non-nullable contentQualityScore cannot be null');
        }

        $this->container['contentQualityScore'] = $contentQualityScore;
        return $this;
    }

    /**
     * Gets walmartOrderAttributes
     *
     * @return \Walmart\Models\Supplier\US\Items\WalmartOrderAttributes|null
    
     */
    public function getWalmartOrderAttributes()
    {
        return $this->container['walmartOrderAttributes'];
    }

    /**
     * Sets walmartOrderAttributes
     *
     * @param \Walmart\Models\Supplier\US\Items\WalmartOrderAttributes|null $walmartOrderAttributes walmartOrderAttributes
     *
     * @return self
    
     */
    public function setWalmartOrderAttributes($walmartOrderAttributes)
    {
        if (is_null($walmartOrderAttributes)) {
            throw new \InvalidArgumentException('non-nullable walmartOrderAttributes cannot be null');
        }

        $this->container['walmartOrderAttributes'] = $walmartOrderAttributes;
        return $this;
    }

    /**
     * Gets itemConfigurations
     *
     * @return \Walmart\Models\Supplier\US\Items\ItemConfigurations[]|null
    
     */
    public function getItemConfigurations()
    {
        return $this->container['itemConfigurations'];
    }

    /**
     * Sets itemConfigurations
     *
     * @param \Walmart\Models\Supplier\US\Items\ItemConfigurations[]|null $itemConfigurations Indicates an array of objects detailing the item configuration.  This view shows one item for every Walmart item number, or the specific item configurations that suppliers sell to the merchant.
     *
     * @return self
    
     */
    public function setItemConfigurations($itemConfigurations)
    {
        if (is_null($itemConfigurations)) {
            throw new \InvalidArgumentException('non-nullable itemConfigurations cannot be null');
        }

        $this->container['itemConfigurations'] = $itemConfigurations;
        return $this;
    }

    /**
     * Gets attributeContentInsights
     *
     * @return \Walmart\Models\Supplier\US\Items\AttributeContentInsights[]|null
    
     */
    public function getAttributeContentInsights()
    {
        return $this->container['attributeContentInsights'];
    }

    /**
     * Sets attributeContentInsights
     *
     * @param \Walmart\Models\Supplier\US\Items\AttributeContentInsights[]|null $attributeContentInsights Indicates an array identifying specific content recommendations that can be made to improve the content quality score.
     *
     * @return self
    
     */
    public function setAttributeContentInsights($attributeContentInsights)
    {
        if (is_null($attributeContentInsights)) {
            throw new \InvalidArgumentException('non-nullable attributeContentInsights cannot be null');
        }

        $this->container['attributeContentInsights'] = $attributeContentInsights;
        return $this;
    }

    /**
     * Gets variantGroupInfo
     *
     * @return \Walmart\Models\Supplier\US\Items\VariantGroupInfo|null
    
     */
    public function getVariantGroupInfo()
    {
        return $this->container['variantGroupInfo'];
    }

    /**
     * Sets variantGroupInfo
     *
     * @param \Walmart\Models\Supplier\US\Items\VariantGroupInfo|null $variantGroupInfo variantGroupInfo
     *
     * @return self
    
     */
    public function setVariantGroupInfo($variantGroupInfo)
    {
        if (is_null($variantGroupInfo)) {
            throw new \InvalidArgumentException('non-nullable variantGroupInfo cannot be null');
        }

        $this->container['variantGroupInfo'] = $variantGroupInfo;
        return $this;
    }

    /**
     * Gets additionalProductAttributes
     *
     * @return object|null
    
     */
    public function getAdditionalProductAttributes()
    {
        return $this->container['additionalProductAttributes'];
    }

    /**
     * Sets additionalProductAttributes
     *
     * @param object|null $additionalProductAttributes Indicates an object providing additional product attributes details.  This object contains all the attributes related to the item’s product type. If there is no product type assigned to the item, that is, the object is returned as `null`, there will be no attributes present in the object.  The fields will vary according to the product type returned. For a complete list of fields and structures, see the Item Maintenance Feed File Schema provided the Item Guide.
     *
     * @return self
    
     */
    public function setAdditionalProductAttributes($additionalProductAttributes)
    {
        if (is_null($additionalProductAttributes)) {
            throw new \InvalidArgumentException('non-nullable additionalProductAttributes cannot be null');
        }

        $this->container['additionalProductAttributes'] = $additionalProductAttributes;
        return $this;
    }
}
