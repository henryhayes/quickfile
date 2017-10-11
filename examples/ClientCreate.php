<?php
require_once "../vendor/autoload.php";

use Quickfile\Api\Request;
use Quickfile\Api\Request\Client\Create as ClientCreate;
use Quickfile\Api\Model\Client;

$client = new Client();
$client->setCompany('Client Name');

$clientCreate = new ClientCreate();
$clientCreate->setModel($client);

$request = new Request($clientCreate);
$request->setAppId('xxx')
    ->setAccountNumber('123456789')
    ->setApiKey('AAA3321-12BH-A22');
$request->execute();