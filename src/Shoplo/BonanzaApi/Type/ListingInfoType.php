<?php

namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class ListingInfoType
 * @package Shoplo\BonanzaApi\Type
 */
class ListingInfoType
{
    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     */
    public $bestOfferEnabled;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $buyItNowPrice;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $convertedBuyItNowPrice;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $listingType;

    /**
     * @var string
     *
     * @Serializer\Type("string");
     */
    public $price;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $startTime;

    /**
     * @var string
     *
     * @Serializer\Type("DateTime<'Y-m-d\TH:i:s.u\Z'>")
     */
    public $lastChangeTime;
}