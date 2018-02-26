<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class OrderVariationsType
{
	/**
	 * @var OrderVariationType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\OrderVariationType>")
	 */
	public $variation;
}