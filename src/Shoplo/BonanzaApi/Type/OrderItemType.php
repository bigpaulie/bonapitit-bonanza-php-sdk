<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class OrderItemType
{
    /**
     * Bonanza's unique ID for this item.
     * For multi-quantity items, this item represents
     * a historical snapshot.
     * @var int
     *
     * @Serializer\Type("integer")
     */
    public $itemID;

    /**
     * When a multi-quantity item is sold, a duplicate historical
     * item is created. parentItemID is the original (non-historical) item's ID.
     * @var int
     *
     * @Serializer\Type("integer")
     */
    public $parentItemID;

    /**
     * The unique ebay ID for this item.
     * @var int
     *
     * @Serializer\Type("integer")
     */
    public $ebayId;

    /**
     * The MPN for this item, if specified.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $mpn;

    /**
     * Container for details about an individual item.
     * @var PersonalizedTextType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\PersonalizedTextType")
     */
    public $personalizedText;

    /**
     * The price per item for this item.
     * @var double
     *
     * @Serializer\Type("double")
     */
    public $price;

    /**
     * The seller-provided SKU for this item.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $sellerInventoryID;

    /**
     * URL of the item's image's thumbnail.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $thumbnailURL;

    /**
     * The quantity of this item included in this order.
     * @var int
     *
     * @Serializer\Type("integer")
     */
    public $quantity;

    /**
     * The title of this item.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $title;

	/**
	 * @var OrderVariationsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\OrderVariationsType")
	 */
	public $variations;

}