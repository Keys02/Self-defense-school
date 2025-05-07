<?php
    declare(strict_types = 1);
    namespace SelfDefenseSchool;

    class Course 
    {
        public function __construct(
            public string $course_id,
            public string $course_name,
            public string $fighting_style,
            public int $course_duration_in_hours,
            public object $course_master,
            public array $students_taking_course = []
        ){}

        public function getCourseName() : string {
            return $this->course_name;
        }

        public function addStudent(Student $student) {
            $this->students_taking_course[] = $student;
        }

        public function getNoOfEnrolledStds() {
            return count($this->students_taking_course);
        }

        public function getCourseMaster(Master $master) {
            return $master->getName();
        }
        
    }
?>