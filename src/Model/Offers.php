<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response of the <strong>getOffers</strong> call,
 * and it is an array of one or more of the seller's offers, along with pagination
 * data.
 */
class Offers extends AbstractModel
{
    /**
     * This is the URL to the current page of offers.
     *
     * @var string
     */
    public $href = null;

    /**
     * This integer value is the number of offers that will be displayed on each
     * results page.
     *
     * @var int
     */
    public $limit = null;

    /**
     * This is the URL to the next page of offers. This field will only be returned if
     * there are additional offers to view.
     *
     * @var string
     */
    public $next = null;

    /**
     * This container is an array of one or more of the seller's offers for the SKU
     * value that is passed in through the required <strong>sku</strong> query
     * parameter.<br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently,
     * the Inventory API does not support the same SKU across multiple eBay
     * marketplaces, so the <strong>getOffers</strong> call will only return one
     * offer.</span><br/><br/><strong>Max Occurs:</strong> 25.
     *
     * @var \Ebay\Sell\Inventory\Model\EbayOfferDetailsWithAll[]
     */
    public $offers = null;

    /**
     * This is the URL to the previous page of offers. This field will only be returned
     * if there are previous offers to view.
     *
     * @var string
     */
    public $prev = null;

    /**
     * This integer value indicates the number of offers being displayed on the current
     * page of results. This number will generally be the same as the
     * <strong>limit</strong> value if there are additional pages of results to
     * view.<br/><br/> <span class="tablenote"> <strong>Note:</strong> Currently, the
     * Inventory API does not support the same SKU across multiple eBay marketplaces,
     * so the <strong>Get Offers</strong> call will only return one offer, so this
     * value should always be <code>1</code>.</span>.
     *
     * @var int
     */
    public $size = null;

    /**
     * This integer value is the total number of offers that exist for the specified
     * SKU value. Based on this number and on the <strong>limit</strong> value, the
     * seller may have to toggle through multiple pages to view all offers.<br/><br/>
     * <span class="tablenote"> <strong>Note:</strong> Currently, the Inventory API
     * does not support the same SKU across multiple eBay marketplaces, so the
     * <strong>Get Offers</strong> call will only return one offer, so this value
     * should always be <code>1</code>.</span>.
     *
     * @var int
     */
    public $total = null;
}
