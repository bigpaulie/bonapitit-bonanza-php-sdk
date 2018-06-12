<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchItemType
 * @package Shoplo\BonanzaApi\Type
 */
class SearchItemType
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $descriptionBrief;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $galleryURL;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $globalId;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     */
    public $itemId;

    /**
     * @var ListingInfoType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\ListingInfoType")
     */
    public $listingInfo;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $location;

    /**
     * @var string[]
     *
     * @Serializer\Type("array")
     */
    public $paymentMethod;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $postalCode;

    /**
     * @var PrimaryCategoryType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\PrimaryCategoryType")
     */
    public $primaryCategory;

    /**
     * @var SellerInfoType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\SellerInfoType")
     */
    public $sellerInfo;

    /**
     * @var SellingStatusType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\SellingStatusType")
     */
    public $sellingStatus;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $sku;
}