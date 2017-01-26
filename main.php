<?php

require_once ('vendor/autoload.php');

$feeController = new \App\Controller\Output\Item\Sales\Statment\FeeController();
print_r($feeController->index(1));
print_r($feeController->index(2));
print_r($feeController->index(3));
//print_r($feeController->show());