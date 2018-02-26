<?php


namespace Shoplo\BonanzaApi\Request;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

abstract class SecureRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
     * @SerializedName("requesterCredentials")
	 */
	public $requesterCredentials;
}