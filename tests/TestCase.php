<?php

namespace Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    
    public static function getMockedClient($jsonFile)
    {
        $mock = new MockHandler([
            new Response(200, ['X-Foo' => 'Bar'], file_get_contents(__DIR__ . "/fixtures/".$jsonFile)),
            new RequestException("Error Communicating with Server", new Request('GET', 'http://example.com'))
        ]);
        
        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);
        
        return $client;
    }
}
