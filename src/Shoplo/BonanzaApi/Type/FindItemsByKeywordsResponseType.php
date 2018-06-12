<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

/**
 * Class FindItemsByKeywordsResponseType
 * @package Shoplo\BonanzaApi\Type
 */
class FindItemsByKeywordsResponseType extends BaseResponseType
{
    /**
     * @var PaginationOutputType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\PaginationOutputType")
     */
    public $paginationOutput;

    /**
     * @var SearchItemType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\SearchItemType>")
     */
    public $item;
}