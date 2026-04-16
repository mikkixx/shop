<?php
include "header.php";
require_once "./config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name_product = $_POST['name'] ?? '';
    $price_product = floatval($_POST['price'] ?? 0);
    $description_product = $_POST['description'] ?? '';

    $photoPath = ''; 

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileName = time() . '_' . basename($_FILES['image']['name']);
        $photoPath = "img/" . $fileName; 
        
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . "/" . $photoPath);
    }

    $conn->query("INSERT INTO `products`(`name`, `price`, `description`, `photo`) VALUES ('$name_product', '$price_product', '$description_product', '$photoPath')");

    header("Location: index.php");
    exit;
}
?>

<main class="p-4">
    <h2>Добавить товар</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название товара</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Цена товара</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Описание товара</label>
            <textarea name="description" id="" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Картинка товара</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn1">Создать товар</button>
    </form>
    <a href="index.php" class="back-link">Назад к списку товаров</a>
</main>
<?php
include "footer.php";
?>