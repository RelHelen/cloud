<?php
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Система оплаты ренты Сloud Rental</title> 

	<link rel="stylesheet" href="<?php echo $dir;?>css/reboot.css">
	<link rel="stylesheet" href="<?php echo $dir;?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo $dir;?>icons/style.css">
	<link rel="stylesheet" href="<?php echo $dir;?>css/style.css">
	<script src="<?php echo $dir;?>script/main.js" type="module"></script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]
-->

</head>
<body><div class="container cont_p">
	<header class="header">
		
			<nav class="nav-main">
				<div class="logo">
					<a href="index.php">
						<img class="logo__img" src="<?php echo $dir;?>img/logo.png" alt="">
					</a>
					<a href="index.php">
						<span class="logo__txt">cloud rental</span>
					</a>
				</div>				
				<div class="menu">
					<div class="menu-hamburger">
						  <input id="menu__toggle" type="checkbox" />
						  <label class="menu__btn" for="menu__toggle">
						    <span></span>
						  </label>
						  <ul class="menu__box">
						    <li>
						    	<a class="menu__item" href="#">Главная</a>
						    </li>
						    <li>
						    	<a class="menu__item" href="#">Проекты</a></li>
						    <li>
						    	<a class="menu__item" href="#">Команда</a></li>
						    <li>
						    	<a class="menu__item" href="#">Блог</a></li>
						    <li>
						    	<a class="menu__item" href="#">Контакты</a></li>
						  </ul>
					</div>
				</div>
			</nav>
		
	</header>
	<main class="main" id="main">