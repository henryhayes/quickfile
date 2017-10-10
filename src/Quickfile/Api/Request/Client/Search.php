<?php
namespace Quickfile\Api\Request\Client;

class Search extends SearchParameters
{
    /**
     * @var bool
     */
    private $showDetailed = false;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $accountReference;
}