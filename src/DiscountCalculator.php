<?php

namespace PersonalProjects\DesignPattern;

use PersonalProjects\DesignPattern\discounts\MoreThanFiveHundredDiscount;
use PersonalProjects\DesignPattern\discounts\MoreThanFiveItensDiscount;
use PersonalProjects\DesignPattern\discounts\WithoutDiscount;

class DiscountCalculator
{
    // The Discounts must obey a rule. First, only the 
    // discount has to be applied when the budget has more than 5 items.
    // If you do not comply with this rule, you should try to give a
    // discount when the budget amount is greater than 500.
    // Otherwise, no discount will be made

    public function calculateDiscount(Budget $budget): float
    {
        $discountsChain = new MoreThanFiveItensDiscount(
            new MoreThanFiveHundredDiscount(
                new WithoutDiscount()
            )
        );

        return $discountsChain->calculateDiscount($budget);
    }
}