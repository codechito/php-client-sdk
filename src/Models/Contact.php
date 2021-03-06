<?php
/*
 * TransmitMessageLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace TransmitMessageLib\Models;

use JsonSerializable;

/**
 *Contact details
 */
class Contact implements JsonSerializable
{
    /**
     * Mobile number of the contact
     * @required
     * @var string $mobile public property
     */
    public $mobile;

    /**
     * First name of the contact
     * @maps first_name
     * @var string|null $firstName public property
     */
    public $firstName;

    /**
     * Last name of the contact
     * @maps last_name
     * @var string|null $lastName public property
     */
    public $lastName;

    /**
     * Country
     * @required
     * @var string $country public property
     */
    public $country;

    /**
     * Contact status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Dynamic Field
     * @var object|null $custom public property
     */
    public $custom;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mobile    Initialization value for $this->mobile
     * @param string $firstName Initialization value for $this->firstName
     * @param string $lastName  Initialization value for $this->lastName
     * @param string $country   Initialization value for $this->country
     * @param string $status    Initialization value for $this->status
     * @param object $custom    Initialization value for $this->custom
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 6:
                $this->mobile    = func_get_arg(0);
                $this->firstName = func_get_arg(1);
                $this->lastName  = func_get_arg(2);
                $this->country   = func_get_arg(3);
                $this->status    = func_get_arg(4);
                $this->custom    = func_get_arg(5);
                break;

            default:
                $this->country = 'au';
                $this->status = 'active';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['mobile']     = $this->mobile;
        $json['first_name'] = $this->firstName;
        $json['last_name']  = $this->lastName;
        $json['country']    = $this->country;
        $json['status']     = $this->status;
        $json['custom']     = $this->custom;

        return $json;
    }
}
