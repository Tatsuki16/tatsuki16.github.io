<?php
class leaders extends head {
	public function get_content() {
		global $tabl;
		global $org;
        $query = mysql_query("SELECT `{$tabl['name']}`,`{$tabl['level']}`, `{$tabl['leader']}`,{$tabl['money']} FROM `{$tabl['table']}` WHERE `{$tabl['leader']}` >= '1' ORDER BY ID ASC");
        while ($date = mysql_fetch_assoc($query)) {
			   $mon .= "<tr>
			   		<td>".$date["$tabl[name]"]."</td><td>".$org[$date["$tabl[leader]"]]."</td><td>".$date["$tabl[level]"]."</td><td>".$date["$tabl[money]"]."</td>
			   </tr>";

			    }
		echo "<aside class='right-side'><section class='content-header'>";
		include "app/view/common/top.php";  
		include "app/view/mon/leader.php";  
	}
}
3
?>