<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class CompleteSaleResponseType extends BaseResponseType
{
    /**
     * True if the offer acceptance was not issued concurrently
     * with another offer acceptance request. False otherwise.
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    public $skippedProcessing;

    /**
     * Returns true if the offer was accepted successfully.
     * Absent otherwise.
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    public $processedAcceptance;

    /**
     * Returns true if the offer was denied successfully.
     * Absent otherwise.
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    public $processedDeny;
}