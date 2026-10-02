<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

    $student = mysqli_fetch_assoc($result);

    $_SESSION["student_id"] = $student["id"];
    $_SESSION["student_name"] = $student["name"];
    $_SESSION["student_email"] = $student["email"];

    header("Location: dashboard.php");
    exit();

}
 else {
        $message = "Invalid email or password.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Student Login</h1>

    <?php
    if ($message != "") {
        echo "<p>$message</p>";
    }
    ?>

    <form method="POST">

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>

    </form>

</body>
</html>