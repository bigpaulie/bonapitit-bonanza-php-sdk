<?php


namespace Shoplo\BonanzaApi\Response;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;
use Shoplo\BonanzaApi\Type\GetOrdersResponseType;

class GetOrdersResponse extends BaseResponse
{
	/**
	 * @var GetOrdersResponseType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\GetOrdersResponseType")
     * @SerializedName("getOrdersResponse")
	 */
	public $getOrdersResponse;
}