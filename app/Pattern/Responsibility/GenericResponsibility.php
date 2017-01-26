<?php

namespace App\Pattern\Responsibility;

class GenericResponsibility
{
    private $successor;
    private $generic;

    public function __construct($generic)
    {
        $this->generic = $generic;
    }


    public function successor($successor)
    {
        $this->successor = $successor;
        return $this;
    }

    public function handler($type)
    {
        unset($type);
        return $this->generic;
    }
}