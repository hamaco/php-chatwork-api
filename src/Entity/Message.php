<?php
namespace Polidog\Chatwork\Entity;

class Message implements EntityInterface 
{
    /**
     * @var int
     */
    public $messageId;

    /**
     * @var User
     */
    public $account;

    /**
     * @var string
     */
    public $body;

    /**
     * @var \DateTime
     */
    public $sendTime;

    /**
     * @var \DateTime
     */
    public $updateTime;
}