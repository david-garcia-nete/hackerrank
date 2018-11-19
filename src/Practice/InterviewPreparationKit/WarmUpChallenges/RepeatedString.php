<?php

final class RepeatedString
{

    public function __construct()
    {

    }

    public function RepeatedString($s, $n): int
    {
        $stringLength = strlen($s);

        $saCount = $this->countAs($s, $stringLength);

        $sCount = $n / $stringLength;

        $mostAs = $saCount * $saCount;

        $mostAsLength = $sCount * $stringLength;

        $remainingCharacters = $n - $mostAsLength;

        $remainingAs = $this->countAs($s, $remainingCharacters);

        $aCount = $mostAs + $remainingAs;

        return $aCount;

    }

    private function countAs($s, $n): int
    {

        $aCount = 0;

        $counter = 0;

        $pointer = 0;

        $stringLength = strlen($s);

        if($stringLength == 1 && $s == 'a') return $n;

        $stringLengthMinusOne = $stringLength-1;

        while($counter < $n){
            $character = $s[$pointer];
            if ($character == "a") $aCount++;
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