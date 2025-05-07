<?php
    declare(strict_types = 1);
    namespace SelfDefenseSchool;

    class Course 
    {
        public function __construct(
            private string $course_id,
            private string $course_name,
            private string $fighting_style,
            private int $course_duration_in_hours,
            private Master $course_master,
            private Badge $course_badge,
            private array $students_taking_course = []
        ){}

        public function getCourseName() : string {
            return $this->course_name;
        }

        public function addStudent(Student $student) : void {
            $this->students_taking_course[] = $student;
        }

        public function getNoOfEnrolledStds() : int {
            return count($this->students_taking_course);
        }

        public function getCourseMaster() : object {
            return $this->course_master;
        }

        public function assignBadgeToCourse(Badge $badge) : void {
            if($badge instanceof Badge) {
                $this->course_badge = $badge;
            }
        }

        public function getCourseBadge() : string {
            return $this->course_badge->badge_name;
        }
        
    }
?>