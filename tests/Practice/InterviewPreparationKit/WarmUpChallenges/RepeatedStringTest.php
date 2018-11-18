<?php

use PHPUnit\Framework\TestCase;
include '/home/david/PhpstormProjects/hackerrank/src/Practice/InterviewPreparationKit/WarmUpChallenges/RepeatedString.php';

final class RepeatedStringTest extends TestCase
{

    public function testRepeatedString(): void
    {
        $repeatedString = new RepeatedString();

        $n = 7;
        $c = [0, 0, 1, 0, 0, 1, 0];

        $this->assertEquals(
            4,
            $repeatedString->repeatedString($c)
        );

        $n = 6;
        $c = [0, 0, 0, 1, 0, 0];

        $this->assertEquals(
            3,
            $repeatedString->repeatedString($c)
        );

    }

}