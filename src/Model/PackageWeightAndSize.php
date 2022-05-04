<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to indicate the package type, weight, and dimensions of the
 * shipping package. Package weight and dimensions are required when calculated
 * shipping rates are used, and weight alone is required when flat-rate shipping is
 * used, but with a weight surcharge. See the <a
 * href="https://pages.ebay.com/help/pay/calculated-shipping.html"
 * target="_blank">Calculated shipping</a> help page for more information on
 * calculated shipping.
 */
class PackageWeightAndSize extends AbstractModel
{
    /**
     * This container is used to indicate the length, width, and height of the shipping
     * package that will be used to ship the inventory item. The dimensions of a
     * shipping package are needed when calculated shipping is used.<br/><br/>This
     * container will be returned if package dimensions are set for the inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\Dimension
     */
    public $dimensions = null;

    /**
     * This enumeration value indicates the type of shipping package used to ship the
     * inventory item. The supported values for this field can be found in the <a
     * href="/api-docs/sell/inventory/types/slr:PackageTypeEnum">PackageTypeEnum</a>
     * type.<br/><br/>This field will be returned if the package type is set for the
     * inventory item.<br /><br /><span class="tablenote"> <strong>Note:</strong> You
     * can use the <a
     * href="/Devzone/XML/docs/Reference/eBay/GeteBayDetails.html#Response.ShippingPackageDetails">GeteBayDetails</a>
     * Trading API call to retrieve a list of supported package types for a specific
     * marketplace.</span> For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:PackageTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $packageType = null;

    /**
     * This container is used to specify the weight of the shipping package that will
     * be used to ship the inventory item. The weight of a shipping package are needed
     * when calculated shipping is used, or if flat-rate shipping rates are used, but
     * with a weight surcharge.<br/><br/>This field will be returned if package weight
     * is set for the inventory item.
     *
     * @var \Ebay\Sell\Inventory\Model\Weight
     */
    public $weight = null;
}
