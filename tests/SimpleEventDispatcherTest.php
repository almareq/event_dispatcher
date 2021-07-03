<?php

namespace Tests;

use App\SimpleEventDispatcher;
use PHPUnit\Framework\TestCase;
use Tests\ExampleStubs\SendShippingArrivedConfirmationMail;
use Tests\ExampleStubs\ShippingArrived;

class SimpleEventDispatcherTest extends TestCase
{

    /**
     * @test
     */
    public function it_triggers_event_subscribers()
    {
        $subscriber = new SendShippingArrivedConfirmationMail();

        $sut = new SimpleEventDispatcher([ShippingArrived::class => [$subscriber]]);

        $sut->dispatchAll([new ShippingArrived(true)]);

        $this->assertTrue($subscriber->event->arrivedWithDelay());
    }
}
