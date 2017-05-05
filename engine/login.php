<?php
session_start();
require_once("config/config.php");
require_once("config/table.php");
global $tabl;
if(!empty($_POST['auth'])){
		$password = mysql_real_escape_string($_POST['password']);
		$login = mysql_real_escape_string($_POST['login']);
		if(!empty($password) && !empty($login))
		{
			$query = mysql_query("SELECT `{$tabl['id']}`, `{$tabl['key']}` FROM `{$tabl['table']}` WHERE `{$tabl['name']}`='{$login}' LIMIT 1");
			$data = mysql_fetch_assoc($query);
			$passmd = ($password);
			if($data["$tabl[key]"] == ($password))
			{
				session_start();
				$_SESSION['Nick'] = $login;
				echo "success";
				
			} else {
				echo "notfound";
			}
		}
		else {
			echo "pole";}
}	
if(!empty($_POST['rec'])){
		$rnick = mysql_real_escape_string($_POST['rnick']);
		$remail = mysql_real_escape_string($_POST['remail']);
		if(!empty($rnick) && !empty($remail))
		{
			$query = mysql_query("SELECT ".$tabl['id'].", ".$tabl['mail'].", ".$tabl['key']." FROM ".$tabl['table']." WHERE ".$tabl['name']."='".$rnick."' LIMIT 1");
			$data = mysql_fetch_assoc($query);
			if($data["$tabl[mail]"] == $remail)
			{
				$message = '
                  Ваш ник: '.$rnick.'
                  <br>
                  Ваш пароль: '.$data["$tabl[key]"].'';
                    mail($remail, "Восстановление пароля", $message); 
				echo "success";
				
			} else {
				echo "notfound";
			}
		}
		else {
			echo "pole";}
}	
?>