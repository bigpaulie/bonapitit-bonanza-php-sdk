<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class FixedPriceItemResponseType extends BaseResponseType
{
    /**
     * @var string
     *
     * @Gson\Type("string")
     * @Gson\SerializedName("sellingState")
     */
    public $sellingState;

    /**
     * @var int
     *
     * @Gson\Type("int")
     * @Gson\SerializedName("categoryId")
     */
    public $categoryId;

    /**
     * @var int
     *
     * @Gson\Type("int")
     * @Gson\SerializedName("itemId")
     */
    public $itemId;

    /**
     * @var string
     *
     * @Gson\Type("string")
     */
    public $message;
}