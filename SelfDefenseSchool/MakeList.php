<?php
    namespace SelfDefenseSchool;

    Trait MakeList {
        public function list(array $array_list) : string {
            $array_list_last_key = array_key_last($array_list);
            $made_list = "{";
            foreach($array_list as $key=>$value) {
                $made_list .= $value;
                if($key !== $array_list_last_key) {
                    $made_list .= ",";
                }
            }
            $made_list .= "}";
            return $made_list;
        }
    }
?>