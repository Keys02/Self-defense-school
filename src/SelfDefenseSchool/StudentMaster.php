<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    
    abstract class StudentMaster
    {
        public function __construct
        (
            protected string $id,
            protected string $name,
            protected string $specialization,
            protected string $weapon_of_choice,
        ){}


        /*--------------------------------
         *            Setters
        ---------------------------------*/
        public function setId(string $id) : void {
            $this->id = $id;
        }

        public function setName(string $name) : void {
            $this->name = $name;
        }

        public function setSpecialization(string $specialization) : void {
            $this->specialization = $specialization;
        }

        public function setWeaponOfChoice(string $weapon) {
            $this->weapon_of_choice = $weapon;
        }

        
        /*--------------------------------
         *            Getters
        ---------------------------------*/
        public function getId() : string {
            return $this->id;
        }

        public function getName() : string {
            return $this->name;
        }

        public function getSpecialization() : string {
            return $this->specialization;
        }

        public function getWeaponOfChoice() : string {
            return $this->weapon_of_choice;
        }
    }

?>