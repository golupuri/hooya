<?php
// Get the form data
$name = $_GET['name'];
// echo gettype($name_);
$student_id = $_GET['student_id'];
$ese_marks1 = $_GET['ese_marks1'];
$mse_marks2 = $_GET['mse_marks2'];
$mse_marks1 = $_GET['mse_marks1'];
$ese_marks2 = $_GET['ese_marks2'];
$mse_marks3 = $_GET['mse_marks3'];
$ese_marks3 = $_GET['ese_marks3'];
$mse_marks4 = $_GET['mse_marks4'];
$ese_marks4 = $_GET['ese_marks4'];

// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the data into the database
$sql = "INSERT INTO `student` (`student_id`, `name`, `mse_marks1`, `mse_marks2`, `mse_marks3`, `mse_marks4`, `ese_marks1`, `ese_marks2`, `ese_marks3`, `ese_marks4`) VALUES ('$student_id', '$name', '$mse_marks1', '$mse_marks2', '$mse_marks3', '$mse_marks4', '$ese_marks1', '$ese_marks2', '$ese_marks3', '$ese_marks4');";
// echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "Results added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

