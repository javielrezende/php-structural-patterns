<?php

use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\BudgetList;

require_once 'vendor/autoload.php';

$budget1 = new Budget();
$budget1->quantityItens = 7;
$budget1->approve();
$budget1->value = 1500.75;

$budget2 = new Budget();
$budget2->quantityItens = 3;
$budget2->repprove();
$budget2->value = 150;

$budget3 = new Budget();
$budget3->quantityItens = 5;
$budget3->approve();
$budget3->complete();
$budget3->value = 1350;

$budgetList = new BudgetList();
$budgetList->addBudget($budget1);
$budgetList->addBudget($budget2);
$budgetList->addBudget($budget3);

echo PHP_EOL;
echo "--------------------------------------------------" . PHP_EOL;
echo "Valor dos orçamentos" . PHP_EOL;

foreach ($budgetList as $budget) {
    echo PHP_EOL;
    echo "Valor: {$budget->value}" . PHP_EOL;
    echo 'Estado: ' . get_class($budget->state) . PHP_EOL;
    echo "Quantidade: {$budget->quantityItens}" . PHP_EOL;
}

echo "--------------------------------------------------" . PHP_EOL;
echo PHP_EOL;