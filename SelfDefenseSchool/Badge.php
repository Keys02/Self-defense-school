<?php
    declare(strict_types = 1);
    namespace SelfDefenseSchool;
    
    class Badge
    {
        public function __construct(
            private string $badge_name,
            private ?Course $course_name = null,
            private ?string $badge_created_date = null
        ) {
            if(empty($badge_created_date)) {
                $this->badge_created_date = date("F j, Y, g:i a");
            }
        }

        public function getBadgeName() : string {
            return $this->badge_name;
        }

        public function getBadgeCreatedDate() : string {
            return $this->badge_created_date;
        }

        public function getBadgeCourseName() : string {
            return $this->course_name->getCourseName();
        }

        public function setBadgeCourseName(Course $course) : void {
            $this->course_name = $course;
        }

        public function __toString() : string {
            if(isset($this->course_name)) {
                return <<<BADGE_DETAILS
                            $this->badge_name: {<br/>
                                &emsp;Badge forged date: $this->badge_created_date<br/>
                                &emsp;Course name: {$this->course_name->getCourseName()}<br/>
                            }
                        BADGE_DETAILS;
            } else {
                return <<<BADGE_DETAILS
                    $this->badge_name: {<br/>
                        &emsp;Badge forged date: $this->badge_created_date<br/>
                        &emsp;Course name: Not a course badge<br/>
                    }
                BADGE_DETAILS;
            }

        }
    }
?>