<?php

namespace PersonalProjects\DesignPattern\Commands\Order\Actions;

class CreateOrderDatabase implements ActionAfterOrderGenerate
{
    public function execute()
    {
        echo "Create order in database " . PHP_EOL;
    }
}