<h3>Вариант 7. Даны диагонали ромба. Найти его площадь.</h3>
<p>
	<math>
		<mrow>
			<mi>S</mi>
			<mo>=</mo>
			<msub>
				<mi>d</mi>
				<mn>1</mn>
			</msub>
			<mo>&times;</mo>
			<msub>
				<mi>d</mi>
				<mn>2</mn>
			</msub>
			<mo>&divide;</mo>
			<mn>2</mn>
		</mrow>
	</math>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<label>d<sub>1</sub> = </label>
	<input name='d1' type='number' value='0'/>
	<label>cm</label>
	<br/>
	<label>d<sub>2</sub> = </label>
	<input name='d2' type='number' value='0'/>
	<label>cm</label>
	<br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/>
	<br/>
	<label>S = </label>
	<input name='area' type='number' disabled value="<?
		if (isset($_POST['d1']) & isset($_POST['d2']))
		{
			echo ($_POST['d1']*$_POST['d2']/2);
		}
		else {echo (0);}?>"/>
	<label>cm<sup>2</sup>
	</label>
	<br/>
	<?unset($_POST);?>
</form>