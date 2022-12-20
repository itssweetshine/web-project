<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In</title>
    <link rel="icon" type="text/css" href="assets/icon.png">
    <link rel="stylesheet" href="home_page.css">
<body>

<?php
session_start();
include "app/include/header.php";
?>

<div class="grid-container">
    <div></div>
    <div class="main">
        <div class="form">
                <br><h1>Регистрация</h1>
                <form id="users" method="post" action="app/database/sign_up.php">
                    <div class="form-box"> <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="MaAiTe"></div>
                    <div class="form-box" err="">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com"></div>
                    <div class="form-box" err="">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="12sfv345fv6"></div>
                    <div class="grid-container2">
                        <button type="reset" name="cancel" id="cancel" class="send-form">Очистить</button>
                        <button type="submit" name="send" id="send" class="send-form">Зарегистрироваться</button>
                    </div>
                </form>
        </div>
    </div>
    <div></div>
</div>

<?php include("app/include/footer.php"); ?>

<script src="validation.js"></script>
</body>
</html>