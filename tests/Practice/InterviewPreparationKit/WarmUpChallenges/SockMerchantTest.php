<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

include '../../../../src/Practice/InterviewPreparationKit/WarmUpChallenges/SockMerchant.php';

final class SockMerchantTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            SockMerchant::class,
            SockMerchant::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        SockMerchant::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            SockMerchant::fromString('user@example.com')
        );
    }
}