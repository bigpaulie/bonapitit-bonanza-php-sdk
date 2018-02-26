<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class CheckoutStatusType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $status;
}