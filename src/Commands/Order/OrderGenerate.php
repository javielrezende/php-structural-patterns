<?php

namespace PersonalProjects\DesignPattern\Commands\Order;

class OrderGenerate
{
    private int $budgetQuantityItens;
    private float $budgetValue;
    private string $clientName;

    public function __construct(
        int $budgetQuantityItens,
        float $budgetValue,
        string $clientName
        )
    {
        $this->budgetQuantityItens = $budgetQuantityItens;
        $this->budgetValue = $budgetValue;
        $this->clientName = $clientName;
    }

    public function getBudgetQuantityItens() : int
    {
        return $this->budgetQuantityItens;
    }
    
    public function getBudgetValue() : float
    {
        return $this->budgetValue;
    }
    
    public function getClientName() : string
    {
        return $this->clientName;
    }
}