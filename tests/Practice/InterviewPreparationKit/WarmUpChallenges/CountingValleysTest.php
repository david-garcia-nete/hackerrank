<?php

use PHPUnit\Framework\TestCase;
include 'C:\Users\robert\PhpstormProjects\hackerrank\src\Practice\InterviewPreparationKit\WarmUpChallenges\CountingValleys.php';

final class CountingValleysTest extends TestCase
{

    public function testCountingValleys(): void
    {
        $countingValleys = new CountingValleys();

        $n = 20;
        $s = "UDDUUUDDUUDDDUUUUUUD";

        $this->assertEquals(
            2,
            $countingValleys->countingValleys($n, $s)
        );

        $n = 26;
        $s = "UDDDUUUUUUDDDUUUUUUDDDUUUUU";

        $this->assertEquals(
            1,
            $countingValleys->countingValleys($n, $s)
        );

    }

}