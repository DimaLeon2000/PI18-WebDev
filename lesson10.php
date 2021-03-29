<h3>Вариант 7</h3>
<p>Дана строка. Найти количество знаков препинания.<br/></p>
<form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
	<? (isset($_POST['s'])) ? $s=$_POST['s'] : $s='';?>
	<input name='s' type='text' value='<?=$s?>' min=1/><br/>
	<input type='submit' value='⇓⇓⇓⇓⇓'/><br/>
	<? if (isset($_POST['s'])) {
		if ($s != '') {
			echo preg_match_all('/[[:punct:]]/', $_POST['s']);
		}
		else echo "Пожалуйста введите текст.";
	}?>
	<br/>
</form>