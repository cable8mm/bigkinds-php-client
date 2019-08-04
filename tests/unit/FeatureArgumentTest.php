<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Cable8mm\BigkindsPhpClient\Argument\FeatureArgument;

class FeatureArgumentTest extends TestCase
{
    public function testMakeInstance()
    {
        $FeatureArgument = new FeatureArgument;
        $this->assertInstanceOf(FeatureArgument::class, $FeatureArgument);
    }
}
