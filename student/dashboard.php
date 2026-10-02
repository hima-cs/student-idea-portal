<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Student Dashboard</h1>

    <p>Welcome to the Student Idea Portal!</p>

    <h3>Student Menu</h3>

    <ul>
        <li><a href="profile.php">My Profile</a></li>
        <li><a href="submit_idea.php">Submit New Idea</a></li>
        <li><a href="upload_document.php">Upload Document</a></li>
        <li><a href="my_ideas.php">My Submitted Ideas</a></li>
        <li><a href="track_status.php">Track Idea Status</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>

</body>
</html>