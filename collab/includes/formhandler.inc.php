<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_username = $_POST["username"];
    $_email    = $_POST["email"];
    $_password = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        // Hash the password using password_hash()
        $hashedPassword = password_hash($_password, PASSWORD_DEFAULT);

        // Prepare the SQL statement using the hashed password
        $query = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$_username, $_email, $hashedPassword]);

        // Clean up
        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");
        exit();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>
