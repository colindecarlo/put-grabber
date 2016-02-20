<?php

namespace App;

use Uhura\ResponseHandler\Json;
use Uhura\Uhura;

class Putio
{
    protected $api;
    protected $token;

    public function __construct($token = null)
    {
        $this->api = (new Uhura('https://api.put.io/v2'))
            ->useResponseHandler(new Json)
            ->sendHeader('Accept', 'application/json');

        $this->withToken($token);
    }

    public function withToken($token)
    {
        $this->token = $token;
    }

    public function files()
    {
        return $this->api->files->list->get(['oauth_token' => $this->token]);
    }
}
