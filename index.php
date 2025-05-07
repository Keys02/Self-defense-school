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

    $master_shifu = new Master("1", "Master Shifu", "Kung fu", "stick", 5);
    $student_roy_lee = new Student("1", "Roy Lee", "Kung fu", "stick");
    $muay_thai_fall = new Course("1", "Muay Thai fall", "Muay Thai", 25, $master_shifu);
    $muay_thai_completion_badge = new Badge("Black belt in Muay Thai", $muay_thai_fall);

    $student_roy_lee->enrollCourse($muay_thai_fall);
    echo $student_roy_lee->getEnrolledCourses();
    newline();
    echo $student_roy_lee->getStudentBadges();
    $student_roy_lee->dropCourse($muay_thai_fall);
    echo $student_roy_lee->getEnrolledCourses();
?>