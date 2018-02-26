<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class VariationType
{
	/**
	 * @var double
	 *
	 * @Gson\Type("double")
	 */
	public $price;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
	 */
	public $quantity;

	/**
	 * @var NameValueListType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\NameValueListType>")
     * @SerializedName("nameValueList")
	 */
	public $nameValueList;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $upc;
}