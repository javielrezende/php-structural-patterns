<?php

namespace PersonalProjects\DesignPattern\BudgetStates;

use DomainException;
use PersonalProjects\DesignPattern\Budget;

class Failed extends BudgetState
{
    public function calculateExtraDiscount (Budget $budget): float
    {
        throw new DomainException(
            "A failed budget cannot receive discount"
        );
    }

    public function complete(Budget $budget)
    {
        $budget->state = new Completed();
    }
}