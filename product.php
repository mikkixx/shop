<?php 
include "header.php"; 
require_once "config.php";

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM `products` WHERE id=$id");
$product = $result->fetch_assoc();
?>

        <section class="product-page">
            <div class="tovar-img-page">
                <img src="./img/<?php echo $product['photo']; ?>" alt="" width="500px">
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