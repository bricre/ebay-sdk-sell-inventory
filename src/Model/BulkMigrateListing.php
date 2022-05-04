<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the base container of the
 * <strong>bulkMigrateListings</strong> request payload.
 */
class BulkMigrateListing extends AbstractModel
{
    /**
     * This is the base container of the <strong>bulkMigrateListings</strong> request
     * payload. One to five eBay listings will be included under this container.
     *
     * @var \Ebay\Sell\Inventory\Model\MigrateListing[]
     */
    public $requests = null;
}
