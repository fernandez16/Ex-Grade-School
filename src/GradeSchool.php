<?php

namespace App;

use Error;
use phpDocumentor\Reflection\Types\Intersection;

class School
{

    private array $students = [];

    public function add(string $name, int $grade): void
    {
        $this->students[$grade][] = $name;
    }

    public function grade($grade)
    {
        return $this->students[$grade] ?? [];
        // if (isset($this->students[$grade])) {
        //     return $this->students[$grade];
        // }
        // return [];
    }

    public function studentsByGradeAlphabetical(): array
    {
        ksort($this->students);
        
        foreach ($this->students as $grade => $student) {
            sort($this->students[$grade]);
        }

        return $this->students;
    }
}
