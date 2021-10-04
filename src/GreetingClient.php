<?php

namespace Siarhei\Phpgrpcclient;

use Com\Example\Grpc\GreetingServiceClient;
use Com\Example\Grpc\HelloRequest;
use Com\Example\Grpc\HelloResponse;
use Grpc\ChannelCredentials;

class GreetingClient
{
    private GreetingServiceClient $client;

    public function __construct()
    {
        $this->client = new GreetingServiceClient('localhost:8081', [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
    }

    public function greeting(): void
    {
        $request = new HelloRequest();
        $request->setName('John');
        /** @var HelloResponse $reply */
        list ($reply) = $this->client->greeting($request)->wait();

        var_dump($reply->getGreeting());
    }

    public function greetings(): void
    {
        $request = new HelloRequest();
        $request->setName('John');
        $responses = $this->client->greetings($request)->responses();

        /** @var HelloResponse $reply */
        foreach ($responses as $reply) {
            var_dump($reply->getGreeting());
        }
    }
}
