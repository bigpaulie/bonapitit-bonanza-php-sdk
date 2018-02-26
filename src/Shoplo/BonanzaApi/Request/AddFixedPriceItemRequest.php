<?php


namespace Shoplo\BonanzaApi\Request;


use Tebru\Gson\Annotation as Gson;
use Shoplo\BonanzaApi\Type\AddItemType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class AddFixedPriceItemRequest extends SecureRequest
{
	/**
	 * @var AddItemType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\AddItemType")
	 */
	public $item;
}
