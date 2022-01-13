<?php

require_once 'vendor/autoload.php';

use PersonalProjects\DesignPattern\Commands\Order\Actions\CreateOrderDatabase;
use PersonalProjects\DesignPattern\Commands\Order\Actions\GenerateLog;
use PersonalProjects\DesignPattern\Commands\Order\Actions\SendMail;
use PersonalProjects\DesignPattern\Commands\Order\OrderGenerate;
use PersonalProjects\DesignPattern\Commands\Order\OrderGenerateHandler;

$budgetQuantityItens = $argv[1];
$budgetValue = $argv[2];
$clientName = $argv[3];

$orderGenerate = new OrderGenerate(
    $budgetQuantityItens,
    $budgetValue,
    $clientName
);

$orderGeneratehandler = new OrderGenerateHandler();
$orderGeneratehandler->addActionAfterOrderGenerate(new CreateOrderDatabase());
$orderGeneratehandler->addActionAfterOrderGenerate(new SendMail());
$orderGeneratehandler->addActionAfterOrderGenerate(new GenerateLog());
$orderGeneratehandler->execute($orderGenerate);