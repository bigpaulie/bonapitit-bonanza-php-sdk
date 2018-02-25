<?php


namespace Shoplo\BonanzaApi\Request;


use JMS\Serializer\Annotation as Serializer;
use Shoplo\BonanzaApi\Type\PaginationInputType;
use Shoplo\BonanzaApi\Type\RequesterCredentialsType;

class GetOrdersRequest extends SecureRequest
{
	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime")
	 */
	public $createTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime")
	 */
	public $createTimeTo;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime")
	 */
	public $modTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime")
	 */
	public $modTimeTo;

	/**
	 * @var int[]
	 *
	 * @Serializer\Type("array<int>")
	 */
	public $orderIDArray;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\UserRole
	 *
	 * @Serializer\Type("string")
	 */
	public $orderRole;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\OrderStatusType
	 *
	 * @Serializer\Type("string")
	 */
	public $orderStatus;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime")
	 */
	public $soldTimeFrom;

	/**
	 * @var \DateTime
	 *
	 * @Serializer\Type("DateTime")
	 */
	public $soldTimeTo;

	/**
	 * @var PaginationInputType
	 *
	 * @Serializer\Type("Shoplo\BonanzaApi\Type\PaginationInputType")
	 */
	public $paginationInput;
}
