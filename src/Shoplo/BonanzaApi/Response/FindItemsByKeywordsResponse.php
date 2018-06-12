<?php


namespace Shoplo\BonanzaApi\Response;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\FindItemsByKeywordsResponseType;

/**
 * Class FindItemsByKeywordsResponse
 * @package Shoplo\BonanzaApi\Response
 */
class FindItemsByKeywordsResponse extends BaseResponse
{
	/**
	 * @var FindItemsByKeywordsResponseType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\FindItemsByKeywordsResponseType")
	 */
	public $findItemsByKeywordsResponse;
}