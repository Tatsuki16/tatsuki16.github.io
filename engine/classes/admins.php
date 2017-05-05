<?php
class admins extends head {
	public function get_content() {
		global $tabl;
        $query = mysql_query("SELECT `{$tabl['id']}`, `{$tabl['name']}`,`{$tabl['online']}`,`{$tabl['admin']}`, {$tabl['money']} FROM `{$tabl['table']}` WHERE `{$tabl['admin']}` >= '1' ORDER BY ID ASC");
        while ($date = mysql_fetch_assoc($query)) {
          	if($date["$tabl[online]"] == 1){$online = "Онлайн";}else { $online = "Оффлайн";}
			   $mon .= "<tr>
			   		<td>".$date["$tabl[name]"]."</td><td>".$date["$tabl[admin]"]."</td><td>".$date["$tabl[money]"]."</td><td>".$online."</td>
			   </tr>";

			    }
		echo "<aside class='right-side'><section class='content-header'>";
		include "app/view/common/top.php";  
		include "app/view/mon/admins.php";  
	}
}
?>