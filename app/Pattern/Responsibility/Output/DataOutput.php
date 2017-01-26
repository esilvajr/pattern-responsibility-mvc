<?php

namespace App\Pattern\Responsibility\Output;

class DataOutput implements Output
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function find($a, $b, $c)
    {
        return [
            'data' => $this->data->find($a, $b, $c)
        ];
    }
}