<?php
namespace Quickfile\Api;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    public function testDoRequest()
    {
        $sut = new Request();

        $this->assertTrue($sut->doRequest());
    }
}