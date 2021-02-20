<?php


namespace CodelyTv\Mooc\Courses\Domain;


use CodelyTv\Shared\Domain\ValueObject\StringValueObject;

class CourseName extends StringValueObject
{
    public function __construct(string $value)
    {
        $this->ensureLengthIsInferiorThan30Characters($value);

        parent::__construct($value);
    }

    private function ensureLengthIsInferiorThan30Characters(string $value): void
    {
        if (strlen($value) > 30)
            throw new \InvalidArgumentException("The length is greater than 30 characters");
    }
}