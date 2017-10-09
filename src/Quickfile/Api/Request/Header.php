<?php
namespace Quickfile\Api\Request;

use Quickfile\Api\Request\Authentication;
use Quickfile\Api\Request\UniqueId;

class Header
{
    /**
     * Contains the message type. Defaults to 'Request'.
     *
     * @var string
     */
    private $messageType = 'Request';

    /**
     * Contains the submission number object. This must be 100% unique
     * for every request, so no caching this parameter.
     *
     * @var UniqueId
     */
    private $submission;

    /**
     * Contains the submission number. This must be 100% unique
     * for every request, so no caching this parameter.
     *
     * @var Authentication
     */
    private $authentication;

    /**
     * Class constructor
     *
     * @var Authentication $authentication
     * @var UniqueId $submissionNumber
     */
    public function __construct(Authentication $authentication, UniqueId $submission)
    {
        $this->authentication = $authentication;
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
            'MessageType' => $this->messageType,
            'SubmissionNumber' => $this->submission->get(),
            'Authentication' => $this->authentication->toArray()
        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}