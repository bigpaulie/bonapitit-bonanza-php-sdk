<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class ShipToLocationsType
{
	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\RegionType
	 *
	 * @Gson\Type("string")
	 */
	public $region;

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
}