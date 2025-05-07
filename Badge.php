<?php
    namespace SelfDefenseSchool;
    
    class Badge
    {
        public function __construct(
            public string $badge_name,
            public string $fightStyle
        ) {}
    }
?>