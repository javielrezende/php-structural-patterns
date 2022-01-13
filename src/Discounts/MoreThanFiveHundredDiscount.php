<?php

namespace PersonalProjects\DesignPattern\Discounts;

use PersonalProjects\DesignPattern\Budget;

class MoreThanFiveHundredDiscount extends Discount
{
    // If the budget value is greater
    // than 500
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 500) {
            return $budget->value * .05;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}