<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class AddItemSpecificsType
{
	/**
	 * Array of label/value pairs, for example [ [ "condition", "new" ], [ "genre", "romance" ] ]
	 *
	 * @var array
	 *
	 * @Gson\Type("array")
	 */
	public $specifics;

	/**
	 * @var boolean
	 *
	 * @Gson\Type("boolean")
	 * @Gson\SerializedName("discardOld")
	 */
	public $discardOld;
}