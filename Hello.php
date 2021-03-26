<?php

namespace Dlegatt\HelloWorld;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class Hello
{
    private $defaultName;
    /**
     * @var HttpClientInterface
     */
    private $client;

    public function __construct($defaultName, HttpClientInterface $client)
    {
        $this->defaultName = $defaultName;
        $this->client = $client;
    }

    public function getGreeting(Greetable $person = null)
    {
        $this->client->request('GET', '/foo')->getContent();
        $name = (string) ($person ?? $this->defaultName);
        return "Hello, $name!";
    }
}
