<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class NameValueListType
{

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $name;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $value;
}