<?php

namespace App\MongoDB;

use MongoDB\Client;
use MongoDB\Database;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class MongoDBDatabase
{
    readonly private Request $request;

    public function __construct(readonly private RequestStack $requestStack)
    {
        $this->request = $this->requestStack->getCurrentRequest();
    }

    public function connect():Database
    {
        $serverEnv = $this->request->server;
        $mongodbURL = $serverEnv->get('MONGODB_URL');
        $databaseName = $serverEnv->get('MONGODB_NAME');

        $client = new Client($mongodbURL);

        return $client->selectDatabase($databaseName);
    }
}