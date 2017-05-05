<?php
class news extends head {
	public function get_content() {
		global $tabl;
		global $org;
		if (isset($_SESSION['Nick'])) 
		{
			$nick = $_SESSION['Nick'];
			$query = mysql_query("Select * FROM ".$tabl['table']." where ".$tabl['name']." = '".$nick."' ");
			$data = mysql_fetch_assoc($query);	
			if($data["$tabl[admin]"] >= 11){ 
			    if($_POST['submit']){
		$title = mysql_real_escape_string($_POST['title']);
		$title2 = mysql_real_escape_string($_POST['title2']);
		$text = mysql_real_escape_string($_POST['text']);
		$data = date("Y-n-j");
		   if(!empty($text))
		       {
			       $query = mysql_query("insert into news_ucp(title,title2, text, time) values ('".$title."', '".$title2."','".$text."','".$data."')");
		           $anews = '<div class="alert alert-info"><a href="#" class="alert-link">Новости добавлена!</a></div>';
		           echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/'>";
		       }else{
		       	$anews = '<div class="alert alert-info"><a href="#" class="alert-link">Заполните все поля!</a></div>';
		       }
			}
		   include "app/view/common/top.php";    
		   include "app/view/admin/news.php";
	    }else {echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/'>";} 
	  }	else {echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/'>";} 
		echo "<aside class='right-side'><section class='content-header'>";      
	}
}
?>