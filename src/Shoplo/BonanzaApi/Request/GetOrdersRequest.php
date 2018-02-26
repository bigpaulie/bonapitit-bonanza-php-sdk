<?php


namespace Shoplo\BonanzaApi\Request;


use Tebru\Gson\Annotation as Gson;
use Shoplo\BonanzaApi\Type\PaginationInputType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class GetOrdersRequest extends SecureRequest
{
	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
	 */
	public $createTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
	 */
	public $createTimeTo;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
	 */
	public $modTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
	 */
	public $modTimeTo;

	/**
	 * @var int[]
	 *
	 * @Gson\Type("array<int>")
	 */
	public $orderIDArray;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\UserRole
	 *
	 * @Gson\Type("string")
	 */
	public $orderRole;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\OrderStatusType
	 *
	 * @Gson\Type("string")
	 */
	public $orderStatus;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
	 */
	public $soldTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
	 */
	public $soldTimeTo;

	/**
	 * @var PaginationInputType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\PaginationInputType")
	 */
	public $paginationInput;
}
