<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Интернет-магазин "Мир цветов"</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <a href="index.html"><img src="image/logo.png" alt="Мир цветов" title="Интернет магазин 'Мир цветов'"></a>
    <img class="cart" src="image/cart.png" alt="Корзина" title="Корзина">
    <nav>
        <ul id="menu">
            <li><a href="index.html">Главная</a></li>
            <li><a href="catalog.html">Каталог</a></li>
            <li><a href="about.html">Контакты</a></li>
        </ul>
    </nav>
</header>
<?php
    echo "Hello, World!<br>";
    $date = date(Y);
    echo $date.'<br>';
    var_dump($date);
    echo '<pre>';
    $product = [1, 'Роза белая', 'Описание белой розы', 'image/rose-white.png', '100 руб.'];
    var_dump($product);
    echo '</pre>';
    echo $product[4];

    echo '<hr>';

    $page = $_GET['page'];
    if (!isset($page)) {
        echo 'Это главная страница';
    } elseif ($page == 'shop') {
        echo 'Это страница магазина';
    }
?>

<!--
<section>
    <h1>Приветствуем Вас в интернет магазине "Мир цветов"</h1><hr>
    <h2 class="popular_title">Самые популярные букеты</h2>
    <div class="product_block">
        <a href="rose_white.html"><div class="img_product_block">
                <img src="image/17988.jpg" alt="Роза белая">
            </div>
            <h3>Роза белая</h3></a>
    </div>
    <div class="product_block">
        <div class="img_product_block">
            <img src="image/17582.jpg" alt="Роза желтая">
        </div>
        <h3>Роза желтая</h3>
    </div>
    <div class="product_block">
        <div class="img_product_block">
            <img src="image/18128.jpg" alt="Роза красная">
        </div>
        <h3>Роза красная</h3>
    </div>
</section>-->
<footer>
    <p>Copyright &#169; 2016 Интернет-магазин "Мир цветов"</p>
</footer>
</body>
</html>
