<?php

declare(strict_types=1);

use Cable8mm\BigkindsPhpClient\Big;
use Cable8mm\BigkindsPhpClient\BigkindsClient;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    protected $bigkindsClient;

    protected function setUp(): void
    {
        $this->bigkindsClient = new BigkindsClient();
    }

    public function testKeywordResponse()
    {
        $faker = Factory::create();
        $result = $this->bigkindsClient->request('keyword', [
            'title' => $faker->title,
            'sub_title' => $faker->title,
            'content' => $faker->text(100),
        ]);
        $this->assertIsArray($result);
    }

    public function testInterfacesSmall()
    {
        $faker = Factory::create();
        $inputs = [
            'title' => $faker->title,
            'sub_title' => $faker->title,
            'content' => $faker->text,
        ];
        $result = Big::kinds('keyword', $inputs);
        $this->assertIsArray($result);

        $result = Big::kinds('feature', $inputs);
        $this->assertIsArray($result);
    }

    public function testInterfaceMiddle()
    {
        // $result = Big::kinds('today_category_keyword');
        // var_dump($result);
        // $this->assertIsArray($result);

        $result = $this->bigkindsClient->request('today_category_keyword');
        $this->assertIsArray($result);
    }

    public function testSearchInterface()
    {
        $bigkinds = $this->bigkindsClient->request('search quotation');
        $this->assertEquals($bigkinds['result'], 0);
    }

    public function testSearchNews()
    {
        $bigkinds = $this->bigkindsClient->request('search news');
        print_r($bigkinds);
        $this->assertEquals($bigkinds['result'], 0);
    }

    public function testNews()
    {
        $bigkinds = $this->bigkindsClient->request('news');
        $this->assertEquals($bigkinds['result'], 0);
    }

    public function testIssueRanking()
    {
        $bigkinds = $this->bigkindsClient->request('issue ranking');
        $this->assertEquals($bigkinds['result'], 0);
    }

    public function testWordCloud()
    {
        $bigkinds = $this->bigkindsClient->request('word cloud');
        $this->assertEquals($bigkinds['result'], 0);
    }

    public function testTimeLine()
    {
        $bigkinds = $this->bigkindsClient->request('timeline');
        $this->assertEquals($bigkinds['result'], 0);
    }

    public function testQueryRank()
    {
        $bigkinds = $this->bigkindsClient->request('query rank');
        $this->assertEquals($bigkinds['result'], 0);
    }
}
