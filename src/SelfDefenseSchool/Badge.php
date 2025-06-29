<?php
    declare(strict_types = 1);
    
    namespace SelfDefenseSchool;
    

    class Badge implements BadgeToCourseManager
    {
        public function __construct(
            private string $badge_id,
            private string $badge_name,
            private ?Course $course_name = null,
        ) {}

        public function getBadgeName() : string {
            return $this->badge_name;
        }

        public function getBadgeCourseName() : string {
            return $this->course_name->getCourseName();
        }

        public function setBadgeCourseName(Course $course) : void {
            $this->course_name = $course;
        }

        public function __toString() : string {
            $badge_details = <<<BADGE_DETAILS
                                    $this->badge_name: {<br/>
                                        &emsp;ID: $this->badge_id <br/>
                                        &emsp;Course name:
                                BADGE_DETAILS;
            if(isset($this->course_name)) {
                $badge_details .= <<<BADGE_DETAILS
                                        {$this->course_name->getCourseName()}<br/>
                                    BADGE_DETAILS;
            } else {
                $badge_details .= <<<BADGE_DETAILS
                                        Not a course badge<br/>
                                    BADGE_DETAILS;
            }
                $badge_details .= <<<BADGE_DETAILS
                                        }
                                    BADGE_DETAILS;
                return $badge_details;

        }
    }
?>