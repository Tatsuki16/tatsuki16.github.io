<?php
class admin extends head {
	public function get_content() {
		global $tabl;
		global $org;
		if (isset($_SESSION['Nick'])) 
		{
			$nick = $_SESSION['Nick'];
			$query = mysql_query("Select * FROM ".$tabl['table']." where ".$tabl['name']." = '".$nick."' ");
			$data = mysql_fetch_assoc($query);	
			if($data["$tabl[admin]"] >= 11){ 
				if($_POST['finds']){
                  $art = mysql_real_escape_string($_POST['find']);
                  $_SESSION['apn'] = $art;
                  $findq = mysql_query("Select * FROM ".$tabl['table']." where ".$tabl['name']." = '".$art."' ");
                  $dfind = mysql_fetch_assoc($findq);
                  $skin = $dfind[$tabl['skin']];
                }
            if($dfind["$tabl[online]"] == 1){$online = "Онлайн";}else { $online = "Оффлайн";}
            if($dfind["$tabl[ban]"] == 1){$ban = "Забанен";}else { $ban = "Активен";}
            if($dfind["$tabl[house]"] == 255){$house = "Нету";}else { $house = $dfind["$tabl[house]"];}
            if($dfind["$tabl[biz]"] == 255){$biz = "Нету";}else { $biz = $dfind["$tabl[biz]"];}
            if($dfind["$tabl[warn]"] == 0){$warn = "Нету";}else { $warn = $dfind["$tabl[warn]"];}
			if($data["$tabl[skin]"] < 1){$skiin = "Нету";}else { $skiin = $skin;}
            if($_POST['ban']){
              $anickp = $_SESSION['apn'];
              $_SESSION['ap'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Игрок забанен!</a></div>';
              $findq = mysql_query("UPDATE ".$tabl['table']." SET ".$tabl['ban']." = '1', ".$tabl['member']." = '0', ".$tabl['leader']." = '0', ".$tabl['rank']." = '0' WHERE ".$tabl['name']." = '".$anickp."'");          
            }   
            if($_POST['warn']){
              $_SESSION['ap'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Игроку выдано предупреждение!</a></div>';
              $anickp = $_SESSION['apn'];
              $findq = mysql_query("UPDATE ".$tabl['table']." SET ".$tabl['warn']." = '1', ".$tabl['member']." = '0', ".$tabl['leader']." = '0', ".$tabl['rank']." = '0' WHERE ".$tabl['name']." = '".$anickp."'");          
            } 
            if($_POST['unban']){
              $_SESSION['ap'] = '<div class="alert alert-danger"><a href="#" class="alert-link">Игрок разблокирован!</a></div>';
              $anickp = $_SESSION['apn'];
              $findq = mysql_query("UPDATE ".$tabl['table']." SET ".$tabl['ban']." = '0', ".$tabl['warn']." = '0' WHERE ".$tabl['name']." = '".$anickp."'");          
            }                                 
            include "app/view/admin/index.php";

    	    }   else{echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/?l=info'>";} 
    	}
        echo "<aside class='right-side'><section class='content-header'>";   	    
		
	}
}

?>