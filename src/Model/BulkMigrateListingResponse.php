<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the response payload of the
 * <strong>bulkMigrateListings</strong> call.
 */
class BulkMigrateListingResponse extends AbstractModel
{
    /**
     * This is the base container of the response payload of the
     * <strong>bulkMigrateListings</strong> call. The results of each attempted listing
     * migration is captured under this container.
     *
     * @var \Ebay\Sell\Inventory\Model\MigrateListingResponse[]
     */
    public $responses = null;
}
