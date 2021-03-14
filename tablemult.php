<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<label>Столбцы: </label><br />
	<input name='cols' type='number'/><br />
	<label>Строки: </label><br />
	<input name='rows' type='number'/><br />
	<label>Цвет таблицы: </label><br />
	<input name='color' type='text' size="8"/><br />
	<input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<? drawTable(
	isset($_POST['cols']) ? (int)$_POST['cols'] : 0,
	isset($_POST['rows']) ? (int)$_POST['rows'] : 0,
	isset($_POST['color']) ? $_POST['color'] : '');?>
<!-- Таблица -->