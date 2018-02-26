<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class VariationsType
{
	/**
	 * @var VariationType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\VariationType>")
	 */
	public $variation;
}