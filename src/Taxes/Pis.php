<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

class Pis extends TwoRateTax
{
    protected function mustApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->quantityItens > 3;
    }

    protected function applyMaximumTax(Budget $budget): float
    {
        return $budget->value * .04;
    }

    protected function applyMinimumTax(Budget $budget): float
    {
        return $budget->value * .025;
    }
}