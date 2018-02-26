<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;

class TransactionArrayType
{
	/**
	 * @var TransactionType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\TransactionType")
	 */
	public $transaction;
}