<?php
	define('DB_HOST','localhost');
	define('DB_LOGIN','root');
	define('DB_PASSWORD','');
	define('DB_NAME','gbook');
	$link=mysqli_connect(DB_HOST,DB_LOGIN, DB_PASSWORD, DB_NAME);
	function clearStr($data){
	global $link;
	return mysqli_real_escape_string($link,trim(strip_tags($data)));}
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$email = clearStr($_POST['email']);
		$subject = clearStr($_POST['subject']);
		$msg = clearStr($_POST['body']);
		$sql = "INSERT INTO msgs(email, subject, body) VALUES('$email','$subject','$msg')";
		mysqli_query($link,$sql) or die(mysqli_error($link));
		$uri = $_SERVER['REQUEST_URI'];
		header('Location:'.$uri);
		exit;
	}
	if(isset($_GET['del'])){
		$del=abs((int)$_GET['del']);
		if($del){
			$sql="DELETE FROM msgs WHERE id=$del";
			mysqli_query($link,$sql) or die(mysqli_error($link));
			header('Location:'.$_SERVER['PHP_SELF']);
			exit;
		}
	}
?>
<h3>Адрес</h3>
<p></p>
<h3>Задайте вопрос</h3>
<form action='<?= $_SERVER['REQUEST_URI'];?>' method='post'>
	<label>Ваш E-mail: </label><br />
	<input name='email' type='text' size="50"/><br />
	<label>Тема письма: </label><br />
	<input name='subject' type='text' size="50"/><br />
	<label>Содержание: </label><br />
	<textarea name='body' cols="50" rows="10"></textarea><br /><br />
	<input type='submit' value='Отправить' />
</form>