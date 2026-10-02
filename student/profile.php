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
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>My Profile</h1>

    <p>Name: Anu</p>
    <p>Email: anu@gmail.com</p>

</body>
</html>