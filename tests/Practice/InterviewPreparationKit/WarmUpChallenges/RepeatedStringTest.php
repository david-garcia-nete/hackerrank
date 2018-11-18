<?php

use PHPUnit\Framework\TestCase;
include '/home/david/PhpstormProjects/hackerrank/src/Practice/InterviewPreparationKit/WarmUpChallenges/RepeatedString.php';

final class RepeatedStringTest extends TestCase
{

    public function testRepeatedString(): void
    {
        $repeatedString = new RepeatedString();

        $n = 10;
        $s = "aba";

        $this->assertEquals(
            7,
            $repeatedString->repeatedString($s, $n)
        );

        $n = 1000000000000;
        $s = "a";

        $this->assertEquals(
            1000000000000,
            $repeatedString->repeatedString($s, $n)
        );

    }

}