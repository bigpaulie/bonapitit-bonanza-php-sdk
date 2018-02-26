<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class OrderArrayType
{
	/**
	 * @var OrderType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\OrderType")
     * @SerializedName("order")
	 */
	public $order;
}