<?php
$connect = mysqli_connect('localhost', 'root', '', 'mybd');
if(!$connect) {
    die('Ошибка подключения к БД');
}
$id = $_POST['id'];
$title = $_POST['title'];
$price = $_POST['price'];
$description = $_POST['description'];

mysqli_query($connect, "UPDATE `apple` SET `title` = '$title', `discription` = '$description', `price` = '$price' WHERE `apple`.`id` = '$id'");

header('Location: ../main.php');