<?php
/*
 * PagarmeCoreApiLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PagarmeCoreApiLib\Models;

use JsonSerializable;
use PagarmeCoreApiLib\Utils\DateTimeHelper;

/**
 *Contains information to create a pix payment
 */
class CreatePixPaymentRequest implements JsonSerializable
{
    /**
     * Datetime when pix payment will expire
     * @maps expires_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $expiresAt public property
     */
    public $expiresAt;

    /**
     * Seconds until pix payment expires
     * @maps expires_in
     * @var integer|null $expiresIn public property
     */
    public $expiresIn;

    /**
     * Pix additional information
     * @maps additional_information
     * @var \PagarmeCoreApiLib\Models\PixAdditionalInformation[]|null $additionalInformation public property
     */
    public $additionalInformation;

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $expiresAt             Initialization value for $this->expiresAt
     * @param integer   $expiresIn             Initialization value for $this->expiresIn
     * @param array     $additionalInformation Initialization value for $this->additionalInformation
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->expiresAt             = func_get_arg(0);
            $this->expiresIn             = func_get_arg(1);
            $this->additionalInformation = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['expires_at']             = isset($this->expiresAt) ?
            DateTimeHelper::toRfc3339DateTime($this->expiresAt) : null;
        $json['expires_in']             = $this->expiresIn;
        $json['additional_information'] = $this->additionalInformation;

        return $json;
    }
}
