<?php

namespace App\Repository\Output\Item\Sales\Statment;

use App\Model\Output\Item\Sales\Statment\Fee;

class FeeRepository
{
    public function find($a, $b, $c)
    {
        unset($a);
        unset($b);
        unset($c);
        return Fee::find();
    }
}