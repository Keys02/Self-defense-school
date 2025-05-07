<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;
    
    class Student extends StudentMaster
    {
        public function __construct
        (
            private string $id,
            private string $name,
            private string $specialization,
            private string $weapon_of_choice,
            private array $badges = [],
            private array $enrolled_courses = []
        ){
            parent::__construct($id, $name, $specialization, $weapon_of_choice);
        }

        public function assignBadge(Badge $badge) : void {
            $this->badges[] = $badge;
        }

        public function getStudentBadges() : void {
            foreach($this->badges as $badge) {
                echo "$badge <br/>";
            }
        }

        public function addCourse(Course $course) : void {
            $this->enrolled_courses[] = $course;
        }

        public function dropCourse(Course $course) : void {
            if(in_array($course, $this->enrolled_courses)) {
                //Remove the element from the array
                $course_index = array_search($course, $this->enrolled_courses);
                unset($this->enrolled_courses[$course_index]);
            } else {
                throw new \Exception("User not enrolled in the course you are trying to drop");
            }
        }
    }
?>