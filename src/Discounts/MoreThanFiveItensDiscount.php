<?php

namespace PersonalProjects\DesignPattern\Discounts;

use PersonalProjects\DesignPattern\Budget;

class MoreThanFiveItensDiscount extends Discount
{
    // If the quantity of items in the budget is greater
    // than 5, it will give a 10 % discount
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->quantityItens > 5) {
            return $budget->value * .1;
        }

        return $this->nextDiscount->calculateDiscount($budget);
    }
}