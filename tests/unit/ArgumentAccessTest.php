<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Faker\Factory;
use Cable8mm\BigkindsPhpClient\Argument\ArgumentAccess;
use Cable8mm\BigkindsPhpClient\Argument\FeatureArgument;
use Cable8mm\BigkindsPhpClient\Argument\TodayCategoryKeywordArgument;
use Cable8mm\BigkindsPhpClient\Argument\QueryRankArgument;
use Cable8mm\BigkindsPhpClient\Argument\IssueRankingArgument;
use Cable8mm\BigkindsPhpClient\Argument\NewsArgument;
use Cable8mm\BigkindsPhpClient\Argument\SearchNewsArgument;
use Cable8mm\BigkindsPhpClient\Argument\TimelineArgument;
use Cable8mm\BigkindsPhpClient\Argument\WordCloudArgument;

class ArgumentAccessTest extends TestCase
{
    public function testSetSomeArgument()
    {
        $faker = Factory::create();
        $argumentAccess1 = new ArgumentAccess(new FeatureArgument([
            'title' => $faker->title,
            'sub_title' => $faker->title,
            'content' => $faker->text
        ]));
        $this->assertInstanceOf(FeatureArgument::class, $argumentAccess1->argument);

        $argumentAccess2 = new ArgumentAccess(new TodayCategoryKeywordArgument());
        $this->assertInstanceOf(TodayCategoryKeywordArgument::class, $argumentAccess2->argument);

        $argumentAccess4 = new ArgumentAccess(new IssueRankingArgument());
        $this->assertInstanceOf(IssueRankingArgument::class, $argumentAccess4->argument);

        $argumentAccess5 = new ArgumentAccess(new NewsArgument());
        $this->assertInstanceOf(NewsArgument::class, $argumentAccess5->argument);

        $argumentAccess3 = new ArgumentAccess(new QueryRankArgument());
        $this->assertInstanceOf(QueryRankArgument::class, $argumentAccess3->argument);

        $argumentAccess6 = new ArgumentAccess(new SearchNewsArgument());
        $this->assertInstanceOf(SearchNewsArgument::class, $argumentAccess6->argument);

        $argumentAccess7 = new ArgumentAccess(new TimelineArgument());
        $this->assertInstanceOf(TimelineArgument::class, $argumentAccess7->argument);

        $argumentAccess8 = new ArgumentAccess(new WordCloudArgument());
        $this->assertInstanceOf(WordCloudArgument::class, $argumentAccess8->argument);
    }
}
