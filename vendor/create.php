<?php
$connect = mysqli_connect('localhost', 'root', '', 'mybd');
if(!$connect) {
    die('Ошибка подключения к БД');
}
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "INSERT INTO `apple` (`id`, `title`, `discription`, `price`) VALUES (NULL, '$title', '$description', '$price')");

header('Location: ../main.php');