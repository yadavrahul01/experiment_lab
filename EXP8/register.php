<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    
    if ($name == "" || $email == "" || $password == "" || $confirm_password == "") {
        echo "All fields are required!";
        exit();
    }

    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email!";
        exit();
    }

    
    if (strlen($password) < 6) {
        echo "Password must be at least 6 characters!";
        exit();
    }

    
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    echo "Registration Successful!";

} else {
    echo "Please submit the form first!";
}
?>