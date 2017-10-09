<?php
namespace Quickfile\Api;

use Quickfile\Api\Request\Authentication;
use Quickfile\Api\Request\Header;
use Quickfile\Api\Request\UniqueId;

class Request
{
    const ENDPOINT          = 'https://api.quickfile.co.uk/1_2';

    private $appId          = 'a8915011-e592-458a-9080-c37abed7f013';
    private $accountNumber  = '6131471985';
    private $apiKey         = '96577D5E-CC10-49D1-9';

    /**
     * UniqueId Object
     *
     * @var UniqueId
     */
    private $submission     = null;

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
}