<?php
    namespace self_defence_school;
    
    class Student extends StudentMaster
    {
        public function __construct
        (
            private string $name,
            private array $badges = [],
            private string $specialization,
            private string $weapon_of_choice,
        ){}

        public function setName(string $name) : void {
            $this->name = $name;
        }

        public function setBadge(string $badge) : void {
            $this->badges[] = $badge;
        }

        public function setSpecialization(string $specialization) : void {
            $this->specialization = $specialization;
        }

        public function getName() {
            return $this->name;
        }

        public function getBadges() {
            return $this->badges;
        }

        public function getSpecialization() : string {
            return $this->specialization;
        }

    }
?>