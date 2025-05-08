<?php
    namespace SelfDefenseSchool;

    Trait MakeList {
        public function list(array $array_list, string $list_type) : string {
            $array_list_last_key = array_key_last($array_list);
            $made_list = "{";
            
            foreach($array_list as $key=>$value) {
                switch($list_type) {
                    case "courses name";
                        $made_list .= $value->getCourseName();
                        break;
                    case "badges";
                        $made_list .= $value->getBadgeName();
                        break;
                    case "students name";
                        $made_list .= $value->getName();
                        break;
                }
                if($key !== $array_list_last_key) {
                    $made_list .= ", ";
                }
            }

            $made_list .= "}";
            return $made_list;
        }
    }
?>