<h3>Вариант 7</h3>
<p>Первое выражение:
	<math>
		<mrow>
			<mi>a</mi>
			<mo>+</mo>
			<mn>2</mn>
			<mi>b</mi>
			<mo>-</mo>
			<mn>3</mn>
			<mi>c</mi>
		</mrow>
	</math>
	<br/>Второе выражение:
	<math>
		<mrow>
			<mn>2</mn>
			<mi>a</mi>
			<mo>+</mo>
			<mi>b</mi>
			<mo>-</mo>
			<mn>2</mn>
			<mi>c</mi>
		</mrow>
	</math>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<label>a = </label>
	<input name='a' type='number' value='0'/>
	<br/>
	<label>b = </label>
	<input name='b' type='number' value='0'/>
	<br/>
	<label>c = </label>
	<input name='c' type='number' value='0'/>
	<br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/>
	<br/>
	<label>Результат: <?
		if (isset($_POST['a']) & isset($_POST['b']) & isset($_POST['c']))
		{
			$x = $_POST['a'] + (2*$_POST['b']) - (3*$_POST['c']);
			$y = (2*$_POST['a']) + $_POST['b'] - (2*$_POST['c']);
			if ($x > $y) {echo 'Первое выражение больше';}
			elseif ($x < $y) {echo 'Второе выражение больше';}
			else {echo 'Оба выражения равны';}
		}
	?></label>
	<br/>
	<?unset($_POST);?>
</form>