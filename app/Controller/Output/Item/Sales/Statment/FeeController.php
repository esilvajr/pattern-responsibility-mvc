<?php

namespace App\Controller\Output\Item\Sales\Statment;

use App\Pattern\Responsibility;


class FeeController
{
    public function index($type = 1)
    {
        $output = Responsibility::output(
            $type,
            new Responsibility\Output\DataOutput(new \App\Repository\Output\Item\Sales\Statment\FeeRepository),
            new Responsibility\Output\AlertOutput(new \App\Repository\Output\Conciliation\Alert\Sales\Statment\FeeRepository),
            new Responsibility\Output\GenericOutput(
                new \App\Repository\Output\Item\Sales\Statment\FeeRepository,
                new \App\Repository\Output\Conciliation\Alert\Sales\Statment\FeeRepository
            )
        );
        return $output->find(1, 2, 3);
    }

//    public function show($type = 1)
//    {
//        $output = Responsibility::output(
//            $type,
//            new DataOutput(new Nobody),
//            new AlertOutput(new Stmt),
//            new GenericOutput(new Nobody, new Stmt())
//        );
//        return $output->find(1, 2, 3);
//    }
}