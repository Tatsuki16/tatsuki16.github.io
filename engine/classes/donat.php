<?php
class donat extends head {
	public function get_content() {
		echo "<aside class='right-side'><section class='content-header'>";
		include "app/view/common/top.php";  
		include "app/view/account/donate.php";  
	}
}
?>