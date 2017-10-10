# Quickfile Api Library #

This is a PHP 5.4+ library for version 1.2 of [Quickfile's API](https://api.quickfile.co.uk/).

### Useage Example ###

```php
use Quickfile\Api\Request;
use Quickfile\Api\Request\Client\Create as ClientCreate;
use Quickfile\Api\Model\Client;


$client = new Client();
$client->setCompany('Client Name');

$request = new Request();
$request->setAppId('xxx')
        ->setAccountNumber('123456789')
        ->setApiKey('AAA3321-12BH-A22');

$clientModel = new Client();
$clientCreate = new ClientCreate();
$clientCreate->setModel($client);
$request->setRequestType($clientCreate);
$request->execute();
```

### Contribution ###

We are actively looking for contributors to help complete this.

### Conventions ###

This is written with [PSR-4[(http://www.php-fig.org/psr/psr-4/) convention and will be subject to [Semantic Versioning](http://semver.org/)