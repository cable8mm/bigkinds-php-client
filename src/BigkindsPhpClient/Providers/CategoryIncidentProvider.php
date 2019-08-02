<?php

namespace Cable8mm\BigkindsPhpClient;

final class CategoryIncidentProvider extends Provider implements IProvider
{
    /**
     * CategoryIncident version
     *
     * @var string
     */
    protected static $version = '1.39';

    /**
     * Data
     *
     * @var array
     */
    protected static $providers = [
        '범죄' => '1',
        '범죄>성범죄' => '1,5',
        '범죄>성범죄>성폭행' => '1,5,14',
        '범죄>성범죄>성추행' => '1,5,15',
        '범죄>성범죄>성희롱' => '1,5,16',
        '범죄>성범죄>성매매' => '1,5,17',
        '범죄>성범죄>음란물' => '1,5,18',
        '범죄>기업범죄' => '1,6',
        '범죄>기업범죄>반독점범죄' => '1,6,19',
        '범죄>기업범죄>계약위반' => '1,6,20',
        '범죄>기업범죄>횡령' => '1,6,21',
        '범죄>기업범죄>내부자거래' => '1,6,22',
        '범죄>기업범죄>거래제한' => '1,6,23',
        '범죄>정치' => '1,7',
        '범죄>정치>뇌물수수' => '1,7,24',
        '범죄>범죄일반' => '1,8',
        '범죄>범죄일반>방화' => '1,8,25',
        '범죄>범죄일반>폭행' => '1,8,26',
        '범죄>범죄일반>절도' => '1,8,27',
        '범죄>범죄일반>유괴/납치' => '1,8,28',
        '범죄>범죄일반>살인' => '1,8,29',
        '범죄>범죄일반>사기' => '1,8,30',
        '범죄>범죄일반>마약' => '1,8,31',
        '사고' => '2',
        '사고>산업사고' => '2,9',
        '사고>산업사고>붕괴' => '2,9,32',
        '사고>산업사고>폭발' => '2,9,33',
        '사고>산업사고>화재' => '2,9,34',
        '사고>산업사고>원자력사고' => '2,9,35',
        '사고>교통사고' => '2,10',
        '사고>교통사고>항공사고' => '2,10,36',
        '사고>교통사고>우주사고' => '2,10,37',
        '사고>교통사고>해상사고' => '2,10,38',
        '사고>교통사고>철도사고' => '2,10,39',
        '사고>교통사고>노상사고' => '2,10,40',
        '재해' => '3',
        '재해>자연재해' => '3,11',
        '재해>자연재해>가뭄' => '3,11,41',
        '재해>자연재해>지진' => '3,11,42',
        '재해>자연재해>홍수' => '3,11,43',
        '재해>자연재해>눈사태_산사태' => '3,11,44',
        '재해>자연재해>태풍' => '3,11,45',
        '재해>자연재해>폭염' => '3,11,46',
        '재해>자연재해>해일' => '3,11,47',
        '재해>자연재해>화산폭발' => '3,11,48',
        '사회' => '4',
        '사회>사회문제' => '4,12',
        '사회>사회문제>학대' => '4,12,49',
        '사회>사회문제>중독' => '4,12,50',
        '사회>사회문제>미성년범죄' => '4,12,51',
        '사회>사회문제>노예' => '4,12,52',
        '사회>사회문제>자살' => '4,12,53',
        '사회>사회갈등' => '4,13',
        '사회>사회갈등>전쟁' => '4,13,54',
        '사회>사회갈등>테러행위' => '4,13,55',
        '사회>사회갈등>시위' => '4,13,56',
        '사회>사회갈등>반란_혁명_폭동' => '4,13,57',
        '사회>사회갈등>대량학살' => '4,13,58',
    ];
}
