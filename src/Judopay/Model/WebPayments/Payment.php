<?php

namespace Judopay\Model\WebPayments;

use Judopay\DataType;
use Judopay\Model;

class Payment extends Model
{
    protected $resourcePath = 'webpayments/payments';
    protected $validApiMethods = array('create');
    protected $attributes
        = array(
            'yourConsumerReference' => DataType::TYPE_STRING,
            'yourPaymentReference'  => DataType::TYPE_STRING,
            'yourPaymentMetaData'   => DataType::TYPE_OBJECT,
            'judoId'                => DataType::TYPE_STRING,
            'amount'                => DataType::TYPE_FLOAT,
            'partnerServiceFee'     => DataType::TYPE_FLOAT,
            'clientIpAddress'       => DataType::TYPE_STRING,
            'clientUserAgent'       => DataType::TYPE_STRING,
            'webPaymentOperation'   => 'WebPaymentOperation',
            'currency'              => DataType::TYPE_STRING,
            'expiryDate'            => DataType::TYPE_STRING,
            'isPayByLink'           => DataType::TYPE_BOOLEAN,
            'isJudoAccept'          => DataType::TYPE_BOOLEAN,
            'successUrl'            => DataType::TYPE_STRING,
            'cancelUrl'             => DataType::TYPE_STRING,
            'emailAddress'          => DataType::TYPE_STRING,
            'mobileNumber'          => DataType::TYPE_STRING,
            'phoneCountryCode'      => DataType::TYPE_STRING,
            'hideBillingInfo'       => DataType::TYPE_BOOLEAN,
            'hideReviewInfo'        => DataType::TYPE_BOOLEAN,
            'allowIncrement'        => DataType::TYPE_BOOLEAN,
            'cardAddress'           => DataType::TYPE_ARRAY,
            // Inner objects
            'threeDSecure'          => DataType::TYPE_THREE_D_SECURE_TWO,
            'primaryAccountDetails' => DataType::TYPE_PRIMARY_ACCOUNT_DETAILS,
        );
    protected $requiredAttributes
        = array(
            'yourConsumerReference',
            'yourPaymentReference',
            'judoId',
            'amount',
        );
}
