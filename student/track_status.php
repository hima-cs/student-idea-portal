<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

include "db.php";

$student_id = $_SESSION["student_id"];

$sql = "SELECT title, category, status, created_at
        FROM ideas
        WHERE student_id = '$student_id'
        ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Track Idea Status</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Track Idea Status</h1>

    <?php

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<h3>" . $row["title"] . "</h3>";

            echo "<p><b>Category:</b> "
                 . $row["category"] . "</p>";

            echo "<p><b>Status:</b> "
                 . $row["status"] . "</p>";

            echo "<p><b>Submitted On:</b> "
                 . $row["created_at"] . "</p>";

            echo "<hr>";
        }

    } else {

        echo "<p>No ideas submitted yet.</p>";

    }

    ?>

</body>

</html>