<?php

namespace Xsolla\SDK\Webhook\Message;

/**
 * Class OrderMessage
 * @package Xsolla\SDK\Webhook\Message
 */
class OrderMessage extends Message
{
    /**
     * @var int
     */
    protected $apiVersion = 2;

    /**
     * @return array
     */
    public function getItems():array
    {
        return $this->request['items'];
    }

    /**
     * @return array
     */
    public function getOrder():array
    {
        return $this->request['order'];
    }

    /**
     * @return array
     */
    public function getOrderPromotions():array
    {
        return $this->request['order']['promotions'];
    }

    /**
     * @return int
     */
    public function getOrderId():int
    {
        return $this->request['order']['id'];
    }

    /**
     * @return array
     */
    public function customParameters():array
    {
        return $this->request['custom_parameters'];
    }
}