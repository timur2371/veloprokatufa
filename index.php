<? 
$phone = "+79998762423";
$adress = "г. Уфа, ул. Менделеева, 114/2";
$email = "mail@veloprokatufa.ru";
$working_hours = "10:00 - 20:00, ежедневно";
$price_hour = 100;
$price_night = 200;
$price_day = 500;
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Veloprokatufa.ru</title>
	<link rel="shortcut icon" href="src/img/logo_black.png" type="image/x-icon" />
	<link rel="stylesheet" href="src/css/normalize.css">
	<link rel="stylesheet" href="src/css/styles.css">
</head>

<body>
	<div class="index-bar" id="index-bar">
		<div class="index-bar-img"></div>
		<div class="grid index-bar__content">
			<h1>Прокат велосипедов в Уфе</h1>
			<div class="index-contacts">
				<div>Телефон: <a href="tel:<? echo $phone ?>" ><? echo $phone ?></a></div>
				<div>Адрес: <? echo $adress ?></div>
				<div>E-mail: <a href="mailto:<? echo $email ?> "> <? echo $email ?></a></div>
				<div>Время работы: <? echo $working_hours ?></div>
			</div>
			<div class="price">
				<div><? echo $price_hour ?> руб/час</div>
				<div><? echo $price_night ?> руб/ночь</div>
				<div><? echo $price_day ?> руб/сутки</div>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<div class="faq grid">
			<ol>
				<li>Для оформления договора аренды велосипеда или спортивного инвентаря , при себе обязательно иметь действующий паспорт удостоверяющий личность.</li> <br>
				<li>На хранение Вы можете предоставить свой паспорт, водительское удостоверение, военный билет или денежную сумму эквивалентную стоимости велосипеда ( все выше перечисленное вносится в договор)</li> <br>
			</ol>
		</div>
		<div class="footer grid">
			<div class="copyright">
				© 2018 <a href="http://veloprokatufa.ru">veloprokatufa.ru</a> <br><br>
				Разработка сайта: <br>
				<a href="https://vk.com/id138222564" target="_blank">Тимур Каррамов</a>
			</div>
			<div class="footer-contacts">
				<? echo $adress ?> <br>
				<? echo $phone  ?> <br>
				<? echo $email  ?> <br>
				<? echo $working_hours ?>
			</div>
		</div>
	</div>

	<script src="src/js/jquery.min.js"></script>
	<script type="text/javascript">$(".index-bar-img").css("height", $(window).width()*9/16); // Определение высоты картинки для index-bar</script>
</body>
</html>
