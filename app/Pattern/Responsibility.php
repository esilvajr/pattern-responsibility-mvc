<?php

namespace App\Pattern;

use App\Pattern\Responsibility\AlertResponsibility;
use App\Pattern\Responsibility\DataResponsibility;
use App\Pattern\Responsibility\GenericResponsibility;

class Responsibility
{

    public static function output($type, $data, $alert, $generic)
    {
        $data = new DataResponsibility($data);
        $alert = new AlertResponsibility($alert);
        $generic = new GenericResponsibility($generic);

        $data->successor(
            $alert->successor(
                $generic
            )
        );
        return $data->handler($type);
    }

}