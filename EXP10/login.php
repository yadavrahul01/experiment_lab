<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username == "admin" && $password == "1234") {

        
        $_SESSION['user'] = $username;

        
        setcookie("user", $username, time() + 3600);

        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid Login!";
    }
}
?>