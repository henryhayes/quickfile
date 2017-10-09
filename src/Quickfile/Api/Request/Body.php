<?php
namespace Quickfile\Api\Request;

class Body
{
    /**
     * Contains the body to be sent to the Quickfile Api
     *
     * @var array
     */
    private $body = [];

    /**
     * Class constructor
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build's the body based on the parameters passed.
     *
     * @return self
     */
    public function buildBody()
    {
        return $this;
    }

    /**
     * Gets the body array once built.
     *
     * @return array
     */
    public function getBody()
    {
        //
    }
}