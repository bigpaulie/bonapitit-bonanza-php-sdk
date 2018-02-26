<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class PictureDetailsType
{
	/**
	 * @var boolean
	 *
	 * @Gson\Type("boolean")
	 * @Gson\SerializedName("discardOld")
	 */
	public $discardOld;

	/**
	 * @var string[]
	 *
	 * @Gson\Type("array<string>")
     * @Gson\SerializedName("pictureURL")
	 */
	public $pictureURL;
}