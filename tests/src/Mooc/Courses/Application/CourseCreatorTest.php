<?php

namespace CodelyTv\Tests\Mooc\Courses\Application;

use CodelyTv\Mooc\Courses\Application\CourseCreator;
use CodelyTv\Mooc\Courses\Application\CreateCourseRequest;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;
use PHPUnit\Framework\TestCase;

class CourseCreatorTest extends TestCase
{
    /** @test */
    public function it_should_create_a_valid_course(): void
    {
        $repository = $this->createMock(CourseRepository::class);
        $creator = new CourseCreator($repository);

        $course = CourseMother::random();

        $repository->method('save')->with($course);

        $creator(new CreateCourseRequest($course->id()->value(), $course->name()->value(), $course->duration()->value()));
    }
}
