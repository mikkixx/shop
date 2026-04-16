<?php 
include "header.php"; 
require_once "config.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id <= 0) {
    echo '<p style="text-align:center; margin-top:50px;">Товар не найден. <a href="catalog.php">Вернуться в каталог</a></p>';
    include "footer.php";
    exit;
}

$query = "SELECT * FROM products WHERE id = " . $id;
$result = $conn->query($query);
$product = $result->fetch_assoc();

if (!$product) {
    echo '<p style="text-align:center; margin-top:50px;">Товар не найден. <a href="catalog.php">Вернуться в каталог</a></p>';
    include "footer.php";
    exit;
}
?>

        <section class="product-page">
            <div class="tovar-img-page">
                <img src="<?php echo $product['photo']; ?>" alt="" width="300px">
            </div>
            <div class="tovar-info-page">
                <h1><?php echo $product['name']; ?></h1>
                <p>Описание</p>
                <p><?php echo $product['description']; ?></p>
                <div class="price">
                    <p><?php echo $product['price']; ?> руб</p>
                </div>
                <button id="buyBtn">Купить</button>
            </div>
        </section>
    <script>
        const btn = document.getElementById('buyBtn')
        btn.addEventListener('click', (e)=>{
            alert('Поздравляем с покупакой!')
        })
    </script>

<?php include "footer.php"; ?>