<?php

namespace Cable8mm\BigkindsPhpClient\Tests\Unit;

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
