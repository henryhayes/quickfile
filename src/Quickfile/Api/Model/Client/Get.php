<?php
namespace Quickfile\Api\Request\Client;

class Get
{
    private $clientId;

    public function __construct($clientId)
    {
        $this->clientId = $clientId;
    }

    public function toArray()
    {
        return [
            'ClientID' => $this->clientId,
        ];
    }
}