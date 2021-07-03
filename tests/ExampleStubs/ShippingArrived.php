<?php

namespace Tests\ExampleStubs;

class ShippingArrived
{

    private bool $arrivedWithDelay;

    public function __construct(bool $arrivedWithDelay)
    {
        $this->arrivedWithDelay = $arrivedWithDelay;
    }

    public function arrivedWithDelay(): bool
    {
        return $this->arrivedWithDelay;
    }
}
