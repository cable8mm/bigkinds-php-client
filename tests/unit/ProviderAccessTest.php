<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Cable8mm\BigkindsPhpClient\ContentProvider;
use Cable8mm\BigkindsPhpClient\CategoryProvider;
use Cable8mm\BigkindsPhpClient\CategoryIncidentProvider;
use Cable8mm\BigkindsPhpClient\ProviderAccess;
use Cable8mm\BigkindsPhpClient\IProvider;

class ProviderAccessTest extends TestCase
{
    public function testCreateProviderAccess()
    {
        $ContentProvider = new ContentProvider();
        $this->assertInstanceOf(ContentProvider::class, $ContentProvider);
        $CategoryProvider = new CategoryProvider();
        $this->assertInstanceOf(CategoryProvider::class, $CategoryProvider);
        $CategoryIncidentProvider = new CategoryIncidentProvider();
        $this->assertInstanceOf(CategoryIncidentProvider::class, $CategoryIncidentProvider);

        $ProviderAccess = new ProviderAccess(new ContentProvider());
        $this->assertInstanceOf(ProviderAccess::class, $ProviderAccess);
    }

    public function testGetDataFromProvider()
    {
        $ProviderAccess = new ProviderAccess(new ContentProvider);
        $this->assertInstanceOf(IProvider::class, $ProviderAccess->provider);
        $this->assertIsArray($ProviderAccess->getAll());
    }
}
