<?php

namespace PersonalProjects\DesignPattern\Discounts;

use PersonalProjects\DesignPattern\Budget;

class WithoutDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}