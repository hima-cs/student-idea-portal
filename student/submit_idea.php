
<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_SESSION["student_id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];

    $sql = "INSERT INTO ideas (student_id, title, description, category)
            VALUES ('$student_id', '$title', '$description', '$category')";

    if (mysqli_query($conn, $sql)) {
        $message = "Idea submitted successfully!";
    } else {
        $message = "Submission failed: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit New Idea</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Submit New Idea</h1>

    <?php

    if ($message != "") {
        echo "<p>$message</p>";
    }

    ?>

    <form method="POST">

        <label>Idea Title:</label><br>
        <input type="text" name="title" required><br><br>

        <label>Idea Description:</label><br>
        <textarea name="description" rows="6" cols="40" required></textarea><br><br>

        <label>Category:</label><br>

        <select name="category" required>
            <option value="">Select Category</option>
            <option value="Technology">Technology</option>
            <option value="Education">Education</option>
            <option value="Environment">Environment</option>
            <option value="Other">Other</option>
        </select>

        <br><br>

        <button type="submit">Submit Idea</button>

    </form>

</body>
</html>