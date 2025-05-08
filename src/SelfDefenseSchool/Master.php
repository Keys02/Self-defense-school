<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    spl_autoload_register(function(string $file_name) {
        $path = str_replace('\\', '/', $file_name);
        require __DIR__ . "/$path.php";
    });

    class Master extends StudentMaster
    {
        public function __construct
        (
            string $id,
            string $name,
            string $specialization,
            string $weapon_of_choice,
            private int $rank,
        ) {
            parent::__construct($id, $name, $specialization, $weapon_of_choice);
            if($this->checkRank($rank)) {
                $this->rank = $rank;
            }
        }

        public function getRank() : int {
            return $this->rank;
        }

        private function checkRank(int $rank) : bool {
            if($rank < 0 && $rank > 5) {
                throw new \Exception("The rank range must be a number from 1-5");
                return false;
            }
            return true;
        }

        public function setRank(int $rank) : void {
            if($this->checkRank($rank)) {
                $this->rank = $rank;
            }
        }

        public function __toString() : string {
            return <<<MASTER_DETAILS
                        $this->name: {<br/>
                            &emsp;ID: $this->id<br/>
                            &emsp;Specialization: $this->specialization<br/>
                            &emsp;Weapon of choice: $this->weapon_of_choice<br/>
                            &emsp;Rank: $this->rank<br/>
                        }
                    MASTER_DETAILS;
        }
    }
?>