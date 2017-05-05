<?php
class info extends head {
	public function get_content() {  
        global $tabl;
        global $org;
	    unset($_SESSION['inf']);    
		if (isset($_SESSION['Nick'])){
			$nick = $_SESSION['Nick'];
			$query = mysql_query("Select * FROM ".$tabl['table']." where ".$tabl['name']." = '".$nick."' ");
			$data = mysql_fetch_assoc($query);	
            if($data["$tabl[online]"] == 1){$online = "Онлайн";}else { $online = "Оффлайн";}
            if($data["$tabl[ban]"] == 1){$ban = "Забанен";}else { $ban = "Активен";}
            if($data["$tabl[house]"] == -1){$house = "Нету";}else { $house = $data["$tabl[house]"];}
            if($data["$tabl[biz]"] == 255){$biz = "Нету";}else { $biz = $data["$tabl[biz]"];}
            if($data["$tabl[warn]"] == 0){$warn = "Нету";}else { $warn = $data["$tabl[warn]"];}
            $gunskills = explode(", ", $data['pGunSkills']);
            $skins = explode(", ", $data['pChars']);
    	  }
        if($_POST['logout']){
            session_destroy();
            echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;'".$config['siteurl']."'/'>";
        }
        if($_POST['editmail']){
            $oldemail = mysql_real_escape_string($_POST['oldemail']);
            $newemail = mysql_real_escape_string($_POST['newemail']);
            $pin = mysql_real_escape_string($_POST['pin']);
            if($oldemail == $newemail){
                 $_SESSION['inf'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Новый и старый email совпадают!</a></div>';
            } 
            else if($data["$tabl[mail]"] == $oldemail){
            	$query = mysql_query("UPDATE `{$tabl['table']}` SET `{$tabl['mail']}` = '{$newemail}' WHERE `{$tabl['name']}` = '{$nick}'");
            	$_SESSION['inf'] = '<div class="alert alert-success"><a href="#" class="alert-link">E-mail изменен на " '.$newemail.' "!</a></div>';

            }else{$_SESSION['inf'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Старый E-mail введено неверно!</a></div>';}

        }
        if($_POST['editpass']){
            $oldpass = mysql_real_escape_string($_POST['oldpass']);
            $newpass = mysql_real_escape_string($_POST['newpass']);
            $pin = mysql_real_escape_string($_POST['pass2']);
            if(!empty($newpass) && !empty($oldpass) && !empty($pin))
            {
                if($newpass == $oldpass){
                     $_SESSION['inf'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Новые пароли не должны совпадать!</a></div>';
                   } 
                 else if($pin != $newpass){
                   $_SESSION['inf'] .= '<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Пароли не совпадают!</a></div>';
                }else if ($data["$tabl[key]"] == $oldpass){
                	$query = mysql_query("UPDATE `{$tabl['table']}` SET `{$tabl['key']}` = '{$newpass}' WHERE `{$tabl['name']}` = '{$nick}'");
                	$_SESSION['inf'] = '<div class="alert alert-success"><a href="#" class="alert-link">Пароль изменен на " '.$newpass.' "!</a></div>';
    
                }
                else{$_SESSION['inf'] .= '<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Неверный старый пароль!</a></div>';;}
            }
            else{$_SESSION['inf'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Ошибка! Заполните все поля!</a></div>';}
    }
     	echo "<aside class='right-side'><section class='content-header'>";
		include "app/view/account/info.php";  

	}
}
?>