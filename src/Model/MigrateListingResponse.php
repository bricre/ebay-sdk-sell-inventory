<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to display the results of each listing that the seller
 * attempted to migrate.
 */
class MigrateListingResponse extends AbstractModel
{
    /**
     * If one or more errors occur with the attempt to migrate the listing, this
     * container will be returned with detailed information on each error.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $errors = null;

    /**
     * This field will only be returned for a multiple-variation listing that the
     * seller attempted to migrate. Its value is auto-generated by eBay. For a
     * multiple-variation listing that is successfully migrated to the new Inventory
     * model, eBay automatically creates an inventory item group object for the
     * listing, and the seller will be able to retrieve and manage that new inventory
     * item group object by using the value in this field.
     *
     * @var string
     */
    public $inventoryItemGroupKey = null;

    /**
     * This container exists of an array of SKU values and offer IDs. For
     * single-variation listings, this will only be one SKU value and one offer ID (if
     * listing was successfully migrated), but multiple SKU values and offer IDs will
     * be returned for multiple-variation listings.
     *
     * @var \Ebay\Sell\Inventory\Model\InventoryItemListing[]
     */
    public $inventoryItems = null;

    /**
     * The unique identifier of the eBay listing that the seller attempted to migrate.
     *
     * @var string
     */
    public $listingId = null;

    /**
     * This is the unique identifier of the eBay Marketplace where the listing resides.
     * The value fo the eBay US site will be <code>EBAY_US</code>. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * This field is returned for each listing that the seller attempted to migrate.
     * See the <strong>HTTP status codes</strong> table to see which each status code
     * indicates.
     *
     * @var int
     */
    public $statusCode = null;

    /**
     * If one or more warnings occur with the attempt to migrate the listing, this
     * container will be returned with detailed information on each warning. It is
     * possible that a listing can be successfully migrated even if a warning occurs.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
