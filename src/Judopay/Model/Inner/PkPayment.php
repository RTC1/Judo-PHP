<?php

namespace Judopay\Model\Inner;

class PkPayment extends TransmittedField
{
    static protected $fieldName = 'pkPayment';
    protected $requiredAttributes
        = array(
            'token',
            'token.paymentMethod',
            'token.paymentData',
        );
}
