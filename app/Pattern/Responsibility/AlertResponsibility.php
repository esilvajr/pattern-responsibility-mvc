<?php

namespace App\Pattern\Responsibility;

class AlertResponsibility
{
    private $successor;
    private $alert;

    public function __construct($alert)
    {
        $this->alert = $alert;
    }

    public function successor($successor)
    {
        $this->successor = $successor;
        return $this;
    }

    public function handler($type)
    {
        if ($type == 2) {
            return $this->alert;
        }
        return $this->successor->handler($type);
    }

}