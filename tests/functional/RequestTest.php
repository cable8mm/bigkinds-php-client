<?php

declare(strict_types=1);

use Cable8mm\BigkindsPhpClient\BigkindsClient;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    protected $bigkindsClient;

    protected function setUp(): void
    {
        $this->bigkindsClient = new BigkindsClient();
    }

    public function testSampleRequest()
    {
        $this->assertEquals($this->bigkindsClient->getLibraryVersion(), '0.1.0');
    }
}
