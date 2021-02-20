<?php


namespace CodelyTv\Tests\Shared\Domain\ValueObject;


class WordMother
{
    public static function random(): string
    {
        return MotherCreator::random()->word;
    }
}