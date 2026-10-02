<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "student_idea_portal";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>