<?php

use PHPUnit\Framework\TestCase;
include '/home/david/PhpstormProjects/hackerrank/src/Practice/InterviewPreparationKit/Arrays/TwoDArrayDS.php';

final class TwoDArrayDSTest extends TestCase
{

    public function testTwoDArrayDS(): void
    {
        $twoDArrayDS = new TwoDArrayDS();
        
        $n = 10;
        $s = "aba";

        $this->assertEquals(
            7,
            $twoDArrayDS->twoDArrayDS($s, $n)
        );

        $n = 1000000000000;
        $s = "a";

        $this->assertEquals(
            1000000000000,
            $twoDArrayDS->twoDArrayDS($s, $n)
        );

        $n = 3;
        $s = "aaabbbbabbabbabbabbabbabbabba";

        $this->assertEquals(
            3,
            $twoDArrayDS->twoDArrayDS($s, $n)
        );

        $n = 25;
        $s = "aaabbbbabbabbabbabbabbabbabba";

        $this->assertEquals(
            9,
            $twoDArrayDS->twoDArrayDS($s, $n)
        );

    }

}