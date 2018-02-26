<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class PrimaryCategoryType
{
	/**
	 * @var int
	 *
	 * @Gson\Type("string")
	 * @Gson\SerializedName("categoryId")
	 */
	public $categoryId;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @Gson\SerializedName("categoryName")
	 */
	public $categoryName;
}