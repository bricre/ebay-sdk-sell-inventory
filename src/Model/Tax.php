<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to enable the use of a sales tax table, to pass in a tax
 * exception category code, or to specify a VAT percentage.
 */
class Tax extends AbstractModel
{
    /**
     * This field will be included and set to <code>true</code> if the seller would
     * like to reference their account-level Sales Tax Table to calculate sales tax for
     * an order. A seller's Sales Tax Table can be created and managed manually in My
     * eBay's Payment Preferences. This Sales Tax Table contains all tax jurisdictions
     * for the seller's country (individual states and territories in US), and the
     * seller can set the sales tax rate for these individual tax jurisdictions.
     * <br/><br/> The Trading API has a <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/SetTaxTable.html"
     * target="_blank">SetTaxTable</a> call to add/modify sales tax rates for one or
     * more tax jurisdictions, and a <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetTaxTable.html"
     * target="_blank">GetTaxTable</a> call that will retrieve all tax jurisdictions
     * and related data, such as the sales tax rate (if defined) and a boolean field to
     * indicate if sales tax is applied to shipping and handling costs.<br/><br/> The
     * Account API has a <strong>getSalesTaxTable</strong> call to retrieve all tax
     * jurisdictions that have a defined sales tax rate, a
     * <strong>getSalesTaxTableEntry</strong> call to retrieve a sales tax rate for a
     * specific tax jurisdiction, a <strong>createSalesTaxTableEntry</strong> call to
     * set/modify a sales tax rate for a specific tax jurisdiction, and a
     * <strong>deleteSalesTaxTableEntry</strong> call to remove a sales tax rate from a
     * specific tax jurisdiction. <br/><br/>Note that a seller can enable the use of a
     * sales tax table, but if a sales tax rate is not specified for the buyer's
     * state/tax jurisdiction, sales tax will not be applied to the order. If a
     * <strong>thirdPartyTaxCategory</strong> value is used, the
     * <strong>applyTax</strong> field must also be used and set to
     * <code>true</code><br/><br/>This field will be returned if set for the
     * offer.<br/><br/>See the <a
     * href="https://pages.ebay.com/help/pay/checkout-tax-table.html"
     * target="_blank">Using a tax table</a> help page for more information on setting
     * up and using a sales tax table.
     *
     * @var bool
     */
    public $applyTax = null;

    /**
     * The tax exception category code. If this field is used, sales tax will also
     * apply to a service/fee, and not just the item price. This is to be used only by
     * sellers who have opted into sales tax being calculated by a sales tax
     * calculation vendor. If you are interested in becoming a tax calculation vendor
     * partner with eBay, contact <a
     * href="mailto:developer-relations@ebay.com">developer-relations@ebay.com</a>. One
     * supported value for this field is <code>WASTE_RECYCLING_FEE</code>. If this
     * field is used, the <strong>applyTax</strong> field must also be used and set to
     * <code>true</code><br/><br/>This field will be returned if set for the offer.
     *
     * @var string
     */
    public $thirdPartyTaxCategory = null;

    /**
     * This value is the Value Add Tax (VAT) rate for the item, if any. When a VAT
     * percentage is specified, the item's VAT information appears on the listing's
     * View Item page. In addition, the seller can choose to print an invoice that
     * includes the item's net price, VAT percent, VAT amount, and total price. Since
     * VAT rates vary depending on the item and on the user's country of residence, a
     * seller is responsible for entering the correct VAT rate; it is not calculated by
     * eBay. <br/><br/> To use VAT, a seller must be a business seller with a VAT-ID
     * registered with eBay, and must be listing the item on a VAT-enabled site. Max
     * applicable length is 6 characters, including the decimal (e.g., 12.345). The
     * scale is 3 decimal places. (If you pass in 12.3456, eBay may round up the value
     * to 12.346).<br/><br/>This field will be returned if set for the offer.
     *
     * @var float
     */
    public $vatPercentage = null;
}
