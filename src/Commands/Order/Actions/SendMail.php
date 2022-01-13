<?php

namespace PersonalProjects\DesignPattern\Commands\Order\Actions;

class SendMail implements ActionAfterOrderGenerate
{
    public function execute()
    {
        echo "Send e-mail " . PHP_EOL;
    }
}