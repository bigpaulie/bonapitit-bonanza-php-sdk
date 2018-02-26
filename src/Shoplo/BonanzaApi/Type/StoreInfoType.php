<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class StoreInfoType
{

	/**
	 * @var StoreDiscountType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\StoreDiscountType")
     * @SerializedName("storeDiscount")
	 */
	public $storeDiscount;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("storeItemCount")
	 */
	public $storeItemCount;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("storeName")
	 */
	public $storeName;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("storeURL")
	 */
	public $storeURL;
}