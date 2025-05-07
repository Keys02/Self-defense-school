<?php
    namespace SelfDefenseSchool;
    
    class Badge
    {
        public function __construct(
            public string $badge_name,
            public ?Course $course_name
        ) {}

        public function getBadgeName() {
            return $this->badge_name;
        }

        public function getBadgeAssignedCourse(Course $course) : string {
            return $course->getCourseName();
        }
    }
?>