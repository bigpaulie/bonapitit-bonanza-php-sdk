<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class PersonalizedTextType
{
    /**
     * The label of this item personalization field.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $label;

    /**
     * The buyer-provided text for this personalization field.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $body;
}