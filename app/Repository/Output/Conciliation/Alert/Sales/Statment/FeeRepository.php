<?php

namespace App\Repository\Output\Conciliation\Alert\Sales\Statment;

use App\Model\Output\Conciliation\Alert\Sales\Statment\Fee;

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