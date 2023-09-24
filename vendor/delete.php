<?php
$connect = mysqli_connect('localhost', 'root', '', 'mybd');
if(!$connect) {
    die('Ошибка подключения к БД');
}

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `apple` WHERE `apple`.`id` = '$id'");

header('Location: ../main.php');