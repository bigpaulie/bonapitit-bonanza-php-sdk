<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class InternationalShippingServiceOptionType
{
	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingType
	 *
	 * @Gson\Type("string")
	 * @Gson\SerializedName("shippingType")
	 */
	public $shippingType;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShipToLocationType
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("shipToLocation")
	 */
	public $shipToLocation;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @Gson\SerializedName("shippingServiceCost")
	 */
	public $shippingServiceCost;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingCarrierType
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("shippingCarrier")
	 */
	public $shippingCarrier;
}