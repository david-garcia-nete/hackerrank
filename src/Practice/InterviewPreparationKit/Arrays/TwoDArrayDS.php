<?php

final class TwoDArrayDS
{

    public function __construct()
    {

    }

    public function TwoDArrayDS($s, $n): int
    {
        $stringLength = strlen($s);

        $saCount = $this->countAs($s, $stringLength);

        $sCount = $n / $stringLength;

        $sCount = intval($sCount);

        $mostAs = $sCount * $saCount;

        $mostAsLength = $sCount * $stringLength;

        $remainingCharacters = $n - $mostAsLength;

        $remainingAs = $this->countAs($s, $remainingCharacters);

        $aCount = $mostAs + $remainingAs;

        return $aCount;

    }

}