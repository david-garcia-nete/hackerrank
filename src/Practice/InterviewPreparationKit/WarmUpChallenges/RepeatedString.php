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

        $stringLengthMinusOne = $stringLength-1;

        while($counter < $n){
            $character = $s[$pointer];
            if ($character === "a") $aCount++;
            if ($pointer == $stringLengthMinusOne){
                $pointer = 0;
            }else{
                $pointer++;
            }
            $counter++;

        }

        return $aCount;

    }

}