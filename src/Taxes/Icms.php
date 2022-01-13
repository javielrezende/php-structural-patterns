<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

class Icms implements Tax
{
    public function taxCalculate(Budget $budget): float
    {
        return $budget->value * .1;
    }
}