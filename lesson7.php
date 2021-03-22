<h3>Вариант 6</h3>
<p>Дано целое число N (> 0). Найти наибольшее целое число K, квадрат которого не превосходит N: K<sup>2</sup> ≤ N.<br/>Функцию извлечения квадратного корня не использовать.<br/>
</p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<label>N = </label><input name='n' type='number' value='1' min='1'/><br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/>
	<br/>
	<?
		$k = 0;
		if (isset($_POST['n'])) {
			if ($_POST['n'] > 0)	
			{
				while (pow(($k+1),2) <= $_POST['n']) $k++;
				echo 'K = '.$k;
			}
			else echo 'ОШИБКА: Значение N должно быть больше нулю.';
		}
	?>
	<br/>
</form>