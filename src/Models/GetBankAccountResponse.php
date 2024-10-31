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
 * @todo Write general description for this model
 */
class GetBankAccountResponse implements JsonSerializable
{
    /**
     * Id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Holder name
     * @required
     * @maps holder_name
     * @var string $holderName public property
     */
    public $holderName;

    /**
     * Holder type
     * @required
     * @maps holder_type
     * @var string $holderType public property
     */
    public $holderType;

    /**
     * Bank
     * @required
     * @var string $bank public property
     */
    public $bank;

    /**
     * Branch number
     * @required
     * @maps branch_number
     * @var string $branchNumber public property
     */
    public $branchNumber;

    /**
     * Branch check digit
     * @required
     * @maps branch_check_digit
     * @var string $branchCheckDigit public property
     */
    public $branchCheckDigit;

    /**
     * Account number
     * @required
     * @maps account_number
     * @var string $accountNumber public property
     */
    public $accountNumber;

    /**
     * Account check digit
     * @required
     * @maps account_check_digit
     * @var string $accountCheckDigit public property
     */
    public $accountCheckDigit;

    /**
     * Bank account type
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * Bank account status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Creation date
     * @required
     * @maps created_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * Last update date
     * @required
     * @maps updated_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $updatedAt public property
     */
    public $updatedAt;

    /**
     * Deletion date
     * @required
     * @maps deleted_at
     * @factory \PagarmeCoreApiLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $deletedAt public property
     */
    public $deletedAt;

    /**
     * Recipient response
     * @var \PagarmeCoreApiLib\Models\GetRecipientResponse|null $recipient public property
     */
    public $recipient;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Pix Key
     * @required
     * @maps pix_key
     * @var string $pixKey public property
     */
    public $pixKey;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                $id                Initialization value for $this->id
     * @param string                $holderName        Initialization value for $this->holderName
     * @param string                $holderType        Initialization value for $this->holderType
     * @param string                $bank              Initialization value for $this->bank
     * @param string                $branchNumber      Initialization value for $this->branchNumber
     * @param string                $branchCheckDigit  Initialization value for $this->branchCheckDigit
     * @param string                $accountNumber     Initialization value for $this->accountNumber
     * @param string                $accountCheckDigit Initialization value for $this->accountCheckDigit
     * @param string                $type              Initialization value for $this->type
     * @param string                $status            Initialization value for $this->status
     * @param \DateTime             $createdAt         Initialization value for $this->createdAt
     * @param \DateTime             $updatedAt         Initialization value for $this->updatedAt
     * @param \DateTime             $deletedAt         Initialization value for $this->deletedAt
     * @param GetRecipientResponse  $recipient         Initialization value for $this->recipient
     * @param array                 $metadata          Initialization value for $this->metadata
     * @param string                $pixKey            Initialization value for $this->pixKey
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->id                = func_get_arg(0);
            $this->holderName        = func_get_arg(1);
            $this->holderType        = func_get_arg(2);
            $this->bank              = func_get_arg(3);
            $this->branchNumber      = func_get_arg(4);
            $this->branchCheckDigit  = func_get_arg(5);
            $this->accountNumber     = func_get_arg(6);
            $this->accountCheckDigit = func_get_arg(7);
            $this->type              = func_get_arg(8);
            $this->status            = func_get_arg(9);
            $this->createdAt         = func_get_arg(10);
            $this->updatedAt         = func_get_arg(11);
            $this->deletedAt         = func_get_arg(12);
            $this->recipient         = func_get_arg(13);
            $this->metadata          = func_get_arg(14);
            $this->pixKey            = func_get_arg(15);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                  = $this->id;
        $json['holder_name']         = $this->holderName;
        $json['holder_type']         = $this->holderType;
        $json['bank']                = $this->bank;
        $json['branch_number']       = $this->branchNumber;
        $json['branch_check_digit']  = $this->branchCheckDigit;
        $json['account_number']      = $this->accountNumber;
        $json['account_check_digit'] = $this->accountCheckDigit;
        $json['type']                = $this->type;
        $json['status']              = $this->status;
        $json['created_at']          = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['updated_at']          = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        $json['deleted_at']          = DateTimeHelper::toRfc3339DateTime($this->deletedAt);
        $json['recipient']           = $this->recipient;
        $json['metadata']            = $this->metadata;
        $json['pix_key']             = $this->pixKey;

        return $json;
    }
}
