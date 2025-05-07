<?php
    declare(strict_types = 1);
    namespace SelfDefenseSchool;

    class Course 
    {
        public function __construct(
            public string $fighting_style,
            public string $course_duration,
            public object $course_master,
            public array $studentsTakingCourse
        ){}

        public function addStudent(Student $student) {
            $this->studentsTakingCourse[] = $student;
        }

        public function getNoOfEnrolledStds() {
            return count($this->studentsTakingCourse);
        }

        public function getCourseMaster(Master $master) {
            return $master->getName();
        }
        
    }
?>