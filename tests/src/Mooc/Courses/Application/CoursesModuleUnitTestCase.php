<?php


namespace CodelyTv\Tests\Mooc\Courses\Application;


use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class CoursesModuleUnitTestCase extends TestCase
{
    private ?CourseRepository $repository = null;

    protected function shouldSave(Course $course): void
    {
        $this->repository()->method('save')->with($course);
    }

    protected function repository(): MockObject
    {
        return $this->repository ?: $this->createMock(CourseRepository::class);
    }

}