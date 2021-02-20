<?php

namespace CodelyTv\Tests\Mooc\Courses\Infrastructure;


use CodelyTv\Mooc\Courses\Infrastructure\FileCourseRepository;
use CodelyTv\Mooc\Courses\Domain\Course;
use PHPUnit\Framework\TestCase;

class FileCourseRepositoryTest extends TestCase
{
    /** @test */
    public function it_should_save_a_course(): void
    {
        $repository = new FileCourseRepository();
        $course = new Course('id', 'name', 'dur');

        $repository->save($course);
    }

    /** @test */
    public function it_should_return_an_existing_course(): void
    {
        $repository = new FileCourseRepository();
        $course = new Course('id', 'name', 'dur');

        $repository->save($course);

        $this->assertEquals($course, $repository->search($course->id()));
    }
}
