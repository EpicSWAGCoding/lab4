<?php
$connect = mysqli_connect('localhost', 'root', '', 'mybd');
if(!$connect) {
    die('Ошибка подключения к БД');
}
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `apple` WHERE `id`='$product_id'");
$product = mysqli_fetch_assoc($product);
//print_r($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Обновление товара</title>
</head>
<body>

<a href="/main.php">Главная</a>
<hr>

<h2>Обновить товар</h2>
<form action="vendor/updata.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <p>Название</p>
    <input type="text" name="title" value="<?= $product['title'] ?>">
    <p>Описание</p>
    <textarea name="description"><?= $product['discription'] ?></textarea>
    <p>Цена</p>
    <input type="number" name="price" value="<?= $product['price'] ?>">
    <button type="submit">Обновить</button>
</form>

</body>
</html>