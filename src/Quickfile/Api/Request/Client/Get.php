<?php
namespace Quickfile\Api\Request\Client;

use Quickfile\Api\Request\RequestInterface;

class Get implements RequestInterface
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