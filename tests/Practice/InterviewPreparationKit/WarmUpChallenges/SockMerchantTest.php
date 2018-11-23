<?php

use PHPUnit\Framework\TestCase;
include 'C:\Users\robert\PhpstormProjects\hackerrank\src\Practice\InterviewPreparationKit\WarmUpChallenges\SockMerchant.php';

final class SockMerchantTest extends TestCase
{

    public function testSockMerchant(): void
    {
        $sockMerchant = new SockMerchant();

        $n = 9;
        $ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];

        $this->assertEquals(
            3,
            $sockMerchant->sockMerchant($n, $ar)
        );

        $n = 10;
        $ar = [1, 1, 3, 1, 2, 1, 3, 3, 3, 3];

        $this->assertEquals(
            4,
            $sockMerchant->sockMerchant($n, $ar)
        );

    }

}