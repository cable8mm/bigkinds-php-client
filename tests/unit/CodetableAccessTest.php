<?php

declare(strict_types=1);

use Cable8mm\BigkindsPhpClient\Codetable\CategoryCodetable;
use Cable8mm\BigkindsPhpClient\Codetable\CategoryIncidentCodetable;
use Cable8mm\BigkindsPhpClient\Codetable\CodetableAccess;
use Cable8mm\BigkindsPhpClient\Codetable\ContentCodetable;
use Cable8mm\BigkindsPhpClient\Codetable\ICodetable;
use PHPUnit\Framework\TestCase;

class CodetableAccessTest extends TestCase
{
    public function testCreateCodetableAccess()
    {
        $ContentCodetable = new ContentCodetable();
        $this->assertInstanceOf(ContentCodetable::class, $ContentCodetable);
        $CategoryCodetable = new CategoryCodetable();
        $this->assertInstanceOf(CategoryCodetable::class, $CategoryCodetable);
        $CategoryIncidentCodetable = new CategoryIncidentCodetable();
        $this->assertInstanceOf(CategoryIncidentCodetable::class, $CategoryIncidentCodetable);

        $CodetableAccess = new CodetableAccess(new ContentCodetable());
        $this->assertInstanceOf(CodetableAccess::class, $CodetableAccess);
    }

    public function testGetDataFromCodetable()
    {
        $CodetableAccess = new CodetableAccess(new ContentCodetable());
        $this->assertInstanceOf(ICodetable::class, $CodetableAccess->codetable);
        $this->assertIsArray($CodetableAccess->getAll());
    }
}
