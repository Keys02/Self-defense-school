<?php
    declare(strict_types = 1);

    require __DIR__ . "/Self-defense-school/Master.php";
    require __DIR__ . "/Self-defense-school/Student.php";
    require __DIR__ . "/Self-defense-school/Course.php";
    require __DIR__ . "/Self-defense-school/Badge.php";
    require __DIR__ . "/functions.php";

    use SelfDefenseSchool\Master;
    use SelfDefenseSchool\Student;
    use SelfDefenseSchool\Course;
    use SelfDefenseSchool\Badge;

    // Masters
    $master_shifu = new Master("1", "Master Shifu", "Kung fu", "stick", 5);
    $master_ong_bak = new Master("2", "Master Ong Bak", "Muay Thai", "Mai Sok", 5);
    $master_ryan_gordon = new Master("3", "Master Ryan Gordon", "Jiu Jitsu", "Katana", 4);
    $master_boyka = new Master("4", "Master Boyka", "Karate", "stick", 5);

    // Students
    $student_roy_lee = new Student("1", "Roy Lee", "Kung fu", "stick");

    // Badges
    $muay_thai_completion_badge = new Badge("Black belt in Muay Thai", true);
    $kung_fu_completion_badge = new Badge("Black belt in Kung fu", true);
    $muay_thai_fall_badge = new Badge("Badge of Completion");


    // Courses
    $muay_thai_fall = new Course("1", "Muay Thai fall", "Muay Thai", 25, $master_ong_bak, $muay_thai_completion_badge);
    $kung_fu_fall = new Course("2", "Kung fu fall", "Kung Fu", 45, $master_shifu, $kung_fu_completion_badge);

    // Testing classes
    $student_roy_lee->enrollCourse($muay_thai_fall);
    echo $student_roy_lee->getEnrolledCourses();
    newline();
    echo $student_roy_lee->getStudentBadges();
    $student_roy_lee->dropCourse($muay_thai_fall);
    echo $student_roy_lee->getEnrolledCourses();
?>