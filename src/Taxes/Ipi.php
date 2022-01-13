<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

class Ipi extends TwoRateTax
{
    protected function mustApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function applyMaximumTax(Budget $budget): float
    {
        return $budget->value * .03;
    }

    protected function applyMinimumTax(Budget $budget): float
    {
        return $budget->value * .02;
    }
}