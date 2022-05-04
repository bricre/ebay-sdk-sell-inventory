<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <strong>getListingFees</strong> call to indicate the
 * unpublished offer(s) for which expected listing fees will be retrieved. The user
 * passes in one or more <strong>offerId</strong> values (a maximum of 250). See
 * the <a href="https://pages.ebay.com/help/sell/fees.html"
 * target="_blank">Standard selling fees</a> help page for more information on
 * listing fees.
 */
class OfferKeyWithId extends AbstractModel
{
    /**
     * The unique identifier of an unpublished offer for which expected listing fees
     * will be retrieved. One to 250 <strong>offerId</strong> values can be passed in
     * to the <strong>offers</strong> container for one <strong>getListingFees</strong>
     * call. Errors will occur if <strong>offerId</strong> values representing
     * published offers are passed in.
     *
     * @var string
     */
    public $offerId = null;
}
