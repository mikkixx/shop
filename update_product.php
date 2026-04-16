<?php
include "header.php";
require_once "./config.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    if (!empty($_FILES['image']['name'])) {
    $fileName = time() . '_' . basename($_FILES['image']['name']);
    $filePath = "img/" . $fileName; 
    
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/" . $filePath);

    $conn->query("
        UPDATE `products` 
        SET `name`='$name',
            `price`='$price',
            `description`='$description',
            `photo`='$filePath' 
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
}
?>

<main class="p-4">
    <h2>Редактирование товара</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название товара</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="<?php echo $product['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Цена товара</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="price" value="<?php echo $product['price']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Описание товара</label>
            <textarea name="description" id="" class="form-control"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Картинка товара</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn1">Сохранить</button>
    </form>
    <a href="index.php" class="back-link">Назад к списку товаров</a>
</main>
<?php
include "footer.php";
?>