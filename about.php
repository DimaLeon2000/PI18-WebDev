<!DOCTYPE html>
<?
	include 'data.inc.php';
	include 'lib.inc.php';
?>
<html>
	<head>
		<title>О сайте</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<? include 'top.inc.php'?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1>О нашем сайте</h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<? include 'about.inc.php'?>
			<!-- Область основного контента -->
		</div>
		<div id="nav">
			<? include 'menu.inc.php'?>
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<? include 'bottom.inc.php'?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>