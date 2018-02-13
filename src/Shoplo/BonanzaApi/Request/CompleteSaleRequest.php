<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\AddItemType;
use Shoplo\BonanzaApi\Type\FeedbackInfoType;
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

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
	public $deny;

    /**
     * @var FeedbackInfoType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\FeedbackInfoType")
     */
	public $feedbackInfo;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    public $shipped;

    /**
     * The ID for the transaction we're dealing with.
     * The same as orderID.
     *
     * @var int
     *
     * @Serializer\Type("integer")
     */
    public $transactionID;
}
