<?php

final class JumpingOnTheClouds
{

    public function __construct()
    {

    }

    public function JumpingOnTheClouds($c): int
    {

        $stepCount = 0;

        $skip = false;

        foreach ($c as $index => $cloud) {

            $skipKey = array_key_exists($index + 2, $c);
            $nextKey = array_key_exists($index + 1, $c);

            if($skip == false && ($skipKey || $nextKey)) {

                if ($skipKey) {

                    if ($c[$index + 2] == 0) {

                        $skip = true;

                        $stepCount++;

                    }else{

                        $skip = false;

                        $stepCount++;

                    }

                } else {

                    $stepCount++;

                }

            }else{

                $skip = false;

            }

        }

        return $stepCount;

    }

}