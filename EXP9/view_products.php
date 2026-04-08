<?php include 'db.php'; ?>


<div style="background:#333; padding:15px;">
    <a href="add_product.html" style="color:white; margin-right:20px;">Add Product</a>
    <a href="view_products.php" style="color:white;">View Products</a>
</div>

<h2>Product List</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>Description</th>
    <th>Actions</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM products");

while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['price']."</td>
            <td>".$row['description']."</td>
            <td>
                <a href='edit_product.php?id=".$row['id']."'>Edit</a> |
                <a href='delete_product.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?')\">Delete</a>
            </td>
          </tr>";
}
?>
</table>