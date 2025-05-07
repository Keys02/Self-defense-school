<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    Class Master extends StudentMaster
    {

        public function __construct(
            private string $id,
            private string $name,
            private string $specialization,
            private string $weapon_of_choice,
            private int $skill_level,
        ) {
            parent::__construct($id, $name, $specialization, $weapon_of_choice);
        }

        // public static function teachKungFu(object $master, string $student_name) : string {
        //     return "Master {$master->name} is teaching $student_name Kung fu";
        // }

        // public static function teachMuayThai(object $master, string $student_name) : string {
        //     return "Master {$master->name} is teaching $student_name Muay Thai";
        // }

        public function getSkillLevel() : int {
            return $this->skill_level;
        }

        public function setSkillLevel(int $skill_level) : void {
            $this->skill_level = $skill_level;
        }
    }
?>