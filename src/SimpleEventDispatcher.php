<?php

namespace App;

final class SimpleEventDispatcher implements EventDispatcher
{
    private array $subscribers;

    public function __construct(array $subscribersByEventType)
    {
        $this->subscribers = $subscribersByEventType;
    }

    public function dispatchAll(array $events): void
    {
        foreach ($events as $event) {
            foreach ($this->subscribersForEvent($event) as $subscriber) {
                $subscriber($event);
            }
        }
    }

    private function subscribersForEvent(object $event): array
    {
        return $this->subscribers[get_class($event)] ?? [];
    }
}
