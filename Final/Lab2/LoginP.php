<?php

if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: LoginH.html?error=Invalid email format");
        exit();
    }

    if (empty($email) || empty($password)) {
        header("Location: LoginH.html?error=Email and password cannot be empty");
        exit();
    }

    //header("Location: dashboard.php");
    exit();
}
?>
