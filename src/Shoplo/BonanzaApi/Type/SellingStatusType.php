<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SellingStatusType
 * @package Shoplo\BonanzaApi\Type
 */
class SellingStatusType
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $convertedCurrentPrice;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $currentPrice;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $sellingState;
}