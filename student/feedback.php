<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

include "db.php";

$student_id = $_SESSION["student_id"];

$sql = "SELECT ideas.title, ideas.status, feedback.message, feedback.created_at
        FROM feedback
        INNER JOIN ideas ON feedback.idea_id = ideas.id
        WHERE ideas.student_id = '$student_id'
        ORDER BY feedback.created_at DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Faculty Feedback</h1>

    <?php

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<h3>" . $row["title"] . "</h3>";

            echo "<p><b>Status:</b> "
                 . $row["status"] . "</p>";

            echo "<p><b>Feedback:</b> "
                 . $row["message"] . "</p>";

            echo "<p><b>Date:</b> "
                 . $row["created_at"] . "</p>";

            echo "<hr>";
        }

    } else {

        echo "<p>No feedback available yet.</p>";

    }

    ?>

</body>
</html>