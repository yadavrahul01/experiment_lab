<?php
include 'db.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();
?>


<div style="background:#333; padding:15px;">
    <a href="add_product.html" style="color:white; margin-right:20px;">Add Product</a>
    <a href="view_products.php" style="color:white;">View Products</a>
</div>

<h2>Edit Product</h2>

<form action="update_product.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Price: <input type="text" name="price" value="<?php echo $row['price']; ?>"><br><br>
    Description: <textarea name="description"><?php echo $row['description']; ?></textarea><br><br>

    <input type="submit" value="Update">
</form>