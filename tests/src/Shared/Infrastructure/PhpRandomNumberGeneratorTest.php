<?php

namespace CodelyTv\Tests\Shared\Infrastructure;

use CodelyTv\Shared\Infrastructure\PhpRandomNumberGenerator;
use PHPUnit\Framework\TestCase;

class PhpRandomNumberGeneratorTest extends TestCase
{
    /** @test */
    public function it_should_generate_a_random_number(): void
    {
        $generator = new PhpRandomNumberGenerator();

        $this->assertIsNumeric($generator->generate());
    }
}
