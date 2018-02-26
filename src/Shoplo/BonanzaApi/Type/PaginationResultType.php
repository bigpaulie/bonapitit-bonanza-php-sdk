<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class PaginationResultType extends PaginationInputType
{
	/**
	 * @var int
	 *
	 * @Gson\Type("int")
	 */
	public $totalNumberOfEntries;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
	 */
	public $totalNumberOfPages;
}