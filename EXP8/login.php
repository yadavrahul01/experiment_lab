<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    $stored_email = "admin@gmail.com";
    $stored_password = "yadav123456";

    if ($email === $stored_email && $password === $stored_password) {
        $_SESSION['user'] = $email;
        echo "Login Successful!";
    } else {
        echo "Invalid Email or Password!";
    }

} else {
    echo "Invalid Request!";
}
?>