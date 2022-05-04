<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to specify the details of a motor vehicle that is compatible
 * with the inventory item specified through the SKU value in the call URI.
 */
class ProductFamilyProperties extends AbstractModel
{
    /**
     * This field indicates the specifications of the engine, including its size, block
     * type, and fuel type. An example is <code>2.7L V6 gas DOHC naturally
     * aspirated</code>. This field is conditionally required, but should be supplied
     * if known/applicable.
     *
     * @var string
     */
    public $engine = null;

    /**
     * This field indicates the make of the vehicle (e.g. <code>Toyota</code>). This
     * field is always required to identify a motor vehicle.
     *
     * @var string
     */
    public $make = null;

    /**
     * This field indicates the model of the vehicle (e.g. <code>Camry</code>). This
     * field is always required to identify a motor vehicle.
     *
     * @var string
     */
    public $model = null;

    /**
     * This field indicates the trim of the vehicle (e.g. <code>2-door Coupe</code>).
     * This field is conditionally required, but should be supplied if
     * known/applicable.
     *
     * @var string
     */
    public $trim = null;

    /**
     * This field indicates the year of the vehicle (e.g. <code>2016</code>). This
     * field is always required to identify a motor vehicle.
     *
     * @var string
     */
    public $year = null;
}
