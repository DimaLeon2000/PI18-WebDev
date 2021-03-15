<h3>Вариант 7. Длина, из сантиметров в дюймы</h3>
<p>
	<math>
		<mrow>
			<mi>L</mi>
			<mo>=</mo>
			<mi>cm</mn>
			<mo>&divide;</mo>
			<mn>2.54</mn>
			<mo>=</mo>
			<mi>in</mi>
		</mrow>
	</math>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<input name='cm' type='number' value='0'/>
	<label>cm</label>
	<br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/>
	<br/>
	<input name='inches' type='number' disabled value="<?= (isset($_POST['cm']) ? round($_POST['cm']/2.54, 2) : 0)?>"/>
	<label>in</label>
	<br/>
	<?unset($_POST)?>
</form>