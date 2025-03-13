<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_ids = $_POST['student_id'];
    $teacher_id = $_POST["teacher_id"];
    $statuses = $_POST['status'];
    $sname = $_POST['sname'];
    $course = $_POST["course"];
    $class = $_POST["class"];
    $subject = $_POST["sub"];
    $attendance_date = date("d-m-Y");  // Use Y-m-d format for storing in database
    
    // Prepared Statement to Insert Data
    $stmt = $con->prepare("INSERT INTO student_attendance (attendance_date,teacher_id, student_id, sname, course, class, subject, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
    if ($stmt === false) {
        // Error checking for prepared statement
        echo "Error preparing statement: " . $con->error;
        exit();
    }

    // Loop through each student and insert their attendance
    for ($i = 0; $i < count($student_ids); $i++) {
        // Bind parameters: attendance_date (s), student_id (i), course (s), class (s), status (s)
        $stmt->bind_param("siisssss", $attendance_date,$teacher_id, $student_ids[$i], $sname[$i], $course, $class, $subject, $statuses[$i]);

        // Execute the prepared statement
        if ($stmt->execute() === false) {
            echo "Error executing query: " . $stmt->error;
            exit(); // You might want to log the error and continue here instead of exiting immediately
        }
    }

    // On successful execution, show an alert and redirect
    echo "<script> alert('Attendance Marked Successfully!'); window.location.href='AP.php'; </script>";
}
?>
