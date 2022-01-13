<?php

namespace PersonalProjects\DesignPattern\BudgetStates;

use DomainException;
use PersonalProjects\DesignPattern\Budget;

class Completed extends BudgetState
{
    public function calculateExtraDiscount (Budget $budget): float
    {
        throw new DomainException(
            "A completed budget cannot receive discount"
        );
    }
}