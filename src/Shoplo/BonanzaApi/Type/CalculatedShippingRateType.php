<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class CalculatedShippingRateType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("packageSize")
	 */
	public $packageSize;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @Gson\SerializedName("shippingWeightLbs")
	 */
	public $shippingWeightLbs;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @Gson\SerializedName("shippingWeightOz")
	 */
	public $shippingWeightOz;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @Gson\SerializedName("shippingHeight")
	 */
	public $shippingHeight;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @Gson\SerializedName("shippingWidth")
	 */
	public $shippingWidth;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @Gson\SerializedName("shippingDepth")
	 */
	public $shippingDepth;

}