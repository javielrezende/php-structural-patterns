<?php

namespace PersonalProjects\DesignPattern\Commands\Order;

use DateTimeImmutable;
use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\Commands\Order\Actions\ActionAfterOrderGenerate;
use PersonalProjects\DesignPattern\Order;

class OrderGenerateHandler
{
    /** @var ActionAfterOrderGenerate[] */
    private array $afterOrderGenerate = [];

    public function __construct(
        // OrderRepository
        // MailService
        // LogWriter
        )
    {
        //
    }

    public function addActionAfterOrderGenerate(ActionAfterOrderGenerate $action)
    {
        $this->afterOrderGenerate[] = $action;
    }

    public function execute(OrderGenerate $orderGenerate)
    {
        $budget = new Budget();
        $budget->quantityItens = $orderGenerate->getBudgetQuantityItens();
        $budget->value = $orderGenerate->getBudgetValue();

        $order = new Order();
        $order->completedDate = new DateTimeImmutable();
        $order->clientName = $orderGenerate->getClientName();
        $order->budget = $budget;

        foreach ($this->afterOrderGenerate as $action) {
            $action->execute();
        }
    }
}