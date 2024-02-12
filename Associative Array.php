<?php

// Create an associative array
$student_grades = array(
    "John" => array("Math" => 85, "English" => 90, "Science" => 80),
    "Emma" => array("Math" => 95, "English" => 85, "Science" => 90),
    "Kelly" => array("Math" => 75, "English" => 80, "Science" => 70)
);

// Accessing array elements
echo "John's Math grade: " . $student_grades["John"]["Math"] . "<br>";
echo "Emma's English grade: " . $student_grades["Emma"]["English"] . "<br>";
echo "Kelly's Science grade: " . $student_grades["Kelly"]["Science"] . "<br>";

// Modifying array elements
$student_grades["John"]["Math"] = 88;
echo "John's updated Math grade: " . $student_grades["John"]["Math"] . "<br>";

// Deleting array elements
unset($student_grades["Kelly"]);
echo "Kelly's grades have been deleted from the array.";

?>