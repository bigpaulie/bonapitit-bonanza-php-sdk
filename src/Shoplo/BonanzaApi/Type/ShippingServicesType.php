<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class ShippingServicesType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $name;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $carrier;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("shippingType")
	 */
	public $shippingType;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("shippingServiceCost")
	 */
	public $shippingServiceCost;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $code;
}