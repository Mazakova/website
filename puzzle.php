
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

	<div class="contentWrap">
		<div class="content">
			<div class="center">

				<h1>Игра Загадки</h1>

				<div class="box">

					<?php

						if(isset($GET_['userAnswer1']) && isset($GET_['userAnswer2']) && isset($GET_['userAnswer3'])){
							$userAnswer = $_GET["userAnswer1"];
							$score = 0;
							if ($userAnswer == "водопровод" || $userAnswer == "djljghjdjl"){
								$score++;

							};

							$userAnswer = $_GET["userAnswer2"];
							if ($userAnswer == "ножницы" || $userAnswer == "yj;ybws"){
								$score++;

							};

							$userAnswer = $_GET["userAnswer1"];
							if ($userAnswer == "крапива" || $userAnswer == "rhfgbdf"){
								$score++;

							};

							echo "Вы угадали: " . $score . " загадок";
						}
					?>

					<form method="GET">
				
						<p>Речка спятила с ума — По домам пошла сама.</p>
						<input type="text" name="userAnswer1">

						<p>Два конца, два кольца, Посредине гвоздик.</p>
						<input type="text" name="userAnswer2">

						<p>Не огонь, А жжется</p>
						<input type="text" name="userAnswer3">

						<br>
						<input type="submit" value="Ответить" name="">
					</form>

				</div>

			</div>
		</div>
	</div>
</div>

<div class="footer">
	Copyright &copy; Alexandra Mazakova
<div>


</body>
</html>
