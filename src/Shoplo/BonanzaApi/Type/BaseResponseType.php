<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

abstract class BaseResponseType
{
	/**
	 * @var ErrorMessageType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\ErrorMessageType")
     * @SerializedName("errorMessage")
	 */
	public $errorMessage;

	/**
	 * @var WarningsType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\WarningsType")
	 */
	public $warnings;
}