<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    class Student extends StudentMaster
    {
        private array $badges = [];
        private array $enrolled_courses = [];

        //Use MakeList trait
        use MakeList;

        public function assignBadge(Badge $badge) : void {
            if($badge instanceof Badge) {
                $this->badges[] = $badge;
            }
        }

        public function getStudentBadges() : string {
            $badgeList = "$this->name badges: {$this->list($this->badges, "badges")}";
            return $badgeList;
        }

        public function enrollCourse(CourseManager $course) : void {
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
            $enrolled_courses_list  = "$this->name enrolled courses: {$this->list($this->enrolled_courses, "courses name")}";
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


        public function __toString() : string {
            return <<<STUDENT_DETAILS
                        $this->name: {<br/>
                            &emsp;ID: $this->id <br/>
                            &emsp;Specialization: $this->specialization <br/>
                            &emsp;Weapon of Choice: $this->weapon_of_choice <br/>
                            &emsp;Badges: {$this->list($this->badges, "badges")} <br/>
                            &emsp;Enrolled Courses: {$this->list($this->enrolled_courses, "courses name")}<br/>
                        }
                    STUDENT_DETAILS;
        }
    }
?>