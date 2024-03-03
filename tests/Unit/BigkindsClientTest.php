<?php

namespace Cable8mm\BigkindsPhpClient\Tests\Unit;

use Cable8mm\BigkindsPhpClient\BigkindsClient;
use PHPUnit\Framework\TestCase;

class BigkindsClientTest extends TestCase
{
    protected $bigkindsClient;

    protected function setUp(): void
    {
        $this->bigkindsClient = new BigkindsClient();
    }

    public function testGetLibraryVersion()
    {
        $this->assertEquals($this->bigkindsClient->getLibraryVersion(), '0.1.0');
    }

    public function testCreateBigkindsClient()
    {
        $this->assertInstanceOf(BigkindsClient::class, $this->bigkindsClient);
    }

    //  public function testCheckConstructAfterCreateBigkingsClient()
    //  {
    //      $bigkindsClient = new BigkindsClient();
    //      $this->assertAttributeEquals('http://tools.kinds.or.kr:8888/', 'base_path', $bigkindsClient);
    //      $this->assertAttributeEquals('d3a10ae3-482c-41d0-9c31-146fe526e04d', 'access_key', $bigkindsClient);
    //  }

    public function testGetHttpClient()
    {
        $this->assertInstanceOf(\GuzzleHttp\Client::class, $this->bigkindsClient->getHttpClient());
    }

    public function testRequestFormat()
    {
        // 가이드 예제에 따름
        $requestFormat = $this->getExampleRequestFormatFromGuide();

        $this->assertIsArray($requestFormat);
    }

    public function testAccesskeyFromRequestFormat()
    {
        // 가이드 예제에 따름
        $requestFormat = $this->getExampleRequestFormatFromGuide();

        $this->assertEquals('d3a10ae3-482c-41d0-9c31-146fe526e04d', $requestFormat['access_key']);
    }

    // http://tools.kinds.or.kr:8888/search/news

    //  public function testExampleRequestViaGuide()
    //  {
    //      $news = $this->bigkindsClient->request('news', $this->getExampleRequestFormatFromGuide());
    //      $this->assertEquals($news['result'], 0);
    //  }

    private function getExampleRequestFormatFromGuide()
    {
        $format = <<<'EOT'
{
   "access_key":"d3a10ae3-482c-41d0-9c31-146fe526e04d",
   "argument":{
      "query":"서비스 AND 출시",
      "published_at":{
         "from":"2019-01-01",
         "until":"2019-03-31"
      },
      "provider":[
         "경향신문"
      ],
      "category":[
         "정치>정치일반",
         "IT_과학"
      ],
      "category_incident":[
         "범죄",
         "교통사고",
         "재해>자연재해"
      ],
      "byline":"",
      "provider_subject":[
         "경제",
         "부동산"
      ],
      "subject_info":[
         ""
      ],
      "subject_info1":[
         ""
      ],
      "subject_info2":[
         ""
      ],
      "subject_info3":[
         ""
      ],
      "subject_info4":[
         ""
      ],
      "sort":{
         "date":"desc"
      },
      "hilight":200,
      "return_from":0,
      "return_size":5,
      "fields":[
         "byline",
         "category",
         "category_incident",
         "provider_news_id"
      ]
   }
}
EOT;

        return json_decode($format, true);
    }
}
