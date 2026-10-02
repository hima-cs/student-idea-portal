<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

include "db.php";

$student_id = $_SESSION["student_id"];
$message = "";

// Get student's ideas
$sql = "SELECT id, title FROM ideas
        WHERE student_id = '$student_id'
        ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);


// Handle upload
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idea_id = $_POST["idea_id"];

    // Check whether this idea belongs to logged-in student
    $check_sql = "SELECT id FROM ideas
                  WHERE id = '$idea_id'
                  AND student_id = '$student_id'";

    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) == 1) {

        if (isset($_FILES["document"]) && $_FILES["document"]["error"] == 0) {

            $file_name = $_FILES["document"]["name"];
            $tmp_name = $_FILES["document"]["tmp_name"];

            $upload_folder = "uploads/";

            $file_path = $upload_folder . time() . "_" . $file_name;

            if (move_uploaded_file($tmp_name, $file_path)) {

                $sql = "INSERT INTO documents
                        (idea_id, file_name, file_path)
                        VALUES
                        ('$idea_id', '$file_name', '$file_path')";

                if (mysqli_query($conn, $sql)) {

                    $message = "Document uploaded successfully!";

                } else {

                    $message = "Database error: " . mysqli_error($conn);

                }

            } else {

                $message = "File upload failed.";

            }

        } else {

            $message = "Please select a file.";

        }

    } else {

        $message = "Invalid idea selected.";

    }
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Upload Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <h1>Upload Document</h1>

    <?php

    if ($message != "") {
        echo "<p>$message</p>";
    }

    ?>

    <form method="POST" enctype="multipart/form-data">

        <label>Select Your Idea:</label><br>

        <select name="idea_id" required>

            <option value="">Select Idea</option>

            <?php

            while ($row = mysqli_fetch_assoc($result)) {

                echo "<option value='" . $row["id"] . "'>"
                     . $row["title"] .
                     "</option>";

            }

            ?>

        </select>

        <br><br>

        <label>Select Document:</label><br>

        <input type="file" name="document" required>

        <br><br>

        <button type="submit">Upload Document</button>

    </form>

</body>

</html>