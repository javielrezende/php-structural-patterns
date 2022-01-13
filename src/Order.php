<?php

namespace PersonalProjects\DesignPattern;

use DateTimeInterface;

class Order
{
    public string $clientName;
    public DateTimeInterface $completedDate;
    public Budget $budget;
}