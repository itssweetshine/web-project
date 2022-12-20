<?php

$user = filter_var(trim($_POST['username']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),FILTER_SANITIZE_STRING);

$password = md5($password."cvbynuim96");

$mysql = new mysqli('localhost', 'root', 'mysql','web_project');
$mysql -> query("INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$user','$email','$password')");
$mysql -> close();


echo 'Регистрация прошла успешна! Можете выбрать товары для <a href="home_page.php">корзины</a>. ';

?>
