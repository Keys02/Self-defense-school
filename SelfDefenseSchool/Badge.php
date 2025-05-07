<?php
    namespace SelfDefenseSchool;
    
    class Badge
    {
        public function __construct(
            public string $badge_name,
            public bool $belongs_to_a_course = false
        ) {}

        public function getBadgeName() {
            return $this->badge_name;
        }
    }
?>