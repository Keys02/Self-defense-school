<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;
    
    class Student extends StudentMaster
    {
        public function __construct
        (
            private array $badges = [],
            private array $enrolled_training_courses = []
        ){}

        public function setBadge(string $badge) : void {
            $this->badges[] = $badge;
        }

        public function getBadges() : array {
            return $this->badges;
        }


    }
?>