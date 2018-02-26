<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class BuyerType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $email;
}