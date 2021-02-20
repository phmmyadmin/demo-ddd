<?php


namespace CodelyTv\Mooc\Courses\Domain;


use CodelyTv\Mooc\Courses\Domain\Course;

interface CourseRepository
{
    public function save(Course $course): void;
    public function search(CourseId $id): ?Course;
}