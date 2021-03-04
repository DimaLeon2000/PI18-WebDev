<?
	setlocale(LC_ALL, "russian.utf8");
	date_default_timezone_set ('Asia/Chita');
	$leftMenu = [
		['link'=>'Домой', 'href'=>'index.php'],
		['link'=>'О нас', 'href'=>'about.php'],
		['link'=>'Контакты', 'href'=>'contact.php']
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