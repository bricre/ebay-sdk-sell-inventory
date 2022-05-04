<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response of the <strong>bulkCreateOffer</strong>
 * method.
 */
class BulkOfferResponse extends AbstractModel
{
    /**
     * @var \Ebay\Sell\Inventory\Model\OfferSkuResponse[]
     */
    public $responses = null;
}
