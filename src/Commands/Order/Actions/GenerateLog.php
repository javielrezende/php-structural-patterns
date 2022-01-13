<?php

namespace PersonalProjects\DesignPattern\Commands\Order\Actions;

class GenerateLog implements ActionAfterOrderGenerate
{
    public function execute()
    {
        echo "Writes log " . PHP_EOL;
    }
}