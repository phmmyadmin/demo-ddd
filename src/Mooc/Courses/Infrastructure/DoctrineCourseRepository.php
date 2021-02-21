<?php


namespace CodelyTv\Mooc\Courses\Infrastructure;


use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Courses\Domain\CourseId;
use CodelyTv\Mooc\Courses\Domain\CourseRepository;
use CodelyTv\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

class DoctrineCourseRepository extends DoctrineRepository implements CourseRepository
{
    const FILE_PATH = __DIR__ . '/courses';

    public function save(Course $course): void
    {
        $this->persist($course);
    }

    public function search(CourseId $id): ?Course
    {
        return $this->repository(Course::class)->find($id);
    }
}