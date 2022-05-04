<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base response of the
 * <strong>bulkGetInventoryItem</strong> method.
 */
class BulkGetInventoryItemResponse extends AbstractModel
{
    /**
     * This is the base container of the <strong>bulkGetInventoryItem</strong>
     * response. The results of each attempted inventory item retrieval is captured
     * under this container.
     *
     * @var \Ebay\Sell\Inventory\Model\GetInventoryItemResponse[]
     */
    public $responses = null;
}
