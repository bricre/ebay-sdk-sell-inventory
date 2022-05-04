<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used by the <strong>compatibilityProperties</strong> container to
 * identify a motor vehicle using name/value pairs.
 */
class NameValueList extends AbstractModel
{
    /**
     * This string value identifies the motor vehicle aspect, such as 'make', 'model',
     * 'year', 'trim', and 'engine'. Typically, the make, model, and year of the motor
     * vehicle are always required, with the trim and engine being necessary sometimes,
     * but it will be dependent on the part or accessory, and on the vehicle class.
     *
     * @var string
     */
    public $name = null;

    /**
     * This string value identifies the motor vehicle aspect specified in the
     * corresponding <strong>name</strong> field. For example, if the
     * <strong>name</strong> field is 'make', this field may be 'Toyota', or if the
     * <strong>name</strong> field is 'model', this field may be 'Camry'.
     *
     * @var string
     */
    public $value = null;
}
