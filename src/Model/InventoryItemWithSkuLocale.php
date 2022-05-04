<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to define/modify each inventory item record that is being
 * created and/or updated with the
 * <strong>bulkCreateOrReplaceInventoryItem</strong> method. Up to 25 inventory
 * item records can be created and/or updated with one call.
 */
class InventoryItemWithSkuLocale extends AbstractModel
{
    /**
     * This container is used to specify the quantity of the inventory item that are
     * available for purchase. <br /><br /> This container is optional up until the
     * seller is ready to publish an offer with the SKU, at which time it becomes
     * required. Availability data must also be passed if an inventory item is being
     * updated and availability data already exists for that inventory item.<br /><br
     * /> Since an inventory item must have specified quantity before being published
     * in an offer, this container is always returned in the 'Get' calls for SKUs that
     * are part of a published offer. If a SKU is not part of a published offer, this
     * container will only be returned if set for the inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\Availability
     */
    public $availability = null;

    /**
     * This enumeration value indicates the condition of the item. Supported item
     * condition values will vary by eBay site and category. To see which item
     * condition values that a particular eBay category supports, use the <a
     * href="/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a>
     * method of the <strong>Metadata API</strong>. This method returns condition ID
     * values that map to the enumeration values defined in the <a
     * href="/api-docs/sell/inventory/types/slr:ConditionEnum">ConditionEnum</a> type.
     * The <a href="/api-docs/sell/static/metadata/condition-id-values.html">Item
     * condition ID and name values</a> topic in the <strong>Selling Integration
     * Guide</strong> has a table that maps condition ID values to
     * <strong>ConditionEnum</strong> values. The
     * <strong>getItemConditionPolicies</strong> call reference page has more
     * information.<br><br> A <strong>condition</strong> value is optional up until the
     * seller is ready to publish an offer with the SKU, at which time it becomes
     * required for most eBay categories. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $condition = null;

    /**
     * This string field is used by the seller to more clearly describe the condition
     * of a used inventory item, or an inventory item whose <strong>condition</strong>
     * value is not <code>NEW</code>, <code>LIKE_NEW</code>, <code>NEW_OTHER</code>, or
     * <code>NEW_WITH_DEFECTS</code>.<br/><br/> The
     * <strong>conditionDescription</strong> field is available for all eBay
     * categories. If the <strong>conditionDescription</strong> field is used with an
     * item in one of the new conditions (mentioned in previous paragraph), eBay will
     * simply ignore this field if included, and eBay will return a warning message to
     * the user. <br/><br/> This field should only be used to further clarify the
     * condition of the used item. It should not be used for branding, promotions,
     * shipping, returns, payment or other information unrelated to the condition of
     * the used item. Make sure that the <strong>condition</strong> value, condition
     * description, listing description, and the item's pictures do not contradict one
     * another. <br /><br /> This field is not always required, but is required if an
     * inventory item is being updated and a condition description already exists for
     * that inventory item. <br /><br /> This field is returned in the
     * <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and
     * <strong>getInventoryItems</strong> calls if a condition description was provided
     * for a used inventory item.<br/><br/><strong>Max Length</strong>: 1000.
     *
     * @var string
     */
    public $conditionDescription = null;

    /**
     * This field is for future use only. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $locale = null;

    /**
     * This container is used if the seller is offering one or more calculated shipping
     * options for the inventory item, or if the seller is offering flat-rate shipping
     * but is including a shipping surcharge based on the item's weight. This container
     * is used to specify the dimensions and weight of a shipping package. <br /><br />
     * This container is not always required, but is required if an inventory item is
     * being updated and shipping package data already exists for that inventory
     * item.<br /><br /> This container is returned in the
     * <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and
     * <strong>getInventoryItems</strong> calls if package type, package weight, and/or
     * package dimensions are specified for an inventory item.<br/><br/>See the <a
     * href="https://pages.ebay.com/help/pay/calculated-shipping.html"
     * target="_blank">Calculated shipping</a> help page for more information on
     * calculated shipping.
     *
     * @var \Ebay\Sell\Inventory\Model\PackageWeightAndSize
     */
    public $packageWeightAndSize = null;

    /**
     * This container is used to define the product details, such as product title,
     * product description, product identifiers (eBay Product ID, GTIN, or Brand/MPN
     * pair), product aspects/item specifics, and product images. Note that an eBay
     * Product ID (ePID) or a Global Trade Item Number (GTIN) value can be used in an
     * attempt to find a matching product in the eBay Catalog. If a product match is
     * found, the inventory item record will automatically pick up all product details
     * associated with the eBay Catalog product.<br/><br/> Many eBay categories will
     * require at least one product identifier (a GTIN or a Brand/MPN pair). To
     * discover which product identifier(s) that an eBay category might require or
     * support, use the <a
     * href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory">getItemAspectsForCategory</a>
     * method in the Taxonomy API. In the <strong>getItemAspectsForCategory</strong>
     * response, look for product identifier names (<code>brand</code>,
     * <code>mpn</code>, <code>upc</code>, <code>ean</code>, <code>isbn</code>) in the
     * <strong>localizedAspectName</strong> fields, and then look for the
     * correspondinng <strong>aspectRequired</strong> boolean fields as well as the
     * corresponding <strong>aspectUsage</strong> field, which will indicate if the
     * aspect is required, recommended, or optional. In some cases, a product
     * identifier type may be required, but not known/applicable for a product. If this
     * is the case, the seller must still include the corresponding field in the
     * inventory item record, but pass in a default text string. This text string can
     * vary by site, so the seller should use the <strong>GeteBayDetails</strong> call
     * of the Trading API to get this string value. In the
     * <strong>GeteBayDetails</strong> call, the seller should include a
     * <strong>DetailName</strong> field with its value set to
     * <code>ProductDetails</code>. In the response of the call, the seller can see the
     * default string value in the
     * <strong>ProductDetails.ProductIdentifierUnavailableText</strong> field. The
     * seller will use this value in one or more of the product identifier fields
     * (<strong>ean</strong>, <strong>isbn</strong>, <strong>upc</strong>, or
     * <strong>mpn</strong>) if a product ID isn't known or applicable. <br /><br />
     * This container is not initially required, but it is required before an inventory
     * item can be published as an offer, and/or if an inventory item is being updated
     * and product data already exists for that inventory item. <br /><br /> This
     * container is always returned for published offers in the
     * <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and
     * <strong>getInventoryItems</strong> calls since product data must be defined for
     * published offers, but for unpublished inventory items, this container will only
     * be returned if product details have been defined for the inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\Product
     */
    public $product = null;

    /**
     * This is the seller-defined SKU value of the product that will be listed on the
     * eBay site (specified in the <strong>marketplaceId</strong> field). Only one
     * offer (in unpublished or published state) may exist for each
     * <strong>sku</strong>/<strong>marketplaceId</strong>/<strong>format</strong>
     * combination. This field is required.<br/><br/><strong>Max Length</strong>:
     * 50<br/>.
     *
     * @var string
     */
    public $sku = null;
}
