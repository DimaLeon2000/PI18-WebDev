<h3>Вариант 7</h3>
<p>Дан массив размера N и целые числа K и L (1 ≤ K ≤ L ≤ N). Найти среднее арифметическое элементов массива с номерами от K до L включительно.<br/>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<? (isset($_POST['n'])) ? $n=$_POST['n'] : $n=0;?>
	<label>N = </label><input name='n' type='number' value='<?=$n?>' min=1/><br/>
	<input type='submit' value='Задать массив'/><br/>
	<?
	(isset($_POST['k'])) ? $k=$_POST['k'] : $k=1;
	(isset($_POST['l'])) ? $l=$_POST['l'] : $l=$n;
	if ($n >= 1) {
		for ($i=1; $i <= $n; $i++) {
			echo "<input name='arr[]' type='number' value='";
			echo (isset($_POST['arr'][$i-1])) ? $_POST['arr'][$i-1] : 0;
			echo "' style='width: 32px;'/>";
		}
		echo "<br/>";
		echo "<input name='k' type='range' value='$k' min='1' max='$n' style='margin-left: 12px; width: calc(7px + 32px*$n);'/>";
		echo "<label>K</label><br/>";
		echo "<input name='l' type='range' value='$l' min='1' max='$n' style='margin-left: 12px; width: calc(7px + 32px*$n);'/>";
		echo "<label>L</label><br/>";
		echo "<input type='submit' value='⇓⇓⇓⇓⇓'/>";
		echo "<br/>";
		$sum = 0;
		if ($k <= $l) {
		for ($i=($k-1); $i <= ($l-1); $i++) {
			$sum = $sum + $_POST['arr'][$i];
		}
		$avg = $sum/($l-$k+1);
		echo '<span style="text-decoration:overline">N</span><sub>i=K</sub><sup>L</sup> = '.$avg;
		}
		else echo 'ОШИБКА: значение K должно быть меньше или равно L.';
	} ?>
	<br/>
</form>