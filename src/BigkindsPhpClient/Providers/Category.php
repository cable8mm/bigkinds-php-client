<?php

namespace Cable8mm\BigkindsPhpClient;

class Category implements ArrayAccess
{
    const CATVER = '1.39';
    private $container = [
        '정치' => '001000000',
        '정치>북한' => '001001000',
        '정치>선거' => '001002000',
        '정치>외교' => '001003000',
        '정치>국회_정당' => '001004000',
        '정치>행정_자치' => '001005000',
        '정치>청와대' => '001006000',
        '정치>정치일반' => '001007000',
        '경제' => '002000000',
        '경제>무역' => '002001000',
        '경제>외환' => '002002000',
        '경제>유통' => '002003000',
        '경제>자원' => '002004000',
        '경제>산업_기업' => '002005000',
        '경제>증권_증시' => '002006000',
        '경제>취업_창업' => '002007000',
        '경제>금융_재테크' => '002008000',
        '경제>반도체' => '002009000',
        '경제>부동산' => '002010000',
        '경제>자동차' => '002011000',
        '경제>서비스_쇼핑' => '002012000',
        '경제>국제경제' => '002013000',
        '경제>경제일반' => '002014000',
        '사회' => '003000000',
        '사회>날씨' => '003001000',
        '사회>여성' => '003002000',
        '사회>환경' => '003003000',
        '사회>교육_시험' => '003004000',
        '사회>노동_복지' => '003005000',
        '사회>사건_사고' => '003006000',
        '사회>의료_건강' => '003007000',
        '사회>미디어' => '003008000',
        '사회>장애인' => '003009000',
        '사회>사회일반' => '003010000',
        '문화' => '004000000',
        '문화>생활' => '004001000',
        '문화>영화' => '004002000',
        '문화>음악' => '004003000',
        '문화>종교' => '004004000',
        '문화>출판' => '004005000',
        '문화>미술_건축' => '004006000',
        '문화>방송_연예' => '004007000',
        '문화>요리_여행' => '004008000',
        '문화>전시_공연' => '004009000',
        '문화>학술_문화재' => '004010000',
        '문화>문화일반' => '004011000',
        '국제' => '005001000',
        '국제>일본' => '005001000',
        '국제>중국' => '005002000',
        '국제>미국_북미' => '005003000',
        '국제>중동_아프리카' => '005004000',
        '국제>러시아' => '005005000',
        '국제>아시아' => '005006000',
        '국제>중남미' => '005007000',
        '국제>유럽_EU' => '005008000',
        '국제>국제일반' => '005009000',
        '지역' => '006000000',
        '지역>강원' => '006001000',
        '지역>경기' => '006002000',
        '지역>경남' => '006003000',
        '지역>경북' => '006004000',
        '지역>광주' => '006005000',
        '지역>대구' => '006006000',
        '지역>대전' => '006007000',
        '지역>부산' => '006008000',
        '지역>울산' => '006009000',
        '지역>전남' => '006010000',
        '지역>전북' => '006011000',
        '지역>제주' => '006012000',
        '지역>충남' => '006013000',
        '지역>충북' => '006014000',
        '지역>지역일반' => '006015000',
        '스포츠' => '007000000',
        '스포츠>골프' => '007001000',
        '스포츠>야구' => '007002000',
        '스포츠>야구>메이저리그' => '007002001',
        '스포츠>야구>일본프로야구' => '007002002',
        '스포츠>야구>한국프로야구' => '007002003',
        '스포츠>축구' => '007003000',
        '스포츠>축구>해외축구' => '007003001',
        '스포츠>축구>국가대표팀' => '007003002',
        '스포츠>축구>한국프로축구' => '007003003',
        '스포츠>농구_배구' => '007005000',
        '스포츠>월드컵' => '007006000',
        '스포츠>올림픽_아시안게임' => '007010000',
        '스포츠>스포츠일반' => '007013000',
        'IT_과학' => '008000000',
        'IT_과학>과학' => '008001000',
        'IT_과학>보안' => '008002000',
        'IT_과학>모바일' => '008003000',
        'IT_과학>콘텐츠' => '008004000',
        'IT_과학>인터넷_SNS' => '008005000',
        'IT_과학>IT_과학일반' => '008006000',
    ];

    public function __construct(array $categories = [])
    {
        if (empty($providers)) {
            return;
        }

        $this->container = array_merge(
            $this->container,
            $categories
        );
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Get a string containing the version of the category.
     *
     * @return string
     */
    public function getCategoryVersion()
    {
        return self::CATVER;
    }
}
