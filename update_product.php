<?php
require_once "config.php";

$id = $_GET['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$result = $conn->query("SELECT * FROM `products` WHERE id=$id");
$product = $result->fetch_assoc();

if ($_FILES['image']['name'] != ""){
    $image = $_FILES['image'];
    $fileName = $image['name'];
    move_uploaded_file($image['tmp_name'], "./img/$fileName");
    $conn->query("
        UPDATE `products` 
        SET `name`='$name',
            `price`='$price',
            `description`='$description',
            `photo`='$fileName' 
        WHERE id=$id
    ");
} else {
        $conn->query("
            UPDATE `products` 
            SET `name`='$name',
                `price`='$price',
                `description`='$description'
            WHERE id=$id
        ");
}
header("Location: index.php");
exit;
?>