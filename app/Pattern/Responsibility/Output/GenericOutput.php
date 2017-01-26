<?php

namespace App\Pattern\Responsibility\Output;

class GenericOutput implements Output
{

    private $data;
    private $alert;

    public function __construct($data, $alert)
    {
        $this->data = $data;
        $this->alert = $alert;
    }

    public function find($a, $b, $c)
    {
        return [
            'data' => $this->data->find($a, $b, $c),
            'alert' => $this->alert->find($a, $b, $c)
        ];
    }
}