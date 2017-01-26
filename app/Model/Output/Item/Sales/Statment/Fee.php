<?php

namespace App\Model\Output\Item\Sales\Statment;

class Fee
{
    public static function find()
    {
        return [
            'payment_method' => 1,
            'client_id' => 10,
            'fee' => 9.99
        ];
    }
}