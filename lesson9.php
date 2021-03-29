<h3>Вариант 7</h3>
<p>Дан массив размера M × N. Для каждой строки массива найти сумму ее элементов, кратных 3.<br/>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<? (isset($_POST['m'])) ? $m=$_POST['m'] : $m=0;?>
	<? (isset($_POST['n'])) ? $n=$_POST['n'] : $n=0;?>
	<label>M = </label><input name='m' type='number' value='<?=$m?>' min=1/><br/>
	<label>N = </label><input name='n' type='number' value='<?=$n?>' min=1/><br/>
	<input type='submit' value='Задать массив'/><br/>
	<?
	if ($m >= 1 and $n >= 1) {
		for ($i=0; $i <= $m-1; $i++) {
			for ($j=0; $j <= $n-1; $j++) {
				echo "<input name='arr[$i][$j]' type='number' value='";
				echo (isset($_POST['arr'][$i][$j])) ? $_POST['arr'][$i][$j] : 0;
				echo "' style='width: 32px;'/>";
			}
			echo "<br/>";
		}
		echo "<input type='submit' value='⇓⇓⇓⇓⇓'/>";
		echo "<br/>";
		$arr = $_POST['arr'];
		$k = 0;
		foreach ($arr as $i) {
			$sum = 0;
			foreach ($i as $j) {
			if ($j % 3 == 0) $sum = $sum + $j;
			}
			$k++;
			echo 'M['.$k.'] = '.$sum;
		}
	}
	unset($arr);?>
	<br/>
</form>