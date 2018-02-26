<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class OrderVariationType extends VariationType
{
	/**
	 * @var NameValueListType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\NameValueListType")
     * @SerializedName("nameValueList")
	 */
	public $nameValueList;
}