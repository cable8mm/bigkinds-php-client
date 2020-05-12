<?php

declare(strict_types=1);

use Cable8mm\BigkindsPhpClient\Argument\FeatureArgument;
use PHPUnit\Framework\TestCase;

class FeatureArgumentTest extends TestCase
{
    public function testMakeInstance()
    {
        $FeatureArgument = new FeatureArgument();
        $this->assertInstanceOf(FeatureArgument::class, $FeatureArgument);
    }
}
