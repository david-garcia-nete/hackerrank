<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include '../../../../src/Practice/InterviewPreparationKit/WarmUpChallenges/SockMerchant.php';

final class SockMerchantTest extends TestCase
{

    public function testCanBeUsedAsString(): void
    {
        $n = 9;
        $ar = [1, 2, 3, 1, 2, 3, 1, 2, 3];

        $this->assertEquals(
            3,
            SockMerchant::sockMerchant($n, $ar)
        );
    }
}