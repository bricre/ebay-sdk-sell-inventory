<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <strong>inventoryItems</strong> container that is
 * returned in the response of the <strong>bulkMigrateListing</strong> call. Up to
 * five <strong>sku</strong>/<strong>offerId</strong> pairs may be returned under
 * the <strong>inventoryItems</strong> container, dependent on how many eBay
 * listings the seller is attempting to migrate to the inventory model.
 */
class InventoryItemListing extends AbstractModel
{
    /**
     * Upon a successful migration of a listing, eBay auto-generates this unique
     * identifier, and this offer ID value will be used to retrieve and manage the
     * newly-created offer object. This value will only be generated and returned if
     * the eBay listing is migrated successfully.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * This is the seller-defined SKU value associated with the item(s) in a listing.
     * This same SKU value will be used to retrieve and manage the newly-created
     * inventory item object if the listing migration is successful. This SKU value
     * will get returned even if the migration is not successful.
     *
     * @var string
     */
    public $sku = null;
}
