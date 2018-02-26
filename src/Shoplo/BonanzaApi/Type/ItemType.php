<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class ItemType
{
	/**
	 * @var boolean
	 *
	 * @Gson\Type("boolean")
     * @SerializedName("bestOfferEnabled")
	 */
	public $bestOfferEnabled;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("buyItNowPrice")
	 */
	public $buyItNowPrice;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("convertedBuyItNowPrice")
	 */
	public $convertedBuyItNowPrice;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("convertedCurrentPrice")
	 */
	public $convertedCurrentPrice;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $country;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("currentPrice")
	 */
	public $currentPrice;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $description;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("ebayId")
	 */
	public $ebayId;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("galleryURL")
	 */
	public $galleryURL;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("itemID")
	 */
	public $itemID;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("parentItemID")
	 */
	public $parentItemID;

	/**
	 * @var string
	 *
	 * SKU in other words, returned in getOrders call
	 *
	 * @Gson\Type("string")
     * @SerializedName("sellerInventoryID")
	 */
	public $sellerInventoryID;

	/**
	 * @var ItemSpecificsType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\ItemSpecificsType>")
     * @SerializedName("itemSpecifics")
	 */
	public $itemSpecifics;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("listingStatus")
	 */
	public $listingStatus;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $location;

	/**
	 * @var string[]
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\PaymentMethodsType
	 *
	 * @Gson\Type("array<string>")
     * @SerializedName("paymentMethods")
	 */
	public $paymentMethods;

	/**
	 * @var string[]
	 *
	 * @Gson\Type("array<string>")
     * @SerializedName("pictureURL")
	 */
	public $pictureURL;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("postalCode")
	 */
	public $postalCode;

	/**
	 * @var PrimaryCategoryType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\PrimaryCategoryType")
     * @SerializedName("primaryCategory")
	 */
	public $primaryCategory;

	/**
	 * @var array
	 *
	 * Provides the upc/mpn/isbn value in the form: ["upc/mpn/isbn", "value"]
	 *
	 * @Gson\Type("array")
     * @SerializedName("productListingDetails")
	 */
	public $productListingDetails;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
	 */
	public $quantity;

	/**
	 * @var ReturnPolicyType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\ReturnPolicyType")
     * @SerializedName("returnPolicy")
	 */
	public $returnPolicy;

	/**
	 * @var SellerType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\SellerType")
	 */
	public $seller;

	/**
	 * @var ShippingCostSummaryType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\ShippingCostSummaryType")
     * @SerializedName("shippingCostSummary")
	 */
	public $shippingCostSummary;

	/**
	 * @var ShipToLocationsType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\ShipToLocationsType>")
     * @SerializedName("shipToLocations")
	 */
	public $shipToLocations;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $sku;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
     * @SerializedName("startTime")
	 */
	public $startTime;

	/**
	 * @var StoreInfoType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\StoreInfoType")
     * @SerializedName("storeInfo")
	 */
	public $storeInfo;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $title;

	/**
	 * @var VariationsType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\VariationsType")
	 */
	public $variations;

}