<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

interface Tax
{
    public function taxCalculate(Budget $budget): float;
}