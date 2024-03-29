<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to specify the quantity of the inventory items that are
 * available for purchase if the items will be shipped to the buyer, and the
 * quantity of the inventory items that are available for In-Store Pickup at one or
 * more of the merchant's physical stores.<br /><br />In-Store Pickup is only
 * available to large merchants selling on the US, UK, Germany, and Australia
 * sites.
 */
class AvailabilityWithAll extends AbstractModel
{
    /**
     * This container consists of an array of one or more of the merchant's physical
     * stores where the inventory item is available for in-store pickup.<br /><br />The
     * store ID, the quantity available, and the fulfillment time (how soon the item
     * will be ready for pickup after the order occurs) are all returned in this
     * container.
     *
     * @var \Ebay\Sell\Inventory\Model\PickupAtLocationAvailability[]
     */
    public $pickupAtLocationAvailability = null;

    /**
     * This container specifies the quantity of the inventory items that are available
     * for a standard purchase, where the item is shipped to the buyer.
     *
     * @var \Ebay\Sell\Inventory\Model\ShipToLocationAvailabilityWithAll
     */
    public $shipToLocationAvailability = null;
}
