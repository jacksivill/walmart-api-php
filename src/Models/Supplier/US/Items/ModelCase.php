<?php

/**
 * ModelCase
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
 * ModelCase Class Doc Comment
 *
 * @category Class

 * @description Indicates an object providing trade item dimensions of the case.  A case may also be known as a vendor pack, orderable pack, shipping case, shipping pack, full case, or supplier pack.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ModelCase extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Case';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'caseGTIN' => 'string',
        'caseDepth' => 'float',
        'caseWidth' => 'float',
        'caseHeight' => 'float',
        'caseWeight' => 'float',
        'qtySellableItemsCase' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'caseGTIN' => null,
        'caseDepth' => 'double',
        'caseWidth' => 'double',
        'caseHeight' => 'double',
        'caseWeight' => 'double',
        'qtySellableItemsCase' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'caseGTIN' => false,
        'caseDepth' => false,
        'caseWidth' => false,
        'caseHeight' => false,
        'caseWeight' => false,
        'qtySellableItemsCase' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'caseGTIN' => 'caseGTIN',
        'caseDepth' => 'caseDepth',
        'caseWidth' => 'caseWidth',
        'caseHeight' => 'caseHeight',
        'caseWeight' => 'caseWeight',
        'qtySellableItemsCase' => 'qtySellableItemsCase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'caseGTIN' => 'setCaseGTIN',
        'caseDepth' => 'setCaseDepth',
        'caseWidth' => 'setCaseWidth',
        'caseHeight' => 'setCaseHeight',
        'caseWeight' => 'setCaseWeight',
        'qtySellableItemsCase' => 'setQtySellableItemsCase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'caseGTIN' => 'getCaseGTIN',
        'caseDepth' => 'getCaseDepth',
        'caseWidth' => 'getCaseWidth',
        'caseHeight' => 'getCaseHeight',
        'caseWeight' => 'getCaseWeight',
        'qtySellableItemsCase' => 'getQtySellableItemsCase'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('caseGTIN', $data ?? [], null);
        $this->setIfExists('caseDepth', $data ?? [], null);
        $this->setIfExists('caseWidth', $data ?? [], null);
        $this->setIfExists('caseHeight', $data ?? [], null);
        $this->setIfExists('caseWeight', $data ?? [], null);
        $this->setIfExists('qtySellableItemsCase', $data ?? [], null);
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
     * Gets caseGTIN
     *
     * @return string|null
    
     */
    public function getCaseGTIN()
    {
        return $this->container['caseGTIN'];
    }

    /**
     * Sets caseGTIN
     *
     * @param string|null $caseGTIN Indicates global trade item number (in the GTIN-14 format) that identifies the case.  The Case is also known as a vendor pack, orderable pack, shipping case, shipping pack, full case, or supplier pack.  The 14-digit Global Trade item number. If the returned value is less than 14 digits, add zeros at the beginning to lengthen it to 14 digits.
     *
     * @return self
    
     */
    public function setCaseGTIN($caseGTIN)
    {
        if (is_null($caseGTIN)) {
            throw new \InvalidArgumentException('non-nullable caseGTIN cannot be null');
        }

        $this->container['caseGTIN'] = $caseGTIN;
        return $this;
    }

    /**
     * Gets caseDepth
     *
     * @return float|null
    
     */
    public function getCaseDepth()
    {
        return $this->container['caseDepth'];
    }

    /**
     * Sets caseDepth
     *
     * @param float|null $caseDepth Indicates the longest horizontal (front to back) measurement (in inches).  If the trade item is the consumable (sellable) unit, this is measured with the product sitting on its natural base and facing forward. If the trade item is not the consumable (sellable) unit, this is measured with the product sitting on its natural base.  For more information, see <a href=\"https://supplierhelp.walmart.com\" target=\"_blank\">Supplier Help</a> and search for *pack dimensions*.
     *
     * @return self
    
     */
    public function setCaseDepth($caseDepth)
    {
        if (is_null($caseDepth)) {
            throw new \InvalidArgumentException('non-nullable caseDepth cannot be null');
        }

        $this->container['caseDepth'] = $caseDepth;
        return $this;
    }

    /**
     * Gets caseWidth
     *
     * @return float|null
    
     */
    public function getCaseWidth()
    {
        return $this->container['caseWidth'];
    }

    /**
     * Sets caseWidth
     *
     * @param float|null $caseWidth Indicates the longest horizontal (left to right) measurement (in inches).  If the trade item is the consumable (sellable) unit, this is measured with the product sitting on its natural base and facing forward. If the trade item is not the consumable (sellable) unit, this is measured with the product sitting on its natural base.  For more information, see <a href=\"https://supplierhelp.walmart.com\" target=\"_blank\">Supplier Help</a> and search for *pack dimensions*.
     *
     * @return self
    
     */
    public function setCaseWidth($caseWidth)
    {
        if (is_null($caseWidth)) {
            throw new \InvalidArgumentException('non-nullable caseWidth cannot be null');
        }

        $this->container['caseWidth'] = $caseWidth;
        return $this;
    }

    /**
     * Gets caseHeight
     *
     * @return float|null
    
     */
    public function getCaseHeight()
    {
        return $this->container['caseHeight'];
    }

    /**
     * Sets caseHeight
     *
     * @param float|null $caseHeight Indicates the longest horizontal (top to bottom) measurement (in inches).  If the trade item is the consumable (sellable) unit, this is measured with the product sitting on its natural base and facing forward. If the trade item is not the consumable (sellable) unit, this is measured with the product sitting on its natural base.  For more information, see <a href=\"https://supplierhelp.walmart.com\" target=\"_blank\">Supplier Help</a> and search for *pack dimensions*.
     *
     * @return self
    
     */
    public function setCaseHeight($caseHeight)
    {
        if (is_null($caseHeight)) {
            throw new \InvalidArgumentException('non-nullable caseHeight cannot be null');
        }

        $this->container['caseHeight'] = $caseHeight;
        return $this;
    }

    /**
     * Gets caseWeight
     *
     * @return float|null
    
     */
    public function getCaseWeight()
    {
        return $this->container['caseWeight'];
    }

    /**
     * Sets caseWeight
     *
     * @param float|null $caseWeight Indicates the weight (in pounds) of the trade item at the case level, including all of its packaging materials.
     *
     * @return self
    
     */
    public function setCaseWeight($caseWeight)
    {
        if (is_null($caseWeight)) {
            throw new \InvalidArgumentException('non-nullable caseWeight cannot be null');
        }

        $this->container['caseWeight'] = $caseWeight;
        return $this;
    }

    /**
     * Gets qtySellableItemsCase
     *
     * @return int|null
    
     */
    public function getQtySellableItemsCase()
    {
        return $this->container['qtySellableItemsCase'];
    }

    /**
     * Sets qtySellableItemsCase
     *
     * @param int|null $qtySellableItemsCase Indicates the total number of sellable units in the case.
     *
     * @return self
    
     */
    public function setQtySellableItemsCase($qtySellableItemsCase)
    {
        if (is_null($qtySellableItemsCase)) {
            throw new \InvalidArgumentException('non-nullable qtySellableItemsCase cannot be null');
        }

        $this->container['qtySellableItemsCase'] = $qtySellableItemsCase;
        return $this;
    }
}
