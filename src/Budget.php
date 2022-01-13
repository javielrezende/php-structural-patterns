<?php

namespace PersonalProjects\DesignPattern;

use PersonalProjects\DesignPattern\BudgetStates\BudgetState;
use PersonalProjects\DesignPattern\BudgetStates\InApproval;

class Budget
{
    public float $value;
    public int $quantityItens;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new InApproval();
    }

    public function applyExtraDiscount(): void
    {
        $this->value -= $this->state->calculateExtraDiscount($this);
    }

    public function approve()
    {
        $this->state->approve($this);
    }

    public function repprove()
    {
        $this->state->repprove($this);
    }

    public function complete()
    {
        $this->state->complete($this);
    }
}