<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "UPDATE products 
        SET name='$name', price='$price', description='$description' 
        WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product Updated!";
} else {
    echo "Error: " . $conn->error;
}

header("Location: view_products.php");
?>