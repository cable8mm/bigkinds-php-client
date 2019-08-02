<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Cable8mm\BigkindsPhpClient\Argument;

class ArgumentTest extends TestCase
{
    public function testMakeArgumentInstance()
    {
        $this->assertInstanceOf(Argument::class, new Argument());
    }

    public function testMakeQuery()
    {
        $keyword = 'Good Morning';
        $Argument = new Argument();
        $container = $Argument->query($keyword)->toArray();
        $this->assertIsArray($container);
        $this->assertArrayHasKey('published_at', $container);
        $this->assertArrayHasKey('category', $container);
        $this->assertArrayHasKey('provider', $container);
        $this->assertArrayHasKey('fields', $container);
    }

    public function testByQuery()
    {
        $keyword = 'test query';

        $Argument = new Argument();

        $container = $Argument->query($keyword)->toArray();
        $this->assertEquals($keyword, $container['query']);

        $container = $Argument->queryByTitle($keyword)->toArray();
        $this->assertEquals($keyword, $container['query']['title']);

        $container = $Argument->queryByContent($keyword)->toArray();
        $this->assertEquals($keyword, $container['query']['content']);
    }

    public function testArrayQuery()
    {
        $keywords = ['title' => 'title query', 'content' => 'content query'];

        $Argument = new Argument();

        $container = $Argument->query($keywords)->toArray();

        $this->assertEquals($keywords['title'], $container['query']['title']);
        $this->assertEquals($keywords['content'], $container['query']['content']);
    }

    public function testChaining()
    {
        $argument = new Argument();
        $query = $argument->query('서비스 AND 출시')->toArray();
        $this->assertIsArray($query);
    }
}
