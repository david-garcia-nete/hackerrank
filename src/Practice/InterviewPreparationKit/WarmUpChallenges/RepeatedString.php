<?php

final class RepeatedString
{

    public function __construct()
    {

    }

    public function RepeatedString($s, $n): int
    {

        $aCount = 0;

        $counter = 0;

        $pointer = 0;

        $stringLength = strlen($s);

        while($counter < $n){
            $character = $s[$pointer];
            if ($character === "a") $aCount++;
            if ($pointer === $stringLength-1){
                $pointer = 0;
            }else{
                $pointer++;
            }
            $counter++;

        }

        return $aCount;

    }

}