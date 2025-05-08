<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    include __DIR__ . "/StudentMaster.php";
    include __DIR__ . "/MakeList.php";

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
    }
?>