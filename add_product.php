<?php
require "config.php";

$name_product = $_POST['name'];
$price_product = $_POST['price'];
$description_product = $_POST['description'];

$image_product = $_FILES['image'];
$newFileName = $image_product['name'];
move_uploaded_file($image_product['tmp_name'], "./img/$newFileName");

$conn->query("INSERT INTO `products`(`name`, `price`, `description`, `photo`) VALUES ('$name_product', '$price_product', '$description_product', '$newFileName')");

header("Location: index.php");
exit;
?>