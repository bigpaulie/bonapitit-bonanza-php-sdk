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
	 * @Serializer\Type("array")
	 */
	public $specifics;

	/**
	 * @var boolean
	 *
	 * @Serializer\Type("boolean")
	 * @Serializer\SerializedName("discardOld")
	 */
	public $discardOld;
}