<?php


namespace CodelyTv\Tests\Shared\Domain\ValueObject;


class IntegerMother
{
    public static function between($min, $max = PHP_INT_MAX): int
    {
        return MotherCreator::random()->numberBetween($min, $max);
    }

    public static function lessThan($max): int
    {
        return self::between(1, $max);
    }

    public static function moreThan($min): int
    {
        return self::between($min);
    }

    public static function random(): int
    {
        return self::between(1);
    }
}