<?php

namespace PersonalProjects\DesignPattern;

use ArrayIterator;
use IteratorAggregate;
use PersonalProjects\DesignPattern\BudgetStates\BudgetState;
use PersonalProjects\DesignPattern\BudgetStates\InApproval;

class BudgetList implements IteratorAggregate
{
    /** @var Budget[] */
    public array $budgets;

    public function __construct()
    {
        $this->budgets = [];
    }

    public function addBudget(Budget $budget): void
    {
        $this->budgets[] = $budget;
    }

    public function getBudgets(): array
    {
        return $this->budgets;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->budgets);
    }
}