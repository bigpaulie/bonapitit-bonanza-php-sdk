<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Enums\SortOrderType;
use Shoplo\BonanzaApi\Type\ItemFilterType;
use Shoplo\BonanzaApi\Type\PaginationInputType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class FindItemsByKeywordsRequest extends SecureRequest
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
	public $buyerPostalCode;

    /**
     * @var PaginationInputType
     *
     * @Serializer\Type("Shoplo\BonanzaApi\Type\PaginationInputType")
     */
	public $paginationInput;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     */
	public $sortOrder;

    /**
     * @var ItemFilterType[]
     *
     * @Serializer\Type("array<Shoplo\BonanzaApi\Type\ItemFilterType>")
     */
	public $itemFilter;
}
