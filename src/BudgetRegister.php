<?php

namespace PersonalProjects\DesignPattern;

use DomainException;
use PersonalProjects\DesignPattern\BudgetStates\Completed;
use PersonalProjects\DesignPattern\Http\HttpAdapter;

class BudgetRegister
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function register(Budget $budget): void
    {
        if ($budget->state instanceof Completed) {
            throw new DomainException('Only finished budgets can be registered in the API.');
        }

        $this->http->post('http://api.budget.register.com', [
            'value' => $budget->value,
            'quantityItems' => $budget->quantityItens
        ]);
    }
}