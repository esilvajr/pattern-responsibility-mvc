<?php

namespace App\Pattern\Responsibility\Output;

class AlertOutput implements Output
{
    private $alert;

    public function __construct($alert)
    {
        $this->alert = $alert;
    }

    public function find($a, $b, $c)
    {
        return [
            'alert' => $this->alert->find($a, $b, $c)
        ];
    }
}