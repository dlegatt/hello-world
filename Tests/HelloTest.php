<?php

namespace Dlegatt\HelloWorld\Tests;

use Dlegatt\HelloWorld\Hello;
use Dlegatt\HelloWorld\Person;
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testGetGreeting()
    {
        $person = new Person("David");
        $hello = new Hello("World");

        $this->assertEquals("Hello, David!", $hello->getGreeting($person));
        $this->assertEquals("Hello, World!", $hello->getGreeting());
    }
}
