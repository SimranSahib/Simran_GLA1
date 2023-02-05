<?php

include "connection.php";

echo "<br>"."1.";

function get_students()
{
    global $conn;

    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    $students = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $students[] = $row;
    }

    return $students;
}

$students = get_students();

foreach ($students as $student) {
    echo "<br>"."ID: " . $student["id"] . "|| Name: " . $student["student_name"] . "|| Age: " . $student["student_age"] . "<br>";
}

echo "<br>"."2.";


function get_student($id = 0) {
    global $conn;
   $sql = "SELECT * FROM students WHERE id = $id";
   
   $result = mysqli_query($conn, $sql);
   
   if (mysqli_num_rows($result) > 0) {
      return mysqli_fetch_assoc($result);
   } else {
      return false;
   }
}

$student_id = 0;
$student = get_student($student_id);

if ($student) {
  echo "<br>"."Student record found:<br>";
  echo "ID: " . $student['id'] . "<br>";
  echo "Name: " . $student['student_name'] . "<br>";
  echo "age: " . $student['student_age'] . "<br>";
  echo "Number: " . $student['student_number'] . "<br>";

} else {
  echo "<br>"."Student record not found.";
}



function insert_student($name, $email) {
    global $conn;
   $sql = "INSERT INTO students (student_name, student_age) VALUES ('$name', '$email')";
   
   if (mysqli_query($conn, $sql)) {
      return mysqli_insert_id($conn);
   } else {
      return false;
   }
}

$student_name = "Jasneet";
$student_age = "25";
$student_id = insert_student($student_name, $student_age);

if ($student_id) {
  echo "Student inserted successfully. ID: $student_id";
} else {
  echo "Student insertion failed.";
}

?>
