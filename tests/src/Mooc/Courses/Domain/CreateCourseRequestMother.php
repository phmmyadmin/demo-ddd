<?php


namespace CodelyTv\Tests\Mooc\Courses\Domain;


use CodelyTv\Mooc\Courses\Application\CreateCourseRequest;
use CodelyTv\Mooc\Courses\Domain\CourseDuration;
use CodelyTv\Mooc\Courses\Domain\CourseId;
use CodelyTv\Mooc\Courses\Domain\CourseName;
use CodelyTv\Tests\Mooc\Shared\Domain\Course\CourseIdMother;

class CreateCourseRequestMother
{
    public static function create(CourseId $id, CourseName $name, CourseDuration $duration): CreateCourseRequest
    {
        return new CreateCourseRequest($id->value(), $name->value(), $duration->value());
    }

    public static function random(): CreateCourseRequest
    {
        return self::create(CourseIdMother::random(), CourseNameMother::random(), CourseDurationMother::random());
    }
}