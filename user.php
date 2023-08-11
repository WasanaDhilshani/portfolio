<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phoneNumber"];
    $password_hash = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $gender = $_POST["gender"];

    // Validation checks here (similar to your existing code)

    if ($password_hash !== $confirmPassword) {
        die("Passwords must match");
    }

     // Database credentials
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'portfoliodb';

    // Create a mysqli connection
    $mysqli = new mysqli($host, $username, $password, $database);


   

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $sql = "INSERT INTO users (fullName, email, phoneNumber, password_hash, gender)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $mysqli->prepare($sql);

    if (!$stmt) {
        die("SQL error: " . $mysqli->error);
    }

    $stmt->bind_param("sssss", $fullName, $email, $phoneNumber, $password_hash, $gender);

    if ($stmt->execute()) {
        header("Location: index.html");
        exit;
    } else {
        if ($mysqli->errno === 1062) {
            die("Email already taken");
        } else {
            die("Database error: " . $mysqli->error);
        }
    }

    $stmt->close();
    $mysqli->close();
}
?>
<!-- Your HTML form here -->
