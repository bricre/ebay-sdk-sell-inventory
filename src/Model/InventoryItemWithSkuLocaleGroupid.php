<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

class InventoryItemWithSkuLocaleGroupid extends AbstractModel
{
    /**
     * This container is used to specify the quantity of the inventory item that are
     * available for purchase if the item will be shipped to the buyer, and the
     * quantity of the inventory item that are available for In-Store Pickup at one or
     * more of the merchant's physical stores.
     *
     * @var \Ebay\Sell\Inventory\Model\AvailabilityWithAll
     */
    public $availability = null;

    /**
     * This enumeration value indicates the condition of the item. Supported item
     * condition values will vary by eBay site and category. <br /><br /> Since the
     * condition of an inventory item must be specified before being published in an
     * offer, this field is always returned in the 'Get' calls for SKUs that are part
     * of a published offer. If a SKU is not part of a published offer, this field will
     * only be returned if set for the inventory item. For implementation help, refer
     * to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $condition = null;

    /**
     * This string field is used by the seller to more clearly describe the condition
     * of used items, or items that are not 'Brand New', 'New with tags', or 'New in
     * box'. The ConditionDescription field is available for all categories. If the
     * ConditionDescription field is used with an item in a new condition (Condition
     * IDs 1000-1499), eBay will simply ignore this field if included, and eBay will
     * return a warning message to the user. This field should only be used to further
     * clarify the condition of the used item. It should not be used for branding,
     * promotions, shipping, returns, payment or other information unrelated to the
     * condition of the item. Make sure that the condition value, condition
     * description, listing description, and the item's pictures do not contradict one
     * another.<br /><br /><strong>Max length</strong>/: 1000.
     *
     * @var string
     */
    public $conditionDescription = null;

    /**
     * This array is returned if the inventory item is associated with any inventory
     * item group(s). The value(s) returned in this array are the unique identifier(s)
     * of the inventory item group(s). This array is not returned if the inventory item
     * is not associated with any inventory item groups.
     *
     * @var string[]
     */
    public $groupIds = null;

    /**
     * This array is returned if the inventory item is associated with any inventory
     * item group(s). The value(s) returned in this array are the unique identifier(s)
     * of the inventory item's variation in a multiple-variation listing. This array is
     * not returned if the inventory item is not associated with any inventory item
     * groups.
     *
     * @var string[]
     */
    public $inventoryItemGroupKeys = null;

    /**
     * This field is for future use only. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $locale = null;

    /**
     * This container is used to specify the dimensions and weight of a shipping
     * package.
     *
     * @var \Ebay\Sell\Inventory\Model\PackageWeightAndSize
     */
    public $packageWeightAndSize = null;

    /**
     * This container is used in a <strong>createOrReplaceInventoryItem</strong> call
     * to pass in a Global Trade Item Number (GTIN) or a Brand and Manufacturer Part
     * Number (MPN) pair to identify a product to be matched with a product in the eBay
     * catalog. If a match is found in the eBay product catalog, the inventory item is
     * automatically populated with available product details such as a title, a
     * subtitle, a product description, item specifics, and links to stock images for
     * the product.
     *
     * @var \Ebay\Sell\Inventory\Model\Product
     */
    public $product = null;

    /**
     * The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The seller
     * should have a unique SKU value for every product that they sell.
     *
     * @var string
     */
    public $sku = null;
}
