<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class ReturnPolicyType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $description;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("returnsAcceptedOption")
	 */
	public $returnsAcceptedOption;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("returnsAccepted")
	 */
	public $returnsAccepted;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("returnsWithinOption")
	 */
	public $returnsWithinOption;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("returnsWithin")
	 */
	public $returnsWithin;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("shippingCostPaidByOption")
	 */
	public $shippingCostPaidByOption;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("shippingCostPaidBy")
	 */
	public $shippingCostPaidBy;
}