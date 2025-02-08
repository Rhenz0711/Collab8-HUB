<?php
session_start();
require_once 'dbh.inc.php';

if (isset($_POST['username_or_email'], $_POST['pwd'])) {
    $input = trim($_POST['username_or_email']); // User can enter either username or email
    $password = $_POST['pwd'];

    // SQL Query: Check if input matches username OR email
    $sql = "SELECT * FROM users WHERE username = :input OR email = :input";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':input' => $input]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if (password_verify($password, $row['pwd'])) {
            $_SESSION['userId'] = $row['id'];
            $_SESSION['userName'] = $row['username'];
            $_SESSION['message'] = "Login successful!";
            $_SESSION['msg_type'] = "success";

            header("Location: ../index.php");
            exit();
        } else {
            $_SESSION['message'] = "Incorrect password. Please try again.";
            $_SESSION['msg_type'] = "error";
        }
    } else {
        $_SESSION['message'] = "No account found with that username or email.";
        $_SESSION['msg_type'] = "error";
    }
} else {
    $_SESSION['message'] = "Invalid access.";
    $_SESSION['msg_type'] = "error";
}

// Redirect to homepage with an error message
header("Location: ../index.php");
exit();
?>
