<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class InsuranceDetailsType
{
	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 * @SerializedName("insuranceOption")
	 */
	public $insuranceOption;

	/**
	 * @var double
	 *
	 * @Gson\Type("double")
     * @SerializedName("insuranceFee")
	 */
	public $insuranceFee;
}