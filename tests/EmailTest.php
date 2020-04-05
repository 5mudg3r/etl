<?php

declare(strict_types=1);

namespace Smudja\ETL\Tests;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Smudja\ETL\Email;

final class EmailTest extends TestCase
{
    public function test_can_be_created_from_valid_email_address(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function test_cannot_be_created_from_invalid_email_address(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function test_can_be_used_as_string(): void
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}
