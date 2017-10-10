<?php
namespace Quickfile\Api;

use Quickfile\Api\Request\Authentication;
use Quickfile\Api\Request\Header;
use Quickfile\Api\Request\UniqueId;

class Request
{
    const ENDPOINT          = 'https://api.quickfile.co.uk/1_2';

    /**
     * @var string
     */
    private $appId;

    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * UniqueId Object
     *
     * @var UniqueId
     */
    private $submission     = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        //
    }

    public function doRequest()
    {
        //die(json_encode($this->getHeader()->toArray()));
        return true;
    }

    /**
     * Gets the request header. Each time this is called, it's regenerated.
     *
     * @return Header
     */
    public function getHeader()
    {
        $authentication = new Authentication($this->accountNumber, $this->apiKey, $this->appId, $this->getSubmission());
        return new Header($authentication, $this->getSubmission());
    }

    /**
     * Gets the instance of the UniqueId object for this request.
     *
     * @return UniqueId
     */
    public function getSubmission()
    {
        if (!$this->submission) {
            $this->submission = new UniqueId();
        }

        return $this->submission;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}