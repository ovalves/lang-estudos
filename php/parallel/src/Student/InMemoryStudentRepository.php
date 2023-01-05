<?php

namespace Sample\Threads\Student;

use Sample\Threads\Activity\Activity;
use Sample\Threads\Activity\Course;
use Sample\Threads\Activity\Exercise;
use Sample\Threads\Activity\Video;

class InMemoryStudentRepository implements StudentRepository
{
    /**
     * @return Student[]
     */
    public function all(): array
    {
        return array_map(
            fn ($i) => new Student("Student Number $i", new ProfilePicture(__DIR__ . "/../../images/$i.jpg")),
            range(1, 50)
        );
    }

    /**
     * @return Activity[]
     */
    public function activitiesInADay(Student $student): array
    {
        $exercisesNumber = rand(1, 100);
        $videosNumber = rand(1, 10);

        $exerciseList = array_map(fn () => new Exercise(), range(1, $exercisesNumber));
        $videoList = array_map(fn () => new Video(new \DateInterval('PT' . rand(1, 20) . 'M' . rand(0, 59) . 'S')), range(1, $videosNumber));

        $videoListForCourse = array_map(fn () => new Video(new \DateInterval('PT' . rand(1, 20) . 'M' . rand(0, 59) . 'S')), range(1, 30));
        $course = new Course($videoListForCourse);

        return array_merge([$course], $videoList, $exerciseList);
    }
}
