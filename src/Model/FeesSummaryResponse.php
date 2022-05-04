<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response payload for the
 * <strong>getListingFees</strong> call.
 */
class FeesSummaryResponse extends AbstractModel
{
    /**
     * This container consists of an array of one or more listing fees that the seller
     * can expect to pay for unpublished offers specified in the call request. Many fee
     * types will get returned even when they are <code>0.0</code>.
     *
     * @var \Ebay\Sell\Inventory\Model\FeeSummary[]
     */
    public $feeSummaries = null;
}
