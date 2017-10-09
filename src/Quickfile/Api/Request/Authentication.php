<?php
namespace Quickfile\Api\Request;

use Quickfile\Api\Request\UniqueId;

class Authentication
{
    /**
     * Contains the message type. Defaults to 'Request'.
     *
     * @var string
     */
    private $accountNumber;

    /**
     * Contains the api key.
     *
     * @var string
     */
    private $apiKey;

    /**
     * Contains the application Id.
     *
     * @var string
     */
    private $appId;

    /**
     * Contains the submission UniqueId object.
     *
     * @var UniqueId
     */
    private $submission;

    /**
     * Class constructor
     *
     * @return void
     */
    public function __construct($accountNumber, $apiKey, $appId, UniqueId $submission)
    {
        $this->accountNumber = $accountNumber;
        $this->apiKey = $apiKey;
        $this->appId = $appId;
        $this->submission = $submission;
    }

    /**
     * Gets the body array once built.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'AccNumber' => $this->accountNumber,
            'MD5Value' => $this->getMd5(),
            'ApplicationID' => $this->appId
        ];
    }

    /**
     * Get MD5 as Quickfile requires.
     *
     * @return string
     */
    public function getMd5()
    {
        return md5($this->accountNumber.$this->apiKey.$this->submission->get());
    }

    /**
     * Authentication to JSON.
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }
}