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

            if($skip === false) {

                if ($c[$index + 2] === 0) {

                    $skip = true;

                    $stepCount++;

                } else {

                    $skip = false;

                    $stepCount++;

                }

            }else{

                $skip = false;

            }

        }

        return $stepCount;

    }

}