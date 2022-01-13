<?php

namespace PersonalProjects\DesignPattern\BudgetStates;

use DomainException;
use PersonalProjects\DesignPattern\Budget;

abstract class BudgetState
{
    /**
     * @throws DomainException
     */
    abstract public function calculateExtraDiscount (Budget $budget): float;

    public function approve(Budget $budget)
    {
        throw new DomainException(
            "This budget can not be approved"
        );
    }

    public function repprove(Budget $budget)
    {
        throw new DomainException(
            "This budget can not be repproved"
        );
    }

    public function complete(Budget $budget)
    {
        throw new DomainException(
            "This budget can not be completed"
        );
    }
}