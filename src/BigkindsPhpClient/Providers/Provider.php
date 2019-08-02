<?php

namespace Cable8mm\BigkindsPhpClient;

class Provider implements ArrayAccess
{
    const PROVER = '1.39';
    private $container = [
        '01100101' => '경향신문',
        '01100201' => '국민일보',
        '01100301' => '내일신문',
        '01100501' => '문화일보',
        '01100611' => '서울신문',
        '01100701' => '세계일보',
        '01101001' => '한겨레',
        '01101101' => '한국일보',
        '01200101' => '경기일보',
        '01200201' => '경인일보',
        '01300101' => '강원도민일보',
        '01400201' => '대전일보',
        '01400351' => '중도일보',
        '01400401' => '중부매일',
        '01400501' => '중부일보',
        '01400551' => '충북일보',
        '01400601' => '충청일보',
        '01400701' => '충청투데이',
        '01500051' => '경남신문',
        '01500151' => '경남도민일보',
        '01500301' => '경상일보',
        '01500401' => '국제신문',
        '01500501' => '대구일보',
        '01500601' => '매일신문',
        '01500701' => '부산일보',
        '01500801' => '영남일보',
        '01500901' => '울산매일',
        '01600201' => '광주매일신문',
        '01600301' => '광주일보',
        '01600501' => '무등일보',
        '01600801' => '전남일보',
        '01601001' => '전북도민일보',
        '01601101' => '전북일보',
        '01700101' => '제민일보',
        '01700201' => '한라일보',
        '02100101' => '매일경제',
        '02100201' => '머니투데이',
        '02100311' => '서울경제',
        '02100501' => '파이낸셜뉴스',
        '02100601' => '한국경제',
        '02100701' => '헤럴드경제',
        '02100801' => '아시아경제',
        '07100501' => '전자신문',
        '07101201' => '디지털타임스',
        '08100201' => 'MBC',
        '08100301' => 'SBS',
        '08100401' => 'YTN',
        '08200101' => 'OBS',
        '01100751' => '아시아투데이',
        '01100401' => '동아일보',
        '01100901' => '중앙일보',
        '01100801' => '조선일보',
        '02100851' => '아주경제',
    ];

    public function __construct(array $providers = [])
    {
        if (empty($providers)) {
            return;
        }

        $this->container = array_merge(
            $this->container,
            $providers
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
    public function getProviderVersion()
    {
        return self::PROVER;
    }
}
