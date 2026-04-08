<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product Deleted!";
} else {
    echo "Error: " . $conn->error;
}

header("Location: view_products.php");
?>