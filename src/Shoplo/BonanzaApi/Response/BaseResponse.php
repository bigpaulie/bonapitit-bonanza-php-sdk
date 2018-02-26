<?php


namespace Shoplo\BonanzaApi\Response;


use Tebru\Gson\Annotation as Gson;
use Tebru\Gson\Annotation\Type;

abstract class BaseResponse
{
	/**
	 * @var \DateTime
	 *
	 * @Type("string")
	 */
	public $timestamp;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $version;

	/**
	 * @var string
	 *
	 * @Gson\Type("string")
	 */
	public $ack;
}