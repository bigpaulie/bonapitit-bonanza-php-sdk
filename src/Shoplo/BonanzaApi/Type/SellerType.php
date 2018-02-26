<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class SellerType
{

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("feedbackRatingStar")
	 */
	public $feedbackRatingStar;

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @SerializedName("feedbackScore")
	 */
	public $feedbackScore;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("positiveFeedbackPercent")
	 */
	public $positiveFeedbackPercent;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("userId")
	 */
	public $userId;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("sellerUserName")
	 */
	public $sellerUserName;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("availableForChat")
	 */
	public $availableForChat;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("membershipLevel")
	 */
	public $membershipLevel;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @SerializedName("userPicture")
	 */
	public $userPicture;
}