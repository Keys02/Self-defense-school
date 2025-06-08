<?php
    declare(strict_types = 1);
    
    require __DIR__ . "/functions.php";

    spl_autoload_register(function(string $class_name) {
        $path = str_replace('\\', '/', $class_name);
        require __DIR__ . "/src/$path.php";
    });

    use SelfDefenseSchool\Master;
    use SelfDefenseSchool\Student;
    use SelfDefenseSchool\Course;
    use SelfDefenseSchool\Badge;

    // Masters
    $master_shifu = new Master("1", "Master Shifu", "Kung fu", "stick", 5);
    $master_ong_bak = new Master(id:"2", name: "Master Ong Bak", specialization: "Muay Thai", weapon_of_choice: "Mai Sok", rank:5);
    $master_ryan_gordon = new Master("3", "Master Ryan Gordon", "Jiu Jitsu", "Katana", 4);
    $master_boyka = new Master("4", "Master Boyka", "Karate", "stick", 5);


    // Students
    $student_roy_lee = new Student("1", "Roy Lee", "Kung fu", "stick");
    $student_chris = new Student("2", "Opoku Chris", "Muay Thai", "Nunchaku");

    // Badges
    $muay_thai_completion_badge = new Badge("1", "Black belt in Muay Thai");
    $kung_fu_completion_badge = new Badge("2", "Black belt in Kung fu");
    $muay_thai_fall_badge = new Badge("3", "Muay Thai Badge of Completion");


    // Courses
    $muay_thai_fall = new Course("1", "Muay Thai fall", "Muay Thai", 8760, $master_ong_bak, $muay_thai_completion_badge);
    $kung_fu_fall = new Course("2", "Kung fu fall", "Kung Fu", 8760 , $master_shifu, $kung_fu_completion_badge);


    // Testing Roy Lee Student object
    $student_roy_lee->enrollCourse($kung_fu_fall);
    $student_roy_lee->enrollCourse($muay_thai_fall);
    $student_roy_lee->assignBadge($muay_thai_fall_badge);

    // Testing Opoku Chris Student object
    echo "<h1 style='margin:0; padding:0'>Self Defense School</h1>";
    $student_chris->enrollCourse($muay_thai_fall);
    
    // Echo statements
    newline();
    echo $muay_thai_fall;
    newline();
    newline();
    echo $muay_thai_fall_badge;
    newline();
    newline();
    echo $kung_fu_completion_badge;
    newline();  
    $student_roy_lee->dropCourse($muay_thai_fall);
    newline();
    echo $master_boyka;
    newline();
    newline();
    echo $student_chris;
    newline();
    newline();
    echo $student_roy_lee;
?>