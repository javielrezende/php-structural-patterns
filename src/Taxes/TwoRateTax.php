<?php

namespace PersonalProjects\DesignPattern\Taxes;

use PersonalProjects\DesignPattern\Budget;

abstract class TwoRateTax implements Tax
{
    public function taxCalculate(Budget $budget): float
    {
        if ($this->mustApplyMaximumTax($budget)) {
            return $this->applyMaximumTax($budget);
        }

        return $this->applyMinimumTax($budget);
    }

    abstract protected function mustApplyMaximumTax(Budget $budget): bool;
    abstract protected function applyMaximumTax(Budget $budget): float;
    abstract protected function applyMinimumTax(Budget $budget): float;
}