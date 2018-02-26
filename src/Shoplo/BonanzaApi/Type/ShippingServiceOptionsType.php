<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class ShippingServiceOptionsType
{
	/**
	 * @var boolean
	 *
	 * @Gson\Type("boolean")
	 * @Gson\SerializedName("buyerPaysForLabel")
	 */
	public $buyerPaysForLabel;

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
	 * @var boolean
	 *
	 * @Gson\Type("boolean")
     * @Gson\SerializedName("freeShipping")
	 */
	public $freeShipping;

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
	 * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingServiceType
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("shippingService")
	 */
	public $shippingService;

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