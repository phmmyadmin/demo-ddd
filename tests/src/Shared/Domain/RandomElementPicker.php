<?php


namespace CodelyTv\Tests\Shared\Domain;

use CodelyTv\Tests\Shared\Domain\ValueObject\MotherCreator;

final class RandomElementPicker
{
    public static function from(...$elements)
    {
        return MotherCreator::random()->randomElement($elements);
    }
}