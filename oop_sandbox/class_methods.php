<?php

class Student {

  var $first_name;
  var $last_name;
  var $country = 'None';

  function say_hello($student_name) {
    return "Hello {$student_name}!";
  }

  function fullname($student_name) {
    return $student_name->first_name . ' ' . $student_name->last_name;
  }

}

$student1 = new Student;
$student1->first_name = 'Lucy';
$student1->last_name = 'Fernandez';
$student1_full_name = $student1->first_name . ' ' . $student1->last_name;
$student2 = new Student;
$student2->first_name = 'Ethel';
$student2->last_name = 'Meyer';
$student2_full_name = $student2->first_name . ' ' . $student2->last_name;

echo $student1->first_name . " " . $student1->last_name . "<br />";
echo $student2->first_name . " " . $student2->last_name . "<br />";

echo $student1->say_hello($student1_full_name) . "<br />";
echo $student2->say_hello($student2_full_name) . "<br />";

$class_methods = get_class_methods('Student');
echo "Class methods: " . implode(', ', $class_methods) . "<br />";

if(method_exists('Student', 'say_hello')) {
  echo "Method say_hello() exists in Student class.<br />";
} else {
  echo "Method say_hello() does not exist in Student class.<br />";
}
?>