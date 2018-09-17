<?php

namespace Dlegatt\HelloWorld;

class Person implements Greetable
{
    /** @var string */
    private $name;

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function toString(): string
    {
        return $this->__toString();
    }

    public function __toString()
    {
        return $this->name;
    }
}