<?php

namespace PersonalProjects\DesignPattern\BudgetStates;

use PersonalProjects\DesignPattern\Budget;

class Approved extends BudgetState
{
    public function calculateExtraDiscount (Budget $budget): float
    {
        return $budget->value * .02;
    }

    public function complete(Budget $budget)
    {
        $budget->state = new Completed();
    }
}