<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddItemType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class CompleteSaleRequest
{
	/**
	 * @var RequesterCredentialsType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\RequesterCredentialsType")
	 */
	public $requesterCredentials;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
	public $accept;

	public $deny;

	public $feedbackInfo;
}
