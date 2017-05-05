<?php
class recovery extends head {
	public function get_content() { 
		if(isset($_SESSION['Nick'])){
        echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/?l=info'>";
        }else{    	
        include "app/view/common/top.php";
		include "app/view/account/recovery.php";   
	}			
	}
}
?>