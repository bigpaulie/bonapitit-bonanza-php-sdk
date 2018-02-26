<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class AddItemType
{
    /**
     * @var string
     *
     * @Gson\Type("string")
     */
    public $description;

    /**
     * @var string
     *
     * @Gson\Type("string")
     * @Gson\SerializedName("externalProductId")
     */
    public $externalProductId;

    /**
     * @var boolean
     *
     * @Gson\Type("boolean")
     */
    public $obo;

    /**
     * @var AddItemSpecificsType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\AddItemSpecificsType")
     * @Gson\SerializedName("itemSpecifics")
     */
    public $itemSpecifics;

    /**
     * @var PictureDetailsType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\PictureDetailsType")
     * @Gson\SerializedName("pictureDetails")
     */
    public $pictureDetails;

    /**
     * @var double
     *
     * @Gson\Type("double")
     */
    public $price;

    /**
     * @var PrimaryCategoryType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\PrimaryCategoryType")
     * @Gson\SerializedName("primaryCategory")
     */
    public $primaryCategory;

    /**
     * @var ProductListingDetailsType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\ProductListingDetailsType")
     * @Gson\SerializedName("productListingDetails")
     */
    public $productListingDetails;

    /**
     * @var int
     *
     * @Gson\Type("int")
     */
    public $quantity;

    /**
     * @var ReturnPolicyType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\ReturnPolicyType")
     * @Gson\SerializedName("returnPolicy")
     */
    public $returnPolicy;

    /**
     * @var ShippingDetailsType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\ShippingDetailsType")
     * @Gson\SerializedName("shippingDetails")
     */
    public $shippingDetails;

    /**
     * @var string
     *
     * @Gson\Type("string")
     */
    public $sku;

    /**
     * @var string
     *
     * @Gson\Type("string")
     */
    public $title;

    /**
     * @var bool
     *
     * @Gson\Type("boolean")
     * @Gson\SerializedName("allowForSale")
     */
    public $allowForSale;

    /**
     * @var VariationType[]
     *
     * @Gson\Type("array<Shoplo\BonanzaApi\Type\VariationType>")
     */
    public $variations;
}