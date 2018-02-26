<?php


namespace Shoplo\BonanzaApi\Response;


use Tebru\Gson\Annotation as Gson;
use Shoplo\BonanzaApi\Type\FixedPriceItemResponseType;

class AddFixedPriceItemResponse extends BaseResponse
{
	/**
	 * @var FixedPriceItemResponseType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\FixedPriceItemResponseType")
	 * @Gson\SerializedName("addFixedPriceItemResponse")
	 */
	public $addFixedPriceItemResponse;
}