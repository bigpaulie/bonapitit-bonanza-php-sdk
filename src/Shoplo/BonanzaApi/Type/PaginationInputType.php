<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class PaginationInputType
{
	/**
	 * @var int
	 *
	 * @Gson\Type("int")
	 */
	public $entriesPerPage;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
	 */
	public $pageNumber;
}