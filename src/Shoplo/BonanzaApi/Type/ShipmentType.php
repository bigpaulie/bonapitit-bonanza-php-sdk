<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class ShipmentType
{
    /**
     * Message for buyer about shipping
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $notes;

    /**
     * Seller's private note to themselves
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $privateNote;

    /**
     * The tracking number for the shipment
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $shippingTrackingNumber;

    /**
     * The carrier used for shipping.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $shippingCarrierUsed;
}