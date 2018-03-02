<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 02/03/2018
 * Time: 13:35
 */

namespace Shoplo\BonanzaApi\Visitors;


use JMS\Serializer\Context;

class JsonDeserializationVisitor extends \JMS\Serializer\JsonDeserializationVisitor
{
    /**
     * This is a horrible workaround
     * @param $data
     * @param array $type
     * @param Context $context
     * @return mixed|string
     */
    public function visitString($data, array $type, Context $context)
    {
        $data = (is_array($data))? "" : $data;
        return parent::visitString($data, $type, $context);
    }
}