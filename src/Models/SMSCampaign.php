<?php
/*
 * TransmitMessageLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace TransmitMessageLib\Models;

use JsonSerializable;
use TransmitMessageLib\Utils\DateTimeHelper;

/**
 *SMS Campaign details
 */
class SMSCampaign implements JsonSerializable
{
    /**
     * Contact List ID
     * @required
     * @maps list_id
     * @var string $listId public property
     */
    public $listId;

    /**
     * Sender ID
     * @required
     * @var string $sender public property
     */
    public $sender;

    /**
     * SMS content
     * @required
     * @var string $message public property
     */
    public $message;

    /**
     * Date on which the campaign will be sent
     * @maps send_date
     * @factory \TransmitMessageLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $sendDate public property
     */
    public $sendDate;

    /**
     * Option to shorten any URL in the message
     * @maps shorten_urls
     * @var bool|null $shortenUrls public property
     */
    public $shortenUrls;

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $listId      Initialization value for $this->listId
     * @param string    $sender      Initialization value for $this->sender
     * @param string    $message     Initialization value for $this->message
     * @param \DateTime $sendDate    Initialization value for $this->sendDate
     * @param bool      $shortenUrls Initialization value for $this->shortenUrls
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->listId      = func_get_arg(0);
            $this->sender      = func_get_arg(1);
            $this->message     = func_get_arg(2);
            $this->sendDate    = func_get_arg(3);
            $this->shortenUrls = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['list_id']      = $this->listId;
        $json['sender']       = $this->sender;
        $json['message']      = $this->message;
        $json['send_date']    = isset($this->sendDate) ?
            DateTimeHelper::toRfc3339DateTime($this->sendDate) : null;
        $json['shorten_urls'] = $this->shortenUrls;

        return $json;
    }
}
