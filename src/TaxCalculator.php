<?php

namespace PersonalProjects\DesignPattern;

use PersonalProjects\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->taxCalculate($budget);
    }
}