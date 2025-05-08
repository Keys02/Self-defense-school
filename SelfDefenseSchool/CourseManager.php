<?php
    namespace SelfDefenseSchool;

    interface CourseManager {
        public function getCourseName() : string;
        public function getCourseMaster() : object;
        public function addStudent(Student $student) : void;
    }
?>