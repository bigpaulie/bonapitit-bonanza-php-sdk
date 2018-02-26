<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class TransactionType
{
	/**
	 * @var BuyerType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\BuyerType")
	 */
	public $buyer;

	/**
	 * @var double
	 *
	 * @Gson\Type("string")
	 * @Gson\SerializedName("finalValueFee")
	 */
	public $finalValueFee;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("providerName")
	 */
	public $providerName;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("providerID")
	 */
	public $providerID;
}