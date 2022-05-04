<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <b>createInventoryLocation</b> call to provide an full
 * or partial address of an inventory location.
 */
class LocationDetails extends AbstractModel
{
    /**
     * The <b>address</b> container is required for a <b>createInventoryLocation</b>
     * call. Except in the case of an inventory location that supports In-Store Pickup
     * inventory, a full address is not a requirement when setting up an inventory
     * location.
     *
     * @var \Ebay\Sell\Inventory\Model\Address
     */
    public $address = null;

    /**
     * This container is used to set the Global Positioning System (GPS) latitude and
     * longitude coordinates for the inventory location.
     *
     * @var \Ebay\Sell\Inventory\Model\GeoCoordinates
     */
    public $geoCoordinates = null;
}
