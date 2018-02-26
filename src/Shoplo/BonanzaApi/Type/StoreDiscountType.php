<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class StoreDiscountType
{
	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("priceThreshold")
	 */
	public $priceThreshold;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("discountPercent")
	 */
	public $discountPercent;
}