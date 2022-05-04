<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <strong>bulkCreateOffer</strong> response to show the
 * status of each offer that the seller attempted to create with the
 * <strong>bulkCreateOffer</strong> method. For each offer that is created
 * successfully, the returned <strong>statusCode</strong> value should be
 * <code>200</code>, and a unique <strong>offerId</strong> should be created for
 * each offer. If any issues occur with the creation of any offers,
 * <strong>errors</strong> and/or <strong>warnings</strong> containers will be
 * returned.
 */
class OfferSkuResponse extends AbstractModel
{
    /**
     * This container will be returned at the offer level, and will contain one or more
     * errors if any occurred with the attempted creation of the corresponding offer.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $errors = null;

    /**
     * This enumeration value indicates the listing format of the offer. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:FormatTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $format = null;

    /**
     * This enumeration value is the unique identifier of the eBay marketplace for
     * which the offer will be made available. This enumeration value should be the
     * same for all offers since the <strong>bulkCreateOffer</strong> method can only
     * be used to create offers for one eBay marketplace at a time. For implementation
     * help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The unique identifier of the newly-created offer. This identifier should be
     * automatically created by eBay if the creation of the offer was successful. It is
     * not returned if the creation of the offer was not successful. In which case, the
     * user may want to scan the corresponding <strong>errors</strong> and/or
     * <strong>warnings</strong> container to see what the issue may be.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * The seller-defined Stock-Keeping Unit (SKU) of the inventory item. The
     * <strong>sku</strong> value is required for each product offer that the seller is
     * trying to create, and it is always returned to identified the product that is
     * associated with the offer.
     *
     * @var string
     */
    public $sku = null;

    /**
     * The integer value returned in this field is the http status code. If an offer is
     * created successfully, the value returned in this field should be
     * <code>200</code>. A user can view the <strong>HTTP status codes</strong> section
     * for information on other status codes that may be returned with the
     * <strong>bulkCreateOffer</strong> method.
     *
     * @var int
     */
    public $statusCode = null;

    /**
     * This container will be returned at the offer level, and will contain one or more
     * warnings if any occurred with the attempted creation of the corresponding offer.
     * Note that it is possible that an offer can be created successfully even if one
     * or more warnings are triggered.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
