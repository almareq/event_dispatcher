<?php

namespace Tests\ExampleStubs;

class ShippingArrived
{

    private bool $arrivedWithDelay;

    private function __construct(bool $arrivedWithDelay)
    {
        $this->arrivedWithDelay = $arrivedWithDelay;
    }

    public static function onTime(): self
    {
        return new self(false);
    }

    public static function withDelay(): self
    {
        return new self(true);
    }

    public function arrivedWithDelay(): bool
    {
        return $this->arrivedWithDelay;
    }
}
