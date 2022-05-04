<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to specify product aspects for which variations within an
 * inventory item group vary, and the order in which they appear in the listing.
 * For example, t-shirts in an inventory item group may be available in multiple
 * sizes and colors.
 */
class Specification extends AbstractModel
{
    /**
     * This is the name of product variation aspect. Typically, for clothing, typical
     * aspect names are <code>"Size"</code> and <code>"Color"</code>. Product variation
     * aspects are not required immediately upon creating an inventory item group, but
     * these aspects will be required before a multiple-variation listing containing
     * this inventory item group is published. For each product variation aspect that
     * is specified through the <strong>specifications</strong> container, one
     * <strong>name</strong> value is required and two or more variations of this
     * aspect are required through the <strong>values</strong> array.<br/><br/> <span
     * class="tablenote"> <strong>Note:</strong> Each member of the inventory item
     * group should have these same aspect names specified through the
     * <strong>product.aspects</strong> container when the inventory item is created
     * with the <strong>createOrReplaceInventoryItem</strong> or
     * <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br/><strong>Max
     * Length</strong>: 40.
     *
     * @var string
     */
    public $name = null;

    /**
     * This is an array of values pertaining to the corresponding product variation
     * aspect (specified in the <strong>name</strong> field). Below is a sample of how
     * these values will appear under a <strong>specifications</strong> container:
     * <br/> <pre><code>"specifications": [{<br/> "name": "Size",<br/> "values":
     * ["Small",<br/> "Medium",<br/> "Large"]<br/> },<br/> { <br/> "name":
     * "Color",<br/> "values": ["Blue",<br/> "White",<br/> "Red"] <br/> }]
     * </pre></code><span class="tablenote"> <strong>Note:</strong> Each member of the
     * inventory item group should have these same aspect names, and each individual
     * inventory item should have each variation of the product aspect values specified
     * through the <strong>product.aspects</strong> container when the inventory item
     * is created with the <strong>createOrReplaceInventoryItem</strong> or
     * <strong>bulkCreateOrReplaceInventoryItem</strong> call. </span><br/><strong>Max
     * Length</strong>: 50.
     *
     * @var string[]
     */
    public $values = null;
}
