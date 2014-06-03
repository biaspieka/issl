<?php
include 'config.php';
$error="";
if (isset($_POST['submit'])) {
    $post = mysql_fetch_assoc(mysql_query("SELECT password FROM `administrators` WHERE `login`='" . mysql_real_escape_string($_POST['login']) . "' LIMIT 1"));
    if ($post['password'] === md5($_POST['password'])) {
        header("Location: index.php");
        exit();
    } else {
        $error = "Wrong user/password<br>";
    }
}
?>
<!--

<form method="POST">
    Login <input name="login" type="text"><br>
    Password <input name="password" type="password"><br>
    <input name="submit" type="submit" value="Enter">
</form>
-->

<html lang="ru">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="issl, айчына">
    <meta name="description" content="Интернет провайдер. issl.">
    <link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

    <title>Авторизация - issl.aplus.by</title>
</head>
<body>
<div class="container">
    <form class="form-signin" method="POST">
        <span class="label label-important"><?php echo $error;?></span>
        <h2 class="form-signin-heading">Авторизация</h2>
        <input type="text" name="login" class="input-block-level" placeholder="Логин" required pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
        <input type="password" name="password" class="input-block-level" placeholder="Пароль" required>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Запомнить меня
        </label>
        <button class="btn btn-large btn-primary" name="submit" type="submit">Войти</button>
    </form>
</div>
</body>
</html> 