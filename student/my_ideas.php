<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

include "db.php";

$student_id = $_SESSION["student_id"];

$sql = "SELECT * FROM ideas
        WHERE student_id = '$student_id'
        ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>My Submitted Ideas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>My Submitted Ideas</h1>

    <?php

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<h3>" . $row["title"] . "</h3>";

            echo "<p><b>Description:</b> "
                 . $row["description"] . "</p>";

            echo "<p><b>Category:</b> "
                 . $row["category"] . "</p>";

            echo "<p><b>Status:</b> "
                 . $row["status"] . "</p>";

            echo "<hr>";
        }

    } else {

        echo "<p>No ideas submitted yet.</p>";

    }

    ?>

</body>
</html>