<?php

namespace Shoplo\BonanzaApi\Type;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ItemFilterType
 * @package Shoplo\BonanzaApi\Type
 */
class ItemFilterType
{
    /**
     * Allowed values in ItemFilters
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $value;
}