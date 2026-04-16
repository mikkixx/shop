<?php 
include "header.php"; 
require_once "config.php";
$result = $conn->query("SELECT * FROM products");
$products = $result->fetch_all(MYSQLI_ASSOC);
?>

        <section class="popular-tovar">
            <h3>Наши товары</h3>
            <div class="add-tovar">
                <a href="form_add.php">Добавить товар</a>
            <div class="tovar-list">
                <?php foreach ($products as $product): ?>
                <div class="tovar-card">
                    <div class="tovar-img">
                        <img src="./img/<?php echo $product['photo']; ?>" alt="" width="300px">
                    </div>
                    <div class="tovar-info">
                        <p><?php echo $product["name"]; ?></p>
                        <a href="product.php?id=<?php echo $product['id']; ?>">Подробнее</a>
                        <a href="form_update.php?id=<?php echo $product['id']; ?>">Редактировать</a>
                        <a href="delete_product.php?id=<?php echo $product['id']; ?>" onclick="return confirm('Удалить товар?');">Удалить</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
<?php include "footer.php"; ?>