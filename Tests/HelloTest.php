<?php

namespace Dlegatt\HelloWorld\Tests;

use Dlegatt\HelloWorld\Hello;
use Dlegatt\HelloWorld\Person;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\HttpClient;

class HelloTest extends TestCase
{
    public function testGetGreeting()
    {
        $person = new Person("David");
        $client = HttpClient::createForBaseUri("https://localhost:8000");
        $hello = new Hello("World", HttpClient::createForBaseUri("https://localhost:8000", ['verify_host' => false, 'verify_peer' => false]));

        $this->assertEquals("Hello, David!", $hello->getGreeting($person));
        $this->assertEquals("Hello, World!", $hello->getGreeting());
    }
}
