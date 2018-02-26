<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class ShippingDetailsType
{
    /**
     * @var InsuranceDetailsType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\InsuranceDetailsType")
     * @SerializedName("insuranceDetails")
     */
    public $insuranceDetails;

    /**
     * @var string
     *
     * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingServiceType
     *
     * @Gson\Type("string")
     * @SerializedName("shippingService")
     */
    public $shippingService;

    /**
     * @var CalculatedShippingRateType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\CalculatedShippingRateType")
     * @SerializedName("calculatedShippingRate")
     */
    public $calculatedShippingRate;

    /**
     * @var InternationalShippingServiceOptionType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\InternationalShippingServiceOptionType")
     * @SerializedName("internationalShippingServiceOption")
     */
    public $internationalShippingServiceOption;

    /**
     * @var ShippingServiceOptionsType
     *
     * @Gson\Type("Shoplo\BonanzaApi\Type\ShippingServiceOptionsType")
     * @SerializedName("shippingServiceOptions")
     */
    public $shippingServiceOptions;
}