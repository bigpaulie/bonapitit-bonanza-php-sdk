<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\GetOrdersResponseType;

class GetOrdersResponse extends BaseResponse
{
	/**
	 * @var GetOrdersResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\GetOrdersResponseType")
	 */
	public $getOrdersResponse;
}