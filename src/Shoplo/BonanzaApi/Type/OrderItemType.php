<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class OrderItemType
{
    /**
     * Bonanza's unique ID for this item.
     * For multi-quantity items, this item represents
     * a historical snapshot.
     * @var int
     *
     * @Gson\Type("integer")
     * @SerializedName("itemID")
     */
    public $itemID;

    /**
     * When a multi-quantity item is sold, a duplicate historical
     * item is created. parentItemID is the original (non-historical) item's ID.
     * @var int
     *
     * @Gson\Type("integer")
     * @SerializedName("parentItemID")
     */
    public $parentItemID;

    /**
     * The unique ebay ID for this item.
     * @var int
     *
     * @Gson\Type("integer")
     * @SerializedName("string")
     */
    public $ebayId;

    /**
     * The MPN for this item, if specified.
     * @var string
     *
     * @Gson\Type("string")
     */
    public $mpn;

    /**
     * Container for details about an individual item.
     * @var PersonalizedTextType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\PersonalizedTextType")
     * @SerializedName("personalizedText")
     */
//    public $personalizedText;

    /**
     * The price per item for this item.
     * @var double
     *
     * @Gson\Type("string")
     */
    public $price;

    /**
     * The seller-provided SKU for this item.
     * @var string
     *
     * @Gson\Type("string")
     * @SerializedName("sellerInventoryID")
     */
    public $sellerInventoryID;

    /**
     * URL of the item's image's thumbnail.
     * @var string
     *
     * @Gson\Type("string")
     * @SerializedName("thumbnailURL")
     */
    public $thumbnailURL;

    /**
     * The quantity of this item included in this order.
     * @var int
     *
     * @Gson\Type("integer")
     */
    public $quantity;

    /**
     * The title of this item.
     * @var string
     *
     * @Gson\Type("string")
     */
    public $title;

	/**
	 * @var OrderVariationsType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\OrderVariationsType")
	 */
	public $variations;

}