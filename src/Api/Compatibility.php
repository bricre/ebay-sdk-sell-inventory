<?php

namespace Ebay\Sell\Inventory\Api;

use Ebay\Sell\Inventory\Model\BaseResponse;
use Ebay\Sell\Inventory\Model\Compatibility as CompatibilityModel;
use OpenAPI\Runtime\UnexpectedResponse;

class Compatibility extends AbstractAPI
{
    /**
     * This call is used by the seller to retrieve the list of products that are
     * compatible with the inventory item. The SKU value for the inventory item is
     * passed into the call URI, and a successful call with return the compatible
     * vehicle list associated with this inventory item. Product compatibility is
     * currently only applicable to motor vehicle parts and accessory categories, but
     * more categories may be supported in the future.
     *
     * @param string $sku A SKU (stock keeping unit) is an unique identifier defined by
     *                    a seller for a product
     *
     * @return CompatibilityModel|UnexpectedResponse
     */
    public function get(string $sku)
    {
        return $this->request(
        'getProductCompatibility',
        'GET',
        "inventory_item/$sku/product_compatibility",
        null,
        [],
        []
        );
    }

    /**
     * This call is used by the seller to create or replace a list of products that are
     * compatible with the inventory item. The inventory item is identified with a SKU
     * value in the URI. Product compatibility is currently only applicable to motor
     * vehicle parts and accessory categories, but more categories may be supported in
     * the future.<br /><br /><p>In addition to the <code>authorization</code> header,
     * which is required for all eBay REST API calls, the
     * <strong>createOrReplaceProductCompatibility</strong> call also requires the
     * <code>Content-Language</code> header, that sets the natural language that will
     * be used in the field values of the request payload. For US English, the code
     * value passed in this header should be <code>en-US</code>. To view other
     * supported <code>Content-Language</code> values, and to read more about all
     * supported HTTP headers for eBay REST API calls, see the <a
     * href="/api-docs/static/rest-request-components.html#HTTP">HTTP request
     * headers</a> topic in the <strong>Using eBay RESTful APIs</strong> document.</p>.
     *
     * @param string             $sku     A SKU (stock keeping unit) is an unique identifier defined by
     *                                    a seller for a product
     * @param CompatibilityModel $Model   Details of the compatibility
     * @param array              $headers options:
     *                                    'Content-Language'	string	This request header sets the natural language that
     *                                    will be provided in the field values of the request payload
     *
     * @return BaseResponse|UnexpectedResponse
     */
    public function createOrReplace(string $sku, CompatibilityModel $Model, array $headers = [])
    {
        return $this->request(
        'createOrReplaceProductCompatibility',
        'PUT',
        "inventory_item/$sku/product_compatibility",
        $Model->getArrayCopy(),
        [],
        $headers
        );
    }

    /**
     * This call is used by the seller to delete the list of products that are
     * compatible with the inventory item that is associated with the compatible
     * product list. The inventory item is identified with a SKU value in the URI.
     * Product compatibility is currently only applicable to motor vehicle parts and
     * accessory categories, but more categories may be supported in the future.
     *
     * @param string $sku A SKU (stock keeping unit) is an unique identifier defined by
     *                    a seller for a product
     *
     * @return UnexpectedResponse
     */
    public function delete(string $sku): UnexpectedResponse
    {
        return $this->request(
        'deleteProductCompatibility',
        'DELETE',
        "inventory_item/$sku/product_compatibility",
        null,
        [],
        []
        );
    }
}
