<?php
require_once "Student.php"; 

$student = new Student("Fahim Hossain", "12345", "2025");
echo $student->saveToFile();
?>