<?php

namespace Sample\Threads\Student;

use Sample\Threads\Activity\Activity;

interface StudentRepository
{
    /** @return Student[] */
    public function all(): array;

    /** @return Activity[] */
    public function activitiesInADay(Student $student): array;
}
