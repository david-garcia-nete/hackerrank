<?php

final class SockMerchant
{

    private function __construct()
    {

    }

    public static function SockMerchant($n, $ar): int
    {

        $temp = [];
        $pairCount = 0;

        foreach ($ar as $sockColor) {

            if (array_key_exists($sockColor, $temp)) {

                $temp[$sockColor]++;

            } else {

                $temp[$sockColor] = 1;

            }

        }

        foreach ($temp as $sockColor) {

            $pairCount += $sockColor % 2;

        }

        return $pairCount;

    }

}