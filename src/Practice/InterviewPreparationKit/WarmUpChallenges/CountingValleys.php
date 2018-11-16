<?php

final class CountingValleys
{

    public function __construct()
    {

    }

    public function CountingValleys($n, $s): int
    {

        $meter = 0;

        $valleyCount = 0;

        $s = str_split($s);

        foreach ($s as $step) {

            if ($step === 'U') {

                if($meter === -1) $valleyCount++;

                $meter++;

            }

            if ($step === 'D') {

                $meter--;

            }

        }

        return $valleyCount;

    }

}