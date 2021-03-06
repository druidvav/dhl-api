<?php

namespace Mtc\Dhl\Datatype\AM;

use Mtc\Dhl\Datatype\Base;

/**
 * ChargeCard Request model for DHL API
 */
class ChargeCard extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    /**
     * Parameters of the datatype
     * @var array
     */
    protected $params = [
        'ChargeCardNo' => [
            'type' => 'ChargeCardNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card number',
            'minInclusive' => '1000000000000',
            'maxInclusive' => '9999999999999999',
            'pattern' => '\d{13,16}',
        ],
        'ChargeCardType' => [
            'type' => 'ChargeCardType',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card issuer type',
            'length' => '2',
            'enumeration' => 'AM,DC,DI,MC,VI',
        ],
        'ChargeCardConfNo' => [
            'type' => 'ChargeCardConfNo',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card approval number',
            'pattern' => '\d{0,6}',
        ],
        'ChargeCardExpiryDate' => [
            'type' => 'ChargeCardExpDateValidator',
            'required' => false,
            'subobject' => false,
            'comment' => 'Charge card expiration date',
            'pattern' => '(0[1-9]|1[0-2])\d{1}[0-9]',
        ],
    ];
}
