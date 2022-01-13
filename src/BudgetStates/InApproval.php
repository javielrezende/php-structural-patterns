<?php

namespace PersonalProjects\DesignPattern\BudgetStates;

use PersonalProjects\DesignPattern\Budget;

class InApproval extends BudgetState
{
    public function calculateExtraDiscount (Budget $budget): float
    {
        return $budget->value * .05;
    }

    public function approve(Budget $budget)
    {
        $budget->state = new Approved();
    }

    public function repprove(Budget $budget)
    {
        $budget->state = new Failed();
    }
}