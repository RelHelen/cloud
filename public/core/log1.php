<?php
echo '<br>'.str_replace(basename($_SERVER["REQUEST_URI"]), '', $_SERVER["REQUEST_URI"]);

require_once __DIR__ . '/../config.php';
$dir='../';
//echo '$dir1='.$dir.'      ';
include SITE."/head.php";
//include(dirname(dirname(dirname(__FILE__))))."\head.php";
//echo (dirname(dirname(dirname(__FILE__))))."\head.php";
?>
<?php

if(!isset($_COOKIE['user'])):
//if($_COOKIE['user']==''):
?>
<form id="check" action="connect/check.php" class="form" method="POST">
<h2>Форма регистрации</h2>
    <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
    <input type="text" class="form-control" id="sname" name="sname" placeholder="Введите имя">
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Введите пароль">
    <!-- <input type="password" class="form-control" id="pass" name="pass" placeholder="Подтвердите пароль"> -->
    <button class="btn btn-success" type="submit">Регистрация</button>

</form>
<form id="auth" action="connect/auth.php" class="form" method="POST">
<h2>Форма авторизации</h2>
    <input type="text" class="form-control" id="login" name="login" placeholder="Введите логин">
    <input type="password" class="form-control" id="pass" name="pass" placeholder="Введите пароль">
    <!-- <input type="password" class="form-control" id="pass" name="pass" placeholder="Подтвердите пароль"> -->
    <button class="btn btn-success" type="submit">Войти</button>
</form>
<?php 
    else:
?>
<p>Привет, <?=$_COOKIE['user']?> <a href="connect/exit.php">Выйти</a></p>
 
<?php 
    endif;
?>
<?php include  SITE.'/footer.php'?>
