<?php
$user = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$card = $_POST['card'];
$address = $_POST['address'];

$mysql = new mysqli('localhost', 'root', 'mysql','web_project');
$mysql -> query("INSERT INTO `orders`(`username`, `email`, `card`, `password`, `address`) VALUES ('$user','$email','$card','$password','$address')");
$mysql -> close();

echo "Заказ успешно принят!";
?>
