<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to express a dollar value and the applicable currency.
 */
class Amount extends AbstractModel
{
    /**
     * A three-digit string value respresenting the type of currency being used. Both
     * the <strong>value</strong> and <strong>currency</strong> fields are
     * required/always returned when expressing prices. See the <a
     * href="/api-docs/sell/inventory/types/ba:CurrencyCodeEnum">CurrencyCodeEnum</a>
     * type for the full list of currencies and their corresponding three-digit string
     * values.
     *
     * @var string
     */
    public $currency = null;

    /**
     * A string representation of a dollar value expressed in the currency specified in
     * the <strong>currency</strong> field. Both the <strong>value</strong> and
     * <strong>currency</strong> fields are required/always returned when expressing
     * prices.
     *
     * @var string
     */
    public $value = null;
}
