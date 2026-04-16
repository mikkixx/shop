<?php
$conn = new mysqli("localhost", "root", "", "electronic-shop");
$conn->set_charset("utf8mb4");
$result = $conn->query("SELECT * FROM products");
$products = $result->fetch_all(MYSQLI_ASSOC);
?>