<?php


namespace Shoplo\BonanzaApi\Type;


use JMS\Serializer\Annotation as Serializer;

class FeedbackInfoType
{
    /**
     * Up to 250 characters that serve as the comment for the feedback.
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $commentText;

    /**
     * A string describing the type of feedback
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $commentTypeCode;

    /**
     * User name or ID of the user who the feedback is being left for
     * @var string
     *
     * @Serializer\Type("string")
     */
    public $targetUser;
}