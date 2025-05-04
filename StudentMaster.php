<?php
    namespace self_defence_school;

    class StudentMaster
    {
        public function __construct
        (
            private string $id,
            private string $specialization,
            private string $weapon_of_choice,
        ){}

        public function setId(string $id) : void {
            $this->id = $id;
        }

        public function setSpecialization(string $specialization) : void {
            $this->specialization = $specialization;
        }

        public function setWeaponOfChoice(string $weapon) {
            $this->weapon_of_choice = $weapon;
        }

        public function getId(string $id) : string {
            return $this->id;
        }

        public function getSpecialization() : string {
            return $this->specialization;
        }

        public function getWeaponOfChoice() : string {
            return $this->weapon_of_choice;
        }
    }

?>