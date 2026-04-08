<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if (empty($name) || empty($price)) {
        echo "Name and Price are required!";
        exit();
    }

    $sql = "INSERT INTO products (name, price, description) 
            VALUES ('$name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "Product Added Successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>