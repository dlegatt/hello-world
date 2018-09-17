<?php

namespace Dlegatt\HelloWorld;

class Hello
{
    private $defaultName;

    public function __construct($defaultName)
    {
        $this->defaultName = $defaultName;
    }

    public function getGreeting(Greetable $person = null)
    {
        $name = (string) ($person ?? $this->defaultName);
        return "Hello, $name!";
    }
}
