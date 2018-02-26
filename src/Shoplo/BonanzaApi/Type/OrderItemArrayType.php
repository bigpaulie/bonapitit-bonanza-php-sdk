<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class OrderItemArrayType
{
	/**
	 * @var OrderItemType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\OrderItemType")
     * @SerializedName("item")
	 */
	public $item;
}