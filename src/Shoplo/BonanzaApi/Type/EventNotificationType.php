<?php

namespace Shoplo\BonanzaApi\Type;

class EventNotificationType
{

	/**
	 * @var string
	 */
	public $eventEnable;

	/**
	 * @var string
	 */
	public $eventType;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    public $detailed;
}