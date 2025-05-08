## Learning Object Oriented Programming(OOP) by building a Self Defense School Project
### Applied Concepts and Techniques
#### 1. Object Type Control  
- Define interface for classes so when their instances are passed as argument in methods, it can be check whether the method being called in the method body exists.  
  
    ```php
    //BadgeToCourse trait
        namespace SelfDefenseSchool;

        interface BadgeToCourseManager
        {
            public function setBadgeCourseName(Course $course) : void;
        }
        
    //Inside Course class
        private function assignBadge(BadgeToCourseManager $badge) {
            if($badge instanceof Badge) {
                $this->course_badge = $badge;
                $badge->setBadgeCourseName($this);
            }
        }
    ```
    **Pros**:  This prevent classes inheriting Course class from being passed as argument in assignBadge method

### 2. Using traits  
- Used trait to for enumerating array element containing objects as list.
    ``` php
    // MakeList trait
    Trait MakeList 
    {
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

    //Inside course class
    public function getEnrolledStudents() : string {
            $enrolled_students_list = "$this->course_name enrolled students: {$this->list($this->students_taking_course, "students name")}";
            return $enrolled_students_list;
    }

    //Inside student class
    public function getEnrolledCourses() : string {
            $enrolled_courses_list  = "$this->name enrolled courses: {$this->list($this->enrolled_courses, "courses name")}";
            return $enrolled_courses_list;
    }

    public function getStudentBadges() : string {
            $badgeList = "$this->name badges: {$this->list($this->badges, "badges")}";
            return $badgeList;
    }
    ```
### Browser screenshot
![Screenshot](screenshots/chrome_Op89hrnuJn.png)

**Author**: Keys🚀