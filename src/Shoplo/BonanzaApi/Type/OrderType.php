<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class OrderType
{

	/**
	 * @var double
	 *
	 * @Gson\Type("string")
     * @SerializedName("amountPaid")
	 */
	public $amountPaid;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("amountSaved")
	 */
	public $amountSaved;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("buyerCheckoutMessage")
	 */
	public $buyerCheckoutMessage;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("buyerUserID")
	 */
	public $buyerUserID;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("buyerUserName")
	 */
	public $buyerUserName;

	/**
	 * @var CheckoutStatusType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\CheckoutStatusType")
     * @SerializedName("checkoutStatus")
	 */
	public $checkoutStatus;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
     * @SerializedName("createdTime")
	 */
	public $createdTime;

	/**
	 * @var string
	 *
	 * Allowed values in \Shoplo\BonanzaApi\Enums\UserRole
	 *
	 * @Gson\Type("string")
     * @SerializedName("creatingUserRole")
	 */
	public $creatingUserRole;

	/**
	 * @var OrderItemArrayType[]
	 *
	 * @Gson\Type("array<Shoplo\BonanzaApi\Type\OrderItemArrayType>")
     * @SerializedName("itemArray")
	 */
	public $itemArray;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("orderID")
	 */
	public $orderID;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("orderStatus")
	 */
	public $orderStatus;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
     * @SerializedName("paidTime")
	 */
	public $paidTime;

	/**
	 * @var AddressType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\AddressType")
     * @SerializedName("shippingAddress")
	 */
	public $shippingAddress;

	/**
	 * @var ShippingDetailsType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\ShippingDetailsType")
     * @serializedName("shippingDetails")
	 */
	public $shippingDetails;

	/**
	 * @var \DateTime
	 *
	 * @Gson\Type("DateTime")
     * @serializedName("shippedTime")
	 */
	public $shippedTime;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
	 */
	public $subtotal;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @serializedName("taxAmount")
	 */
	public $taxAmount;

	/**
	 * @var double
	 *
	 * @Gson\Type("string")
	 */
	public $total;

	/**
	 * @var TransactionArrayType
	 *
	 * @Gson\Type("Shoplo\BonanzaApi\Type\TransactionArrayType")
     * @serializedName("transactionArray")
	 */
	public $transactionArray;
}