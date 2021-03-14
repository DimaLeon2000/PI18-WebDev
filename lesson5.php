<h3>Вариант 4</h3>
<p>Даны три числа. Вывести большее из них.
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<input name='a' type='number' value='0'/>
	<input name='b' type='number' value='0'/>
	<input name='c' type='number' value='0'/>
	<br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/>
	<br/>
	<label>Результат: <?
		if (isset($_POST['a']) & isset($_POST['b']) & isset($_POST['c']))
		{
			if (($_POST['a'] >= $_POST['b']) & ($_POST['a'] >= $_POST['c'])) {echo 'a';}
			elseif (($_POST['b'] >= $_POST['c']) & ($_POST['b'] >= $_POST['a'])) {echo 'b';}
			else {echo 'c';}
		}
	?></label>
	<br/>
	<?unset($_POST);?>
</form>