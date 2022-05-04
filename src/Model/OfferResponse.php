<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the response payload of the <strong>createOffer</strong>
 * and <strong>updateOffer</strong> calls. The <strong>offerId</strong> field
 * contains the unique identifier for the offer if the offer is successfully
 * created by the <strong>createOffer</strong> call. The <strong>warnings</strong>
 * field contains any errors and/or warnings that may have been triggered by the
 * call. <p> <span class="tablenote"><strong>Note:</strong> The
 * <strong>offerId</strong> value is only returned with a successful
 * <strong>createOffer</strong> call. This field will not be returned in the
 * <strong>updateOffer </strong> response.</span></p>.
 */
class OfferResponse extends AbstractModel
{
    /**
     * The unique identifier of the offer that was just created with a
     * <strong>createOffer</strong> call. It is not returned if the
     * <strong>createOffer</strong> call fails to create an offer. This identifier will
     * be needed for many offer-related calls. <p> <span
     * class="tablenote"><strong>Note:</strong> The <strong>offerId</strong> value is
     * only returned with a successful <strong>createOffer</strong> call. This field
     * will not be returned in the <strong>updateOffer </strong> response.</span></p>.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * This container will contain an array of errors and/or warnings when a call is
     * made, and errors and/or warnings occur.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
