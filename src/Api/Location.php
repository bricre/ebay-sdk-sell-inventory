<?php

namespace Ebay\Sell\Inventory\Api;

use Ebay\Sell\Inventory\Model\InventoryLocation;
use Ebay\Sell\Inventory\Model\InventoryLocationFull;
use Ebay\Sell\Inventory\Model\InventoryLocationResponse;
use Ebay\Sell\Inventory\Model\LocationResponse;
use OpenAPI\Runtime\UnexpectedResponse;

class Location extends AbstractAPI
{
    /**
     * This call retrieves all defined details of the inventory location that is
     * specified by the <b>merchantLocationKey</b> path parameter. <p>The
     * <code>authorization</code> HTTP header is the only required request header for
     * this call. </p><p>A successful call will return an HTTP status value of <i>200
     * OK</i>.</p>.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in at the end of the call URI to
     *                                    specify the inventory location to retrieve. <br><br><b>Max length</b>: 36
     *
     * @return InventoryLocationResponse|UnexpectedResponse
     */
    public function getInventory(string $merchantLocationKey)
    {
        return $this->request(
        'getInventoryLocation',
        'GET',
        "location/$merchantLocationKey",
        null,
        [],
        []
        );
    }

    /**
     * <p>Use this call to create a new inventory location. In order to create and
     * publish an offer (and create an eBay listing), a seller must have at least one
     * inventory location, as every offer must be associated with a
     * location.</p><p>Upon first creating an inventory location, only a seller-defined
     * location identifier and a physical location is required, and once set, these
     * values can not be changed. The unique identifier value
     * (<i>merchantLocationKey</i>) is passed in at the end of the call URI. This
     * <i>merchantLocationKey</i> value will be used in other Inventory Location calls
     * to identify the inventory location to perform an action against.</p><p>At this
     * time, location types are either warehouse or store. Warehouse locations are used
     * for traditional shipping, and store locations are generally used by US merchants
     * selling products through the In-Store Pickup program, or used by UK, Australian,
     * and German merchants selling products through the Click and Collect program. A
     * full address is required for store inventory locations. However, for warehouse
     * inventory locations, a full street address is not needed, but the city,
     * state/province, and country of the location must be provided. </p><p>Note that
     * all inventory locations are "enabled" by default when they are created, and you
     * must specifically disable them (by passing in a value of <code>DISABLED</code>
     * in the <strong>merchantLocationStatus</strong> field) if you want them to be set
     * to the disabled state. The seller's inventory cannot be loaded to inventory
     * locations in the disabled state.</p> <p>In addition to the
     * <code>authorization</code> header, which is required for all eBay REST API
     * calls, the following table includes another request header that is mandatory for
     * the <strong>createInventoryLocation</strong> call, and two other request headers
     * that are optional:</p><br> <table> <tr> <th>Header</th> <th>Description</th>
     * <th>Required?</th> <th>Applicable Values</th> </tr> <tr>
     * <td><code>Accept</code></td> <td>Describes the response encoding, as required by
     * the caller. Currently, the interfaces require payloads formatted in JSON, and
     * JSON is the default.</td> <td>No</td> <td><code>application/json</code></td>
     * </tr> <tr> <td><code>Content-Language</code></td> <td>Use this header to control
     * the language that is used for any returned errors or warnings in the call
     * response.</td> <td>No</td> <td><code>en-US</code></td> </tr> <tr>
     * <td><code>Content-Type</code></td> <td>The MIME type of the body of the request.
     * Must be JSON.</td> <td>Yes</td> <td><code>application/json</code></td> </tr>
     * </table></p><br/><p>Unless one or more errors and/or warnings occur with the
     * call, there is no response payload for this call. A successful call will return
     * an HTTP status value of <i>204 No Content</i>.</p>.
     *
     * @param string                $merchantLocationKey A unique, merchant-defined key (ID) for an
     *                                                   inventory location. This unique identifier, or key, is used in other Inventory
     *                                                   API calls to identify an inventory location. <br><br><b>Max length</b>: 36
     * @param InventoryLocationFull $Model               Inventory Location details
     *
     * @return UnexpectedResponse
     */
    public function createInventory(string $merchantLocationKey, InventoryLocationFull $Model): UnexpectedResponse
    {
        return $this->request(
        'createInventoryLocation',
        'POST',
        "location/$merchantLocationKey",
        $Model->getArrayCopy(),
        [],
        []
        );
    }

    /**
     * <p>This call deletes the inventory location that is specified in the
     * <code>merchantLocationKey</code> path parameter. Note that deleting a location
     * will not affect any active eBay listings associated with the deleted location,
     * but the seller will not be able modify the offers associated with the inventory
     * location once it is deleted.</p><p>The <code>authorization</code> HTTP header is
     * the only required request header for this call. </p><p>Unless one or more errors
     * and/or warnings occur with the call, there is no response payload for this call.
     * A successful call will return an HTTP status value of <i>200 OK</i>.</p>.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in at the end of the call URI to
     *                                    indicate the inventory location to be deleted. <br><br><b>Max length</b>: 36
     *
     * @return UnexpectedResponse
     */
    public function deleteInventory(string $merchantLocationKey): UnexpectedResponse
    {
        return $this->request(
        'deleteInventoryLocation',
        'DELETE',
        "location/$merchantLocationKey",
        null,
        [],
        []
        );
    }

    /**
     * <p>This call disables the inventory location that is specified in the
     * <code>merchantLocationKey</code> path parameter. Sellers can not load/modify
     * inventory to disabled inventory locations. Note that disabling an inventory
     * location will not affect any active eBay listings associated with the disabled
     * location, but the seller will not be able modify the offers associated with a
     * disabled inventory location.</p><p>The <code>authorization</code> HTTP header is
     * the only required request header for this call.</p><p>A successful call will
     * return an HTTP status value of <i>200 OK</i>.</p>.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in through the call URI to disable the
     *                                    specified inventory location. <br><br><b>Max length</b>: 36
     *
     * @return object|UnexpectedResponse
     */
    public function disableInventory(string $merchantLocationKey)
    {
        return $this->request(
        'disableInventoryLocation',
        'POST',
        "location/$merchantLocationKey/disable",
        null,
        [],
        []
        );
    }

    /**
     * <p>This call enables a disabled inventory location that is specified in the
     * <code>merchantLocationKey</code> path parameter. Once a disabled inventory
     * location is enabled, sellers can start loading/modifying inventory to that
     * inventory location. </p><p>The <code>authorization</code> HTTP header is the
     * only required request header for this call.</p><p>A successful call will return
     * an HTTP status value of <i>200 OK</i>.</p>.
     *
     * @param string $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                    inventory location. This value is passed in through the call URI to specify the
     *                                    disabled inventory location to enable. <br><br><b>Max length</b>: 36
     *
     * @return object|UnexpectedResponse
     */
    public function enableInventory(string $merchantLocationKey)
    {
        return $this->request(
        'enableInventoryLocation',
        'POST',
        "location/$merchantLocationKey/enable",
        null,
        [],
        []
        );
    }

    /**
     * This call retrieves all defined details for every inventory location associated
     * with the seller's account. There are no required parameters for this call and no
     * request payload. However, there are two optional query parameters,
     * <strong>limit</strong> and <strong>offset</strong>. The <strong>limit</strong>
     * query parameter sets the maximum number of inventory locations returned on one
     * page of data, and the <strong>offset</strong> query parameter specifies the page
     * of data to return. These query parameters are discussed more in the <strong>URI
     * parameters</strong> table below. <p>The <code>authorization</code> HTTP header
     * is the only required request header for this call. </p><p>A successful call will
     * return an HTTP status value of <i>200 OK</i>.</p>.
     *
     * @param array $queries options:
     *                       'limit'	string	The value passed in this query parameter sets the maximum number
     *                       of records to return per page of data. Although this field is a string, the
     *                       value passed in this field should be a positive integer value. If this query
     *                       parameter is not set, up to 100 records will be returned on each page of
     *                       results. <br><br> <strong>Min</strong>: 1
     *                       'offset'	string	Specifies the number of locations to skip in the result set
     *                       before returning the first location in the paginated response.  <p>Combine
     *                       <b>offset</b> with the <b>limit</b> query parameter to control the items
     *                       returned in the response. For example, if you supply an <b>offset</b> of
     *                       <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the
     *                       response contains the first 10 items from the complete list of items retrieved
     *                       by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is
     *                       <code>20</code>, the first page of the response contains items 11-30 from the
     *                       complete result set.</p> <p><b>Default:</b> 0</p>
     *
     * @return LocationResponse|UnexpectedResponse
     */
    public function getInventorys(array $queries = [])
    {
        return $this->request(
        'getInventoryLocations',
        'GET',
        'location',
        null,
        $queries,
        []
        );
    }

    /**
     * <p>Use this call to update non-physical location details for an existing
     * inventory location. Specify the inventory location you want to update using the
     * <b>merchantLocationKey</b> path parameter. <br><br>You can update the following
     * text-based fields: <strong>name</strong>, <strong>phone</strong>,
     * <strong>locationWebUrl</strong>, <strong>locationInstructions</strong> and
     * <strong>locationAdditionalInformation</strong>. Whatever text is passed in for
     * these fields in an <strong>updateInventoryLocation</strong> call will replace
     * the current text strings defined for these fields. For store inventory
     * locations, the operating hours and/or the special hours can also be updated.
     * <br><br> The merchant location key, the physical location of the store, and its
     * geo-location coordinates can not be updated with an
     * <strong>updateInventoryLocation</strong> call </p><p>In addition to the
     * <code>authorization</code> header, which is required for all eBay REST API
     * calls, the following table includes another request header that is mandatory for
     * the <strong>updateInventoryLocation</strong> call, and two other request headers
     * that are optional:</p><br> <table> <tr> <th>Header</th> <th>Description</th>
     * <th>Required?</th> <th>Applicable Values</th> </tr> <tr>
     * <td><code>Accept</code></td> <td>Describes the response encoding, as required by
     * the caller. Currently, the interfaces require payloads formatted in JSON, and
     * JSON is the default.</td> <td>No</td> <td><code>application/json</code></td>
     * </tr> <tr> <td><code>Content-Language</code></td> <td>Use this header to control
     * the language that is used for any returned errors or warnings in the call
     * response.</td> <td>No</td> <td><code>en-US</code></td> </tr> <tr>
     * <td><code>Content-Type</code></td> <td>The MIME type of the body of the request.
     * Must be JSON.</td> <td>Yes</td> <td><code>application/json</code></td> </tr>
     * </table><br/><p>Unless one or more errors and/or warnings occurs with the call,
     * there is no response payload for this call. A successful call will return an
     * HTTP status value of <i>204 No Content</i>.</p>.
     *
     * @param string            $merchantLocationKey A unique merchant-defined key (ID) for an
     *                                               inventory location. This value is passed in the call URI to indicate the
     *                                               inventory location to be updated. <br><br><b>Max length</b>: 36
     * @param InventoryLocation $Model               the inventory location details to be updated
     *                                               (other than the address and geo co-ordinates)
     *
     * @return UnexpectedResponse
     */
    public function updateInventory(string $merchantLocationKey, InventoryLocation $Model): UnexpectedResponse
    {
        return $this->request(
        'updateInventoryLocation',
        'POST',
        "location/$merchantLocationKey/update_location_details",
        $Model->getArrayCopy(),
        [],
        []
        );
    }
}
