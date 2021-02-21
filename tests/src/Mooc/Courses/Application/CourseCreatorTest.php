<?php

namespace CodelyTv\Tests\Mooc\Courses\Application;

use CodelyTv\Mooc\Courses\Application\CourseCreator;
use CodelyTv\Tests\Mooc\Courses\Domain\CourseMother;
use CodelyTv\Tests\Mooc\Courses\Domain\CreateCourseRequestMother;

class CourseCreatorTest extends CoursesModuleUnitTestCase
{
    private CourseCreator $creator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->creator = new CourseCreator($this->repository());
    }

    /** @test */
    public function it_should_create_a_valid_course(): void
    {

        $request = CreateCourseRequestMother::random();
        $course = CourseMother::fromRequest($request);

        $this->shouldSave($course);

        ($this->creator)($request);
    }


}
