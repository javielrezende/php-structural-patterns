<?php

use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\BudgetRegister;
use PersonalProjects\DesignPattern\Http\CurlHttp;

require "vendor/autoload.php";

$budgetRegister = new BudgetRegister(new CurlHttp());
$budgetRegister->register(new Budget());