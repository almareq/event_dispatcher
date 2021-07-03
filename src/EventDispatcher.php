<?php

namespace App;

interface EventDispatcher
{
    public function dispatchAll(array $events): void;
}
