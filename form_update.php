<?php 
include "header.php"; 
require "config.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM `products` WHERE id=$id");
$product = $result->fetch_assoc();
?>

<main class="p-4">
    <h2>Редактирование товара</h2>
    <form action="update_product.php?id=<?php echo $product['id']?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название товара</label>
            <input type="text" class="form-control" name="name" value="<?php echo $product['name']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Цена товара</label>
            <input type="number" class="form-control" name="price" value="<?php echo $product['price']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Описание товара</label>
            <textarea name="description" class="form-control"><?php echo $product['description']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Картинка товара</label>
            <input type="file" class="form-control" name="image">
        </div>
        <button type="submit" class="btn1">Сохранить</button>
    </form>
    <a href="index.php" class="back-link">Назад к списку товаров</a>
</main>

<?php include "footer.php"; ?>