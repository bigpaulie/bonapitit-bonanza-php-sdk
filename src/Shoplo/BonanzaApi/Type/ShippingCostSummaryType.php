<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class ShippingCostSummaryType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $carrier;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("insuranceCost")
	 */
	public $insuranceCost;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("insuranceType")
	 */
	public $insuranceType;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("packageSize")
	 */
	public $packageSize;

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
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingType
	 *
	 * @Gson\Type("string")
     * @SerializedName("shippingType")
	 */
	public $shippingType;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("shippingLbs")
	 */
	public $shippingLbs;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("shippingOz")
	 */
	public $shippingOz;

	/**
	 * @var ShippingServicesType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\ShippingServicesType>")
     * @SerializedName("shippingServices")
	 */
	public $shippingServices;
}