<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;
    
    class Student extends StudentMaster
    {
        public function __construct
        (
            private array $badges = [],
            private array $enrolled_courses = []
        ){}

        public function setBadge(string $badge) : void {
            $this->badges[] = $badge;
        }

        public function getBadges() : array {
            return $this->badges;
        }

        public function addCourse(Course $course) : void {
            $this->enrolled_courses[] = $course;
        }

        public function dropCourse(Course $course) : void {
            if(in_array($course, $this->enrolled_courses)) {
                //Remove the element from the array
            } else {
                throw new \Exception("User not enrolled in the course you are trying to drop");
            }
        }

    }
?>