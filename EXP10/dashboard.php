<?php
include 'auth.php';
?>

<h2>Welcome to Dashboard</h2>

<?php
echo "Session User: " . $_SESSION['user'] . "<br>";

if (isset($_COOKIE['user'])) {
    echo "Cookie User: " . $_COOKIE['user'];
}
?>

<br><br>
<a href="logout.php">Logout</a>