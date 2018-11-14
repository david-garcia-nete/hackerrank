<?php
declare(strict_types=1);

final class SockMerchant
{

    private function __construct()
    {
    }

    public static function SockMerchant($n, $ar): int
    {

        $temp = [];
        $pairCount = 0;

        foreach($ar as $sockColor){
            $temp[$sockColor]++;
        }

        foreach($temp as $sockColor){
            $pairCount += $sockColor % 2;
        }

        return $pairCount;

    }

}