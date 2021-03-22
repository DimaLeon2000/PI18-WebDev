<h3>Вариант 7</h3>
<p>
	<math>
		<mrow>
			<mi>x</mi>
			<mo>=</mo>
			<mfrac>
				<mrow>
					<msup>
						<mi>a</mi>
						<mn>3</mn>
					</msup>
					<mo>+</mo>
					<mroot>
						<mi>b</mi>
						<mn>3</mn>
					</mroot>
					<mo>-</mo>
					<mroot>
						<mi>c</mi>
						<mn>5</mn>
					</mroot>
				</mrow>
				<mrow>
					<mi>a</mi>
					<mi>b</mi>
					<mi>c</mi>
				</mrow>
			</mfrac>
		</mrow>
	</math>
	<br/>
	<math>
		<mrow>
			<mi>y</mi>
			<mo>=</mo>
			<msup>
				<mi>sin</mi>
				<mn>2</mn>
			</msup>
			<msup>
				<mi>a</mi>
				<mn>3</mn>
			</msup>
			<mo>+</mo>
			<msup>
				<mi>cos</mi>
				<mn>3</mn>
			</msup>
			<msup>
				<mi>b</mi>
				<mn>2</mn>
			</msup>
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
	<label>x = </label>
	<input name='x' type='number' disabled value="<?
		if (isset($_POST['a']) & isset($_POST['b']) & isset($_POST['c']))
		{
			echo ((pow($_POST['a'],3)+pow($_POST['b'],(1/3))-pow($_POST['c'],(1/5)))/($_POST['a']*$_POST['b']*$_POST['c']));
		}
		else {echo (0);}
	?>"/>
	<br/>
	<label>y = </label>
	<input name='y' type='number' disabled value="<?
		if (isset($_POST['a']) & isset($_POST['b']))
		{
			echo (pow(sin(pow($_POST['a'],3)),2)+(pow(sin(pow($_POST['b'],2)),3)));
		}
		else {echo (0);}
	?>"/>
	<br/>
</form>