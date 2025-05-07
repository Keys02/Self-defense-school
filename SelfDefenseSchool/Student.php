<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    class Student extends StudentMaster
    {
        public function __construct
        (
            string $id,
            string $name,
            string $specialization,
            string $weapon_of_choice,
            private array $badges = [],
            private array $enrolled_courses = []
        ){
            parent::__construct($id, $name, $specialization, $weapon_of_choice);
        }

        public function assignBadge(Badge $badge) : void {
            if($badge instanceof Badge) {
                $this->badges[] = $badge;
            }
        }

        public function getStudentBadges() : string {
            $badges_last_key = array_key_last($this->badges);
            $badgeList = "$this->name badges: {";
            foreach($this->badges as $key => $badge) { 
                $badgeList .= "$badge";
                if($key !== $badges_last_key) {
                    $badgeList .= ", ";
                }
            }
            $badgeList .= "}";
            return $badgeList;
        }

        public function enrollCourse(Course $course) : void {
            if(in_array($course, $this->enrolled_courses)) {
                $course_name = $course->getCourseName();
                $course_master = $course->getCourseMaster();
                throw new \Exception("{$this->name} already enrolled in {$course_name} with Master {$course_master->getName()}");
            } else {
                $this->enrolled_courses[] = $course;
                $course->addStudent($this);
            }
        }

        public function getEnrolledCourses() : string {
            $enrolled_courses_last_key = array_key_last($this->enrolled_courses);
            $enrolled_courses_list  = "$this->name enrolled courses: {";
            foreach($this->enrolled_courses as $key => $enrolled_course) {
                $enrolled_courses_list .= "{$enrolled_course->getCourseName()}";
                if($key !== $enrolled_courses_last_key) {
                    $enrolled_courses_list .= ", ";
                }
                
            }
            $enrolled_courses_list .= "}";
            return $enrolled_courses_list;
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