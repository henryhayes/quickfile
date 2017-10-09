<?php
namespace Quickfile\Api\Request;

class AuthenticationTest extends \PHPUnit_Framework_TestCase
{
    public function testAuthentication()
    {
        $submission = $this->getMock('\Quickfile\Api\Request\UniqueId', ['get']);
        $submission->expects($this->exactly(3))
            ->method('get')
            ->willReturn('00001');

        // These should be separate tests.
        $authentication = new Authentication(
            '123456789',
            'AAA3321-12BH-A22',
            '00002',
            $submission
        );
        // Test MD5
        $this->assertEquals(
            '507c9d79c192da6e86428919ee0382dc',
            $authentication->getMd5()
        );
        // Test Authentication array
        $this->assertSame(
            [
                'AccNumber' => '123456789',
                'MD5Value' => '507c9d79c192da6e86428919ee0382dc',
                'ApplicationID' => '00002'
            ],
            $authentication->toArray()
        );
        // Test Authentication JSON
        $this->assertEquals(
            json_encode([
                'AccNumber' => '123456789',
                'MD5Value' => '507c9d79c192da6e86428919ee0382dc',
                'ApplicationID' => '00002'
            ]),
            $authentication->toJson()
        );

    }
}