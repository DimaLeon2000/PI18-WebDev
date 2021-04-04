<h3>Переход на сайт</h3>
<?
	if (isset($_POST['site'])) {
		$url = $_POST['site'];
		if ($url) header("Location: $url");
	}
?>
<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">
	<select name="site">
		<option value="">Выбери сайт...</option>
		<option value="https://yandex.ru/">Яндекс</option>
		<option value="https://google.com/">Google</option>
		<option value="https://rambler.ru/">Rambler</option>
	</select>
	<input type='submit' value='Вперёд!'/>
	<br/>
</form>