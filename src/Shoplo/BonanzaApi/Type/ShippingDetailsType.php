<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShippingDetailsType
{
    /**
     * @var InsuranceDetailsType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\InsuranceDetailsType")
     */
    public $insuranceDetails;

    /**
     * @var string
     *
     * Allowed values in \Shoplo\BonanzaApi\Enums\ShippingServiceType
     *
     * @Serializer\Type("string")
     */
    public $shippingService;

    /**
     * @var CalculatedShippingRateType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\CalculatedShippingRateType")
     */
    public $calculatedShippingRate;

    /**
     * @var InternationalShippingServiceOptionType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\InternationalShippingServiceOptionType")
     */
    public $internationalShippingServiceOption;

    /**
     * @var ShippingServiceOptionsType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\ShippingServiceOptionsType")
     */
    public $shippingServiceOptions;
}