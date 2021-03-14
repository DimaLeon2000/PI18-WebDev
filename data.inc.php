<?
	setlocale(LC_ALL, "russian.utf8");
	date_default_timezone_set ('Asia/Chita');
	$leftMenu = [
		['link'=>'Домой', 'href'=>'index.php'],
		['link'=>'О нас', 'href'=>'index.php?id=about'],
		['link'=>'Цикл for', 'href'=>'index.php?id=for'],
		['link'=>'Цикл while', 'href'=>'index.php?id=while'],
		['link'=>'Таблица умножения', 'href'=>'index.php?id=table'],
		['link'=>'Задание №1', 'href'=>'index.php?id=lesson1'],
		['link'=>'Задание №2', 'href'=>'index.php?id=lesson2'],
		['link'=>'Контакты', 'href'=>'index.php?id=contact']
		];
	$day = strftime('%d');
	$mon = strftime('%B');
	$year = strftime('%Y');
	$hour = (int)strftime('%H');
	define('COPYRIGHT', 'Веб-мастер');
	if ($hour < 6) {$welcome = 'Доброй ночи';}
	elseif ($hour < 12) {$welcome = 'Доброе утро';}
	elseif ($hour < 18) {$welcome = 'Добрый день';}
	else {$welcome = 'Добрый вечер';}
?>