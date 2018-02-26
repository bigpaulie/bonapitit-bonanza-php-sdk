<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class ProductListingDetailsType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $mpn;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $isbn;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $upc;
}