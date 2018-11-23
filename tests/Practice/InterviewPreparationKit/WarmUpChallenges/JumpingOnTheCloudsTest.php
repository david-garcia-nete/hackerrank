<?php

use PHPUnit\Framework\TestCase;
include 'C:\Users\robert\PhpstormProjects\hackerrank\src\Practice\InterviewPreparationKit\WarmUpChallenges\JumpingOnTheClouds.php';

final class JumpingOnTheCloudsTest extends TestCase
{

    public function testJumpingOnTheClouds(): void
    {
        $jumpingOnTheClouds = new JumpingOnTheClouds();

        $n = 7;
        $c = [0, 0, 1, 0, 0, 1, 0];

        $this->assertEquals(
            4,
            $jumpingOnTheClouds->jumpingOnTheClouds($c)
        );

        $n = 6;
        $c = [0, 0, 0, 1, 0, 0];

        $this->assertEquals(
            3,
            $jumpingOnTheClouds->jumpingOnTheClouds($c)
        );

    }

}