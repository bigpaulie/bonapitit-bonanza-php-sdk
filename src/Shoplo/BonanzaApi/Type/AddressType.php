<?php


namespace Shoplo\BonanzaApi\Type;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\SerializedName;

class AddressType
{

	/**
	 * @var int
	 *
	 * @Gson\Type("int")
     * @serializedName("addressID")
	 */
	public $addressID;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @serializedName("cityName")
	 */
	public $cityName;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $country;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @serializedName("countryName")
	 */
	public $countryName;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $name;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @serializedName("postalCode")
	 */
	public $postalCode;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
     * @serializedName("stateOrProvince")
	 */
	public $stateOrProvince;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $street1;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $street2;
}