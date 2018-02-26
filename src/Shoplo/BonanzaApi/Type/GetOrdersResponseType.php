<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class GetOrdersResponseType extends BaseResponseType
{

	/**
	 * @var boolean
	 *
	 * @Gson\Type("string")
     * @SerializedName("hasMoreOrders")
	 */
	public $hasMoreOrders;

	/**
	 * @var PaginationResultType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\PaginationResultType")
     * @SerializedName("paginationResult")
	 */
	public $paginationResult;

	/**
	 * @var OrderArrayType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\OrderArrayType>")
     * @SerializedName("orderArray")
	 */
	public $orderArray;
}