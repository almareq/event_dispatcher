<?php

namespace Tests\ExampleStubs;

class SendShippingArrivedConfirmationMail
{

    public ShippingArrived $event;

    public function __invoke(ShippingArrived $event): void
    {
        $this->event = $event;
    }
}
