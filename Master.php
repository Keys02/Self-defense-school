<?php
    Class Master {

        public function __construct(
            private string $name,  
            private int $skill_level,
            private string $weapon_of_choice = 'blade', 
        ) {}

        public static function teachKungFu(object $master, string $student_name) : string {
            return "Master {$master->name} is teaching $student_name Kung fu";
        }

        public static function teachMuayThai(object $master, string $student_name) : string {
            return "Master {$master->name} is teaching $student_name Muay Thai";
        }

        public function getSkillLevel() {
            return $this->skill_level;
        }

        public function getName() {
            return $this->name;
        }

        public function getWeaponOfChoice() {
            return $this->weapon_of_choice;
        }

        public function setSkillLevel(int $skill_level) : void {
            $this->skill_level = $skill_level;
        }

        public function setWeaponOfChoice(string $weapon) {
            $this->weapon_of_choice = $weapon;
        }
    }


    $master_shifu = new Master(name:'Shifu', skill_level:5);
    $master_yoda = new Master('Yoda', 4);

    echo Master::teachKungFu($master_yoda, "Chris");
    newline();
    echo Master::teachMuayThai($master_yoda, "Austin");
    newline();
?>