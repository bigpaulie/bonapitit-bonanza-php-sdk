<?php

namespace Shoplo\BonanzaApi\Enums;

/**
 * Class ItemFiltersType
 * @package Shoplo\BonanzaApi\Enums
 */
class ItemFiltersType
{
    /**
     * The country code the seller ships to.
     * @var string
     */
    const AVAILABLE_TO = 'availableTo';

    /**
     * The name of the booth.
     * @var string
     */
    const BOOTH_NAME = 'boothName';

    /**
     * Whether or not to search in the item's description.
     * @var bool
     */
    const SEARCH_DESCRIPTION = 'searchDescription';

    /**
     * The item's SKU
     * @var string
     */
    const SKU = 'sku';
}