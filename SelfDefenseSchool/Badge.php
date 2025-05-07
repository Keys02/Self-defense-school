<?php
    declare(strict_types = 1);
    namespace SelfDefenseSchool;
    
    class Badge
    {
        public function __construct(
            public string $badge_name,
            public bool $belongs_to_a_course = false
        ) {}

        public function getBadgeName() : string {
            return $this->badge_name;
        }
    }
?>