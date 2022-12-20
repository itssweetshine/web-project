<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Basket</title>
    <link rel="icon" type="text/css" href="assets/icon.png">
    <link rel="stylesheet" href="home_page.css">
</head>
<body>

<?php include("app/include/header.php"); ?>

<div class="grid-container">
    <div></div>
    <div class="main">
        <div class="form">
            <br><br><h1></h1>
            <form id="users" method="post" action="app/database/sign_in.php">
                <div class="form-box"> <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="MaAiTe"></div>
                <div class="form-box" err="">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@gmail.com"></div>
                <div class="form-box" err="">
                    <label for="card">Card</label>
                    <input type="text" id="card" name="card" placeholder="**** **** **** 8591"></div>
                <div class="form-box" err="">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="12ad34dd56"></div>
                <div class="form-box" err="">
                    <label for="address">Email</label>
                    <input type="text" id="address" name="address" placeholder="st.Abay 8"></div>
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
