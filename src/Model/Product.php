<?php

namespace Ebay\Sell\Inventory\Model;

use OpenAPI\Runtime\AbstractModel;

/**
 * This type is used to define the product details, such as a title, a product
 * description, product aspects/item specifics, and links to images for the
 * product. Optionally, in a <strong>createOrReplaceInventoryItem</strong> call, a
 * seller can pass in an eBay Product Identifier (ePID) or a Global Trade Item
 * Number (GTIN) value, such as an EAN, an ISBN, a UPC, to identify a product to be
 * matched with a product in the eBay Catalog. The information in this type is also
 * returned in the <strong>getInventoryItem</strong>,
 * <strong>getInventoryItems</strong>, and <strong>bulkGetInventoryItem</strong>
 * calls if defined.
 */
class Product extends AbstractModel
{
    /**
     * This is a collection of item specifics (aka product aspects) name-value pairs
     * that provide more information about the product and might make it easier for
     * buyers to find. To view required/recommended product aspects/item specifics
     * names (and corresponding values) for a specific eBay category, sellers can use
     * the <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetCategorySpecifics.html"
     *  target="_blank">GetCategorySpecifics</a> call of the Trading API.
     * Alternatively, sellers can view similar items on eBay.com in the same category
     * to get an idea of what other sellers are using for product aspects/item
     * specifics.<br/><br/>Sellers also have the option of specifying an eBay Product
     * ID (ePID) or optionally, a Global Trade Item Number (GTIN) through the
     * corresponding fields in the <strong>product</strong> container in an attempt to
     * find a product match in the eBay Catalog. If a match is found based on the ePID
     * or GTIN value, the product aspects that are defined for the eBay Catalog product
     * will automatically get picked up by the newly created/updated inventory item.
     * <br/><br/>Below is an example of the proper JSON syntax to use when manually
     * inputting item specifics. Note that one item specific name, such as 'Features',
     * can have more than one value. If an item specific name has more than one value,
     * each value is delimited with a comma.<br/><br/> <pre><code>"aspects": {<br/>
     * "Brand": ["GoPro"],<br/> "Storage Type": ["Removable"]<br/>
     * }</code></pre><br/>Note that inventory items that will become part of an
     * inventory item group and multiple-variation listing should have the same
     * attributes that are defined for the inventory item group.<br/><br/>This
     * container will be returned if one or more item specific pairs are defined for
     * the inventory item.<br/><br/><strong>Max Length for Aspect Name</strong>:
     * 40<br/><br/><strong>Max Length for Aspect Value</strong>: 50.
     *
     * @var string
     */
    public $aspects = null;

    /**
     * The brand of the product. This field is often paired with the
     * <strong>mpn</strong> field to identify a specific product by Manufacture Part
     * Number. This field is conditionally required if the eBay category requires a
     * Manufacturer Part Number (MPN) value. If eBay is able to find a product match in
     * the eBay Catalog when an eBay Product ID (ePID) or GTIN value (UPC, ISBN, or
     * EAN) is supplied, all product details of that eBay Catalog product is picked up
     * by the inventory item record (including brand) if the
     * <strong>createOrReplaceInventoryItem</strong> call is successful. <br/><br/>This
     * field is returned if defined for an inventory item. If a brand was passed in as
     * an item specific name-value pair through the <strong>aspects</strong> array in a
     * <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up
     * by the <strong>brand</strong> field.<br/><br/><strong>Max Length</strong>: 65.
     *
     * @var string
     */
    public $brand = null;

    /**
     * The description of the product. The description of an existing inventory item
     * can be added or modified with a <strong>createOrReplaceInventoryItem</strong>
     * call. The description of an inventory item is automatically populated if the
     * seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN)
     * and eBay is able to find a matching product in the eBay Catalog.<br/><br/>Note
     * that this field is optional but recommended. If a
     * <strong>listingDescription</strong> field is omitted when creating and
     * publishing a single-variation offer, the text in this field will be used
     * instead. If neither the <strong>product.description</strong> field for the
     * inventory item nor the <strong>listingDescription</strong> field for the offer
     * exist, the <strong>publishOffer</strong> call will fail. If the inventory item
     * will be part of an inventory item group/multiple-variation listing, this field
     * should definitely be used to specify how the corresponding product variation is
     * different (e.g. <em>This is the green, extra-large version of the shirt</em>).
     * However, in the case of an inventory item group, the text in the
     * <strong>description</strong> field of the inventory item group will become the
     * listing description of the actual eBay listing instead of the text in this
     * field.<br/><br/>Basic HTML tags are supported, including the following
     * tags:<ul><li>&lt;b&gt;</li><li>&lt;strong&gt;</li><li>&lt;br&gt;</li><li>&lt;ol&gt;</li><li>&lt;ul&gt;</li><li>&lt;li&gt;</li><li>Table
     * tags including &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;, &lt;thead&gt;,
     * &lt;tfoot&gt;, &lt;tbody&gt;, &lt;caption&gt;, &lt;colgroup&gt;, and
     * &lt;col&gt;</li></ul>A seller can not use any active content in their listing
     * description. Active content includes animation or video via JavaScript, Flash,
     * plug-ins, or form actions.<br/><br/>This field is returned if defined for an
     * inventory item. If one of the GTIN types (e.g. UPC) was passed in when the
     * inventory item was created/modified and a product match was found in the eBay
     * catalog, product description is one of the details that gets picked up from the
     * catalog product.<br/><br/><strong>Max Length</strong>: 4000.
     *
     * @var string
     */
    public $description = null;

    /**
     * The European Article Number/International Article Number (EAN) for the product.
     * Although an ePID value is preferred when trying to find a product match in the
     * eBay Catalog, this field can also be used in an attempt to find a product match
     * in the eBay Catalog. If a product match is found in the eBay Catalog, the
     * inventory item is automatically populated with available product details such as
     * a title, a product description, product aspects (including the specified EAN
     * value), and a link to any stock image that exists for the catalog
     * product.<br/><br/>This field is returned if defined for an inventory item. If an
     * EAN was passed in as an item specific name-value pair through the
     * <strong>aspects</strong> array in a
     * <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up
     * by the <strong>ean</strong> field.
     *
     * @var string[]
     */
    public $ean = null;

    /**
     * The eBay Product Identifier (ePID) for the product. This field can be used to
     * directly identify an eBay Catalog product. Based on its specified ePID value,
     * eBay will search for the product in the eBay Catalog, and if a match is found,
     * the inventory item is automatically populated with available product details
     * such as product title, product description, product aspects, and a link to any
     * stock image that exists for the catalog product.<br/><br/>In an attempt to find
     * a eBay Catalog product match, an ePID value is always preferred over the other
     * product identifiers, since it is possible that one GTIN value can be associated
     * with multiple eBay Catalog products, and if multiple products are found, product
     * details will not be picked up by the Inventory Item object.<br/><br/>This field
     * is returned if defined for an inventory item.
     *
     * @var string
     */
    public $epid = null;

    /**
     * An array of one or more links to images for the product. URLs must use the
     * "HTTPS" protocol. Images can be self-hosted by the seller, or sellers can use
     * the <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html"
     *  target="_blank">UploadSiteHostedPictures</a> call of the Trading API to upload
     * images to an eBay Picture Server. If successful, the response of the <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html"
     * target="_blank">UploadSiteHostedPictures</a> call will contain a full URL to the
     * image on an eBay Picture Server. This is the URL that will be passed in through
     * the <strong>imageUrls</strong> array. Before an offer can be published, at least
     * one image must exist for the inventory item. Most eBay sites support up to 12
     * pictures free of charge, and eBay Motors listings can have up to 24
     * pictures.<br/><br/>A link to a stock image for a product may automatically be
     * populated for an inventory item if the seller specifies an eBay Product ID
     * (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching
     * product in the eBay Catalog.<br/><br/>This container will always be returned for
     * an inventory item that is part of a published offer since a published offer will
     * always have at least one picture, but this container will only be returned if
     * defined for inventory items that are not a part of a published offer.
     *
     * @var string[]
     */
    public $imageUrls = null;

    /**
     * The International Standard Book Number (ISBN) value for the product. Although an
     * ePID value is preferred when trying to find a product match in the eBay Catalog,
     * this field can also be used in an attempt to find a product match in the eBay
     * Catalog. If a product match is found in the eBay Catalog, the inventory item is
     * automatically populated with available product details such as a title, a
     * product description, product aspects (including the specified ISBN value), and a
     * link to any stock image that exists for the catalog product.<br/><br/>This field
     * is returned if defined for an inventory item. If an ISBN was passed in as an
     * item specific name-value pair through the <strong>aspects</strong> array in a
     * <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up
     * by the <strong>isbn</strong> field.
     *
     * @var string[]
     */
    public $isbn = null;

    /**
     * The Manufacturer Part Number (MPN) of a product. This field is paired with the
     * <strong>brand</strong> field to identify a product. Some eBay categories require
     * MPN values. The <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetCategorySpecifics.html"
     *  target="_blank">GetCategorySpecifics</a> call of the Trading API can be used to
     * see if a category requires an MPN. The MPN value for a product may automatically
     * be populated for an inventory item if the seller specifies an eBay Product ID
     * (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching
     * product in the eBay Catalog. <br/><br/>This field is returned if defined for an
     * inventory item. If an MPN was passed in as an item specific name-value pair
     * through the <strong>aspects</strong> array in a
     * <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up
     * by the <strong>mpn</strong> field.<br/><br/><strong>Max Length</strong>: 65.
     *
     * @var string
     */
    public $mpn = null;

    /**
     * A subtitle is an optional listing feature that allows the seller to provide more
     * information about the product, possibly including keywords that may assist with
     * search results. An additional listing fee will be charged to the seller if a
     * subtitle is used. For more information on using listing subtitles on the US
     * site, see the <a href="https://pages.ebay.com/help/sell/itemsubtitle.html"
     * target="_blank">Adding a subtitle to your listings</a> help page. The subtitle
     * of an existing inventory item can added, modified, or removed with a
     * <strong>createOrReplaceInventoryItem</strong> call.<br/><br/>Note that the same
     * <strong>subtitle</strong> text should be used for each inventory item that will
     * be part of an inventory item group, and ultimately become one product variation
     * within a multiple-variation listing.<br/><br/>This field will only be returned
     * if set for an inventory item.<br/><br/><strong>Max Length</strong>: 55.
     *
     * @var string
     */
    public $subtitle = null;

    /**
     * The title of an inventory item can be added or modified with a
     * <strong>createOrReplaceInventoryItem</strong> call. Although not immediately
     * required, a title will be needed before an offer with the inventory item is
     * published. The title of an inventory item is automatically populated if the
     * seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN)
     * and eBay is able to find a matching product in the eBay Catalog. If the
     * inventory item will become part of a single-variation offer, and the listing is
     * not a product-based listing, the text in this field will become the actual
     * listing title for the published offer. However, if the inventory item will
     * become part of a multiple-variation offer, the text in <strong>title</strong>
     * field of the inventory item group entity will actually become the listing title
     * for the published offer instead, although a title can still be provided for the
     * inventory item, and it will actually become the title of the
     * variation.<br/><br/>This field will always be returned for an inventory item
     * that is part of a published offer since a published offer will always have a
     * listing title, but this field will only be returned if defined for inventory
     * items that are not a part of a published offer.<br/><br/><strong>Max
     * Length</strong>: 80.
     *
     * @var string
     */
    public $title = null;

    /**
     * The Universal Product Code (UPC) value for the product. Although an ePID value
     * is preferred when trying to find a product match in the eBay Catalog, this field
     * can also be used in an attempt to find a product match in the eBay Catalog. If a
     * product match is found in the eBay Catalog, the inventory item is automatically
     * populated with available product details such as a title, a product description,
     * product aspects (including the specified UPC value), and a link to any stock
     * image that exists for the catalog product.<br/><br/>This field is returned if
     * defined for an inventory item. If a UPC was passed in as an item specific
     * name-value pair through the <strong>aspects</strong> array in a
     * <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up
     * by the <strong>upc</strong> field.
     *
     * @var string[]
     */
    public $upc = null;

    /**
     * An array of one or more VideoId values for the product. A VideoId is a unique
     * identifier that is automatically created by eBay when a seller successfully
     * uploads a video to eBay using the  <a
     * href="https://developer.ebay.com/api-docs/commerce/media/resources/video/methods/uploadVideo"
     * target="_blank">uploadVideo</a> method of the <a
     * href="https://developer.ebay.com/api-docs/commerce/media/overview.html"
     * target="_blank">Media API</a>.<br /><br />For information on supported
     * marketplaces and platforms, as well as other requirements and limitations of
     * video support, please refer to <a
     * href="https://developer.ebay.com/api-docs/sell/static/inventory/managing-video-media.html"
     * target="_blank">Managing videos</a>.
     *
     * @var string[]
     */
    public $videoIds = null;
}
