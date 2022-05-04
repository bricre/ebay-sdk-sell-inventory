<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type provides IDs for the producer or importer related to the new item,
 * packaging, added documentation, or an eco-participation fee. In some markets,
 * such as in France, this may be the importer of the item.
 */
class ExtendedProducerResponsibility extends AbstractModel
{
    /**
     * This ID is the Unique Identifier of the producer related to the item. For
     * instance, if the seller is selling a cell phone, it is the ID related to the
     * cell phone.
     *
     * @var string
     */
    public $producerProductId = null;

    /**
     * The Unique ID of the producer of any packaging related to the product added by
     * the seller. This does not include package in which the product is shipped (see
     * <strong>ShipmentPackageID</strong>). For instance, if the seller adds bubble
     * wrap, it is the ID related to the bubble wrap.
     *
     * @var string
     */
    public $productPackageId = null;

    /**
     * This ID is the Unique Identifier of the producer of any packaging used by the
     * seller to ship the item. This does not include non-shipping packaging added to
     * the product (see <strong>ProductPackageID</strong>). This ID is required when
     * the seller uses packaging to ship the item. For instance, if the seller uses a
     * different box to ship the item, it is the ID related to the box.
     *
     * @var string
     */
    public $shipmentPackageId = null;

    /**
     * This ID is the Unique Identifier of the producer of any paper added to the
     * parcel of the item by the seller. For example, this ID concerns any notice,
     * leaflet, or paper that the seller adds to a cell phone parcel.
     *
     * @var string
     */
    public $productDocumentationId = null;

    /**
     * This is the fee paid for new items to the eco-organization (for example,
     * "eco-organisme" in France). It is a contribution to the financing of the
     * elimination of the item responsibly. <br/></br><b>Minimum:</b> 0.0.
     *
     * @var \Ebay\Sell\Inventory\Model\Amount
     */
    public $ecoParticipationFee = null;
}
