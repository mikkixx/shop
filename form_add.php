<?php 
include "header.php"; 
require_once "config.php";
?>

<main class="p-4">
    <h2>Добавить товар</h2>
    <form action="add_product.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Название товара</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name">
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

<?php include "footer.php"; ?>