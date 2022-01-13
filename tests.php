<?php

use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\DiscountCalculator;
use PersonalProjects\DesignPattern\TaxCalculator;
use PersonalProjects\DesignPattern\Taxes\Icms;
use PersonalProjects\DesignPattern\Taxes\Iss;

require "vendor/autoload.php";

// ----------- Strategy Test -----------
// $calculator = new TaxCalculator();

// $budget = new Budget();
// $budget->value = 100;

// echo $calculator->calculate($budget, new Icms()) . PHP_EOL;

// echo $calculator->calculate($budget, new Iss()) . PHP_EOL;

// ----------- Chain of resposibility Test -----------
$calculator = new DiscountCalculator();

$budget = new Budget();
$budget->value = 100;
$budget->quantityItens = 7;

echo "Test - Should return 10" . PHP_EOL;
echo $calculator->calculateDiscount($budget) . PHP_EOL;

$budget->quantityItens = 5;

echo "Test - Should return 0" . PHP_EOL;
echo $calculator->calculateDiscount($budget) . PHP_EOL;

$budget->value = 600;

echo "Test - Should return 30" . PHP_EOL;
echo $calculator->calculateDiscount($budget) . PHP_EOL;

$budget->value = 600;
$budget->quantityItens = 7;

echo "Test - Should return 60" . PHP_EOL;
echo $calculator->calculateDiscount($budget) . PHP_EOL;