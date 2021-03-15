<h3>Вариант 7</h3>
<p>Даны два целых числа a и b (a < b). Найти произведение всех целых чисел от a до b включительно.<br/>
<math>
	<mrow>
		<msubsup>
			<mo stretchy="false">∏</mo>
			<mrow>
				<mi>s</mi>
				<mo>=</mo>
				<mi>a</mi>
			</mrow>
			<mi>b</mi>
		</msubsup>
	</mrow>
</math>
<br/>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<label>a = </label><input name='a' type='number' value='0'/><br/>
	<label>b = </label><input name='b' type='number' value='0'/><br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/>
	<br/>
	<?
		$s = 1;
		if (isset($_POST['a']) & isset($_POST['b']))
		{
			if ($_POST['a'] < $_POST['b']) {
				for ($i = $_POST['a']; $i < $_POST['b']; $i++) {
					$s = $s * $i;
				}
				echo '∏ = '.$s;
			}
			else {echo 'ОШИБКА: Значение a должно быть меньше значению b.';}
		}
	?>
	<br/>
	<?unset($_POST);?>
</form>