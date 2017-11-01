<?php
	$countOfEnters = 0;
	if (isset($_COOKIE['countOfEnters']))
	{
		$countOfEnters = $_COOKIE['countOfEnters'];
	}
	// чтоб счётчик не накручивался при каждом обновлении странички, следует в куки
	// писать время последнего обновления
	$parts = explode('/', $_SERVER['REDIRECT_URL']);
	switch ($parts[1])
	{
		case "":
			setcookie('countOfEnters', $countOfEnters+=1);
		break;
		
		case "get_city":
		break;
		
		default:
			$content = $parts[1].'.php';
		break;
	}
	if ($_GET['towns'] != null)
	{
		$towns[0] = "Омск";
		$towns[1] = "Красноярск";
		echo json_encode($towns);
	}
	date_default_timezone_set("Asia/Omsk");
	setlocale(LC_ALL, "RUS");
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	switch((int)strftime('%H'))
	{
		case 0: case 1: case 2: case 3: case 4: case 5: $welcome = 'Доброй ночи'; break;
		case 6: case 7: case 8: case 9: case 10: case 11: $welcome = 'Доброе утро'; break;
		case 12: case 13: case 14: case 15: case 16: case 17: $welcome = 'Добрый день'; break;
		case 18: case 19: case 20: case 21: case 22: case 23: $welcome = 'Добрый вечер'; break;
		default: $welcome = 'Добро пожаловать на наш сайт';
	}
?>

<!doctype html>
<html lang="ru">
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<title>Швейцарские часы Rolex Cosmograph Daytona </title>
	</head>
	<body>
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		<!-- My code -->
		<div class="header d-flex flex-column justify-content-center" style="height:230px; background-image:url(content/header.jpg);color:white;text-align:center;">
			<div class="container">
				<h1 class="display-2"><?=$welcome?>!</h1>
				<p class="lead">Вы были на нашем сайте <?=$countOfEnters?> раз(а)!</p>
			</div>
		</div>
		<?php
			if ($content != null) include $content;
			else
			{
				include 'menu.php';
				include 'nav.php';
		?>
				<h1>здесь будет контент главной странички!</h1>
				<!--End my code -->
		<?php
			}
		?>
	</body>
</html>