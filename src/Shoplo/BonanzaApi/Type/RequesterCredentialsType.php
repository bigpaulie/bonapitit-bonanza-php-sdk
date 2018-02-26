<?php


namespace Shoplo\BonanzaApi\Type;

use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class RequesterCredentialsType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("bonanzleAuthToken")
	 */
	public $bonanzleAuthToken;
}