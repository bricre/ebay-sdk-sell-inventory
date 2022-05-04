<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <strong>bestOfferTerms</strong> container, which is
 * used if the seller would like to support the Best Offer feature on their
 * listing.
 */
class BestOffer extends AbstractModel
{
    /**
     * This is the price at which Best Offers are automatically accepted. If a buyer
     * submits a Best Offer that is equal to or above this value, the offer is
     * automatically accepted on behalf of the seller. This field is only applicable if
     * the <strong>bestOfferEnabled</strong> value is set to
     * <code>true</code>.<br><br>The price set here must be lower than the current 'Buy
     * it Now' price. This field is only returned if set.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $autoAcceptPrice = null;

    /**
     * This is the price at which Best Offers are automatically declined. If a buyer
     * submits a Best Offer that is equal to or below this value, the offer is
     * automatically declined on behalf of the seller. This field is only applicable if
     * the <strong>bestOfferEnabled</strong> value is set to
     * <code>true</code>.<br><br>The price set here must be lower than the current 'Buy
     * it Now' price and the price set in the <strong>autoAcceptPrice</strong> field
     * (if used). This field is only returned if set.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $autoDeclinePrice = null;

    /**
     * This field indicates whether or not the Best Offer feature is enabled for the
     * listing. A seller can enable the Best Offer feature for a listing as long as the
     * category supports the Best Offer feature.<br><br>The seller includes this field
     * and sets its value to <code>true</code> to enable Best Offer feature.
     *
     * @var bool
     */
    public $bestOfferEnabled = null;
}
