<!-- [WORK IN PROGRESS] -->
<h3>Вариант 7</h3>
<p>Дан массив размера N и целые числа K и L (1 ≤ K ≤ L ≤ N). Найти среднее арифметическое элементов массива с номерами от K до L включительно.<br/>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<label>N = </label><input name='n' type='number' value='<?= (isset($_POST['n'])) ? $_POST['n'] : 1?>' min=1/><br/>
	<input type='submit' value='Задать массив'/><br/>
</form>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<?
		for ($i=1; $i <= $_POST['n']; $i++) {
			echo "<input name='arr[]' type='number' value=0 style='width: 32px;'/>";
		}
		if (isset($_POST['n'])) {
			echo "<label>K = </label><input name='k' type='number' value='<?= (isset($_POST['k'])) ? $_POST['k'] : 1?>' min=1/><br/>";
			echo "<label>L = </label><input name='l' type='number' value='<?= (isset($_POST['l'])) ? $_POST['l'] : 1?>' min=1/><br/>";
			echo "<input type='submit' value='⇓⇓⇓⇓⇓'/>";
		}
	?>
	<br/>
</form>