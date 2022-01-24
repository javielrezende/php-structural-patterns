<?php

namespace PersonalProjects\DesignPattern\Report;

use PersonalProjects\DesignPattern\Order;

class ExportedOrder implements ExportedContent
{
    private Order $order;

    public function __construct(Order $order)
    {
        $this->order = $order;    
    }

    public function content(): array
    {
        return [
            'date' => $this->order->date->format('d/m/Y'),
            'client_name' => $this->order->clientName
        ];
    }
}