<?php
namespace Quickfile\Api\Request;

class HeaderTest extends \PHPUnit_Framework_TestCase
{
    public function testHeader()
    {
        $auth = $this->getMock(
            '\Quickfile\Api\Request\Authentication',
            ['toArray'], array(), '', false
        );
        $auth->expects($this->exactly(2))
            ->method('toArray')
            ->willReturn(['a'=>'b', 'b'=>'c']);

        $submission = $this->getMock('\Quickfile\Api\Request\UniqueId', ['get']);
        $submission->expects($this->exactly(2))
            ->method('get')
            ->willReturn('generated-submission-number');

        $header = new Header($auth, $submission);

        $this->assertEquals(
            [
                'MessageType' => 'Request', // Always request
                'SubmissionNumber' => 'generated-submission-number',
                'Authentication' => ['a'=>'b', 'b'=>'c']
            ],
            $header->toArray()
        );

        // Test JSON
        $this->assertEquals(
            json_encode([
                'MessageType' => 'Request', // Always request
                'SubmissionNumber' => 'generated-submission-number',
                'Authentication' => ['a'=>'b', 'b'=>'c']
            ]),
            $header->toJson()
        );
    }
}