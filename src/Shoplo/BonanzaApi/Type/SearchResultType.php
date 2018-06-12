<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class SearchResultType
 * @package Shoplo\BonanzaApi\Type
 */
class SearchResultType
{
    /**
     * @var ItemType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ItemType>")
     */
    public $item;
}