<?php

namespace App\Pattern\Responsibility;

class DataResponsibility
{
    private $successor;
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function successor($successor)
    {
        $this->successor = $successor;
        return $this;
    }

    public function handler($type)
    {
        if ($type == 1) {
            return $this->data;
        }
        return $this->successor->handler($type);
    }
}