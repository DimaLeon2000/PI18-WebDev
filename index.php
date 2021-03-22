<!DOCTYPE html>
<?
	include 'data.inc.php';
	include 'lib.inc.php';
	$title = "Наш сайт";
	$header = "$welcome, Гость!";
	$id = isset($_GET['id']) ? strtolower(strip_tags(trim($_GET['id']))) : '';
	switch ($id) {
		case 'about':
			$title = 'О сайте';
			$header = 'О нашем сайте';
			break;
		case 'for':
			$title = 'Цикл for';
			$header = 'Цикл for';
			break;
		case 'while':
			$title = 'Цикл while';
			$header = 'Цикл while';
			break;
		case 'table':
			$title = 'Таблица умножения';
			$header = 'Таблица умножения';
			break;
		case 'contact':
			$title = 'Контакты';
			$header = 'Обратная связь';
			break;
		case 'lesson1':
			$title = 'Задание №1';
			$header = 'Перевод величин';
			break;
		case 'lesson2':
			$title = 'Задание №2';
			$header = 'Простое вычисление';
			break;
		case 'lesson3':
			$title = 'Задание №3';
			$header = 'Сложное вычисление';
			break;
		case 'lesson4':
			$title = 'Задание №4';
			$header = 'Простое условие';
			break;
		case 'lesson5':
			$title = 'Задание №5';
			$header = 'Сложное условие';
			break;
		case 'lesson6':
			$title = 'Задание №6';
			$header = 'Простой цикл For';
			break;
		case 'lesson7':
			$title = 'Задание №7';
			$header = 'Простой цикл While';
			break;
		case 'lesson8':
			$title = 'Задание №8';
			$header = 'Обработка одномерного массива';
			break;
		case 'lesson9':
			$title = 'Задание №9';
			$header = 'Обработка двухмерного массива';
			break;
		case 'lesson10':
			$title = 'Задание №10';
			$header = 'Строки';
			break;
		default:
			break;
	}
?>
<html>
	<head>
		<title><?= $title?></title>
		<meta charset="utf-8" >
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
	</head>
	<body>
		<div id="header">
			<!-- Верхняя часть страницы -->
			<? include 'top.inc.php'?>
			<!-- Верхняя часть страницы -->
		</div>
		<div id="content">
			<!-- Заголовок -->
			<h1><?= $header?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<? switch($id){
				case 'about': include 'about.php'; break;
				case 'for': include 'for.php'; break;
				case 'while': include 'while.php'; break;
				case 'table': include 'tablemult.php'; break;
				case 'contact': include 'contact.php'; break;
				case 'lesson1': include 'lesson1.php'; break;
				case 'lesson2': include 'lesson2.php'; break;
				case 'lesson3': include 'lesson3.php'; break;
				case 'lesson4': include 'lesson4.php'; break;
				case 'lesson5': include 'lesson5.php'; break;
				case 'lesson6': include 'lesson6.php'; break;
				case 'lesson7': include 'lesson7.php'; break;
				case 'lesson8': include 'lesson8.php'; break;
				case 'lesson9': include 'lesson9.php'; break;
				case 'lesson10': include 'lesson10.php'; break;
				default: include 'index.inc.php';
			}
			?>

			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<!-- Навигация -->
			<? include 'menu.inc.php'?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<? include 'bottom.inc.php'?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>