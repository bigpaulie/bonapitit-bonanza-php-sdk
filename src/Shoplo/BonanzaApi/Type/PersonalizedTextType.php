<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class PersonalizedTextType
{
    /**
     * The label of this item personalization field.
     * @var string
     *
     * @Gson\Type("string")
     */
    public $label;

    /**
     * The buyer-provided text for this personalization field.
     * @var string
     *
     * @Gson\Type("string")
     */
    public $body;
}