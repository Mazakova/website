
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт студента GeekBrains</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
	
	<?php
		include "menu.php";
	?>

	<h1>Мазакова Александра</h1>

	<div class="center">
	<img src="img/photo.jpg">
		<div class="box_text">
			<p><b>Добрый день</b>. Меня зовут <i>Мазакова Александра</i>. Я ищу работу в сфере Тестирования ПО. Для успешного старта на этой должности, я прохожу различные курсы по Тестированию, работе с БД, Git и Postman, также в процессе обучения, я освоила базовые навыки программирования и уже написала свой первый сайт.</p>

			<p>В этом мне помог IT-портал <a href="https://geekbrains.ru">GeekBrains</a></p>

			<p>Предлагаю вам сыграть в несколько игр, которые я написала с использованием языков программирования JavaScript и PHP: <br>
			<a href="puzzle.php">Загадки</a>,
			<a href="guess.html">Угадайка</a>
			</p>
		</div>
	</div>
</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Alexandra Mazakova
<div>


</body>
</html>
