<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to display the result for each offer and/or inventory item
 * that the seller attempted to update with a
 * <strong>bulkUpdatePriceQuantity</strong> call. If any errors or warnings occur,
 * the error/warning data is returned at the offer/inventory item level.
 */
class PriceQuantityResponse extends AbstractModel
{
    /**
     * This array will be returned if there were one or more errors associated with the
     * update to the offer or inventory item record.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $errors = null;

    /**
     * The unique identifier of the offer that was updated. This field will not be
     * returned in situations where the seller is only updating the total
     * 'ship-to-home' quantity of an inventory item record.
     *
     * @var string
     */
    public $offerId = null;

    /**
     * This is the seller-defined SKU value of the product. This field is returned
     * whether the seller attempted to update an offer with the SKU value or just
     * attempted to update the total 'ship-to-home' quantity of an inventory item
     * record.<br/><br/><strong>Max Length</strong>: 50<br/>.
     *
     * @var string
     */
    public $sku = null;

    /**
     * The value returned in this container will indicate the status of the attempt to
     * update the price and/or quantity of the offer (specified in the corresponding
     * <strong>offerId</strong> field) or the attempt to update the total
     * 'ship-to-home' quantity of an inventory item (specified in the corresponding
     * <strong>sku</strong> field). For a completely successful update of an offer or
     * inventory item record, a value of <code>200</code> will appear in this field.  A
     * user can view the <strong>HTTP status codes</strong> section for information on
     * other status codes that may be returned with the
     * <strong>bulkUpdatePriceQuantity</strong> method.
     *
     * @var int
     */
    public $statusCode = null;

    /**
     * This array will be returned if there were one or more warnings associated with
     * the update to the offer or inventory item record.
     *
     * @var \Ebay\Sell\Inventory\Model\Error[]
     */
    public $warnings = null;
}
