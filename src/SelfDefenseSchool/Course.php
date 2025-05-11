<?php
    declare(strict_types = 1);
    namespace SelfDefenseSchool;

    class Course implements CourseManager
    {
        //Use MakeList trait
        use MakeList;

        public function __construct(
            private string $course_id,
            private string $course_name,
            private string $fighting_style,
            private int $course_duration_in_hours,
            private Master $course_master,
            private Badge $course_badge,
            private array $students_taking_course = []
        ){
            $this->assignBadge($course_badge);
        }

        public function getCourseName() : string {
            return $this->course_name;
        }

        public function addStudent(Student $student) : void {
            if($student instanceof Student) {   
                $this->students_taking_course[] = $student;
            }
        }

        public function getNoOfEnrolledStudents() : int {
            return count($this->students_taking_course);
        }

        public function getEnrolledStudents() : string {
            $enrolled_students_list = "$this->course_name enrolled students: {$this->list($this->students_taking_course, "students name")}";
            return $enrolled_students_list;
        }

        public function getCourseMaster() : object {
            return $this->course_master;
        }

        public function assignBadgeToCourse(Badge $badge) : void {
            if($badge instanceof Badge) {
                $this->assignBadge($badge);
            }
        }

        public function getCourseBadge() : Badge {
            return $this->course_badge;
        }

        private function assignBadge(BadgeToCourseManager $badge) {
            if($badge instanceof Badge) {
                $this->course_badge = $badge;
                $badge->setBadgeCourseName($this);
            }
        }

        public function __toString() : string {
            return <<<COURSE_DETAILS
                        $this->course_name: {<br/>
                            &emsp;ID: $this->course_id<br/>
                            &emsp;Fight style: $this->fighting_style<br/>
                            &emsp;Course duration: $this->course_duration_in_hours hours<br/>
                            &emsp;Course Master: {$this->getCourseMaster()->getName()}<br/>
                            &emsp;Students Enrolled: {$this->list($this->students_taking_course, "students name")}<br/>
                        }
                    COURSE_DETAILS;
        }
        
    }
?>