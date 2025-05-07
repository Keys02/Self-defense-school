<?php
    declare(strict_types = 1);

    namespace SelfDefenseSchool;

    class Master extends StudentMaster
    {

        public function __construct(
            private string $id,
            private string $name,
            private string $specialization,
            private string $weapon_of_choice,
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

        private function checkRank($rank) : bool {
            if($rank >= 0 and $rank <= 5) {
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