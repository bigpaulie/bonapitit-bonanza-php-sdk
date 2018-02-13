<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\CompleteSaleResponseType;
use Shoplo\BonanzaApi\Type\FixedPriceItemResponseType;

class CompleteSaleResponse extends BaseResponse
{
	/**
	 * @var CompleteSaleResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\CompleteSaleResponseType")
	 */
	public $completeSaleResponse;
}