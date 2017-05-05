<?php
class main extends head {
	public function get_content() {
			$query = mysql_query("SELECT `ID`, `title`,`title2`,`text`, `time` FROM `news_ucp` WHERE `id` >= '1' ORDER BY ID ASC");
			{
          while ($date = mysql_fetch_assoc($query)) {
			   $mon .= "<div class=\"col-md-12 col-sm-12\">
			               <div class=\"block_n wow bounceIn\">
			   					<h3 class=\"media-heading\">".$date['title']."</h3>
			   					<p>".$date['title2']."
			   					<br>".$date['text']." 
			   					<div class=\"date\">".$date['time']."</div>	
			   				</div>	
			   			</div>";

			    }

		}  				
		echo "<aside class='right-side'><section class='content-header'>";
        include "app/view/common/top.php";  
		include "app/view/main/index.php";  
	}
}
/*				<div class="col-md-12 col-sm-12">
					<div class="block_n wow bounceIn">
							<h3 class="media-heading">Обновление 28.07.2015</h3>
							<p>Мини обновление v.1.0<br><br>1. Убраны лишние объекты.<br>2. Переписана заводка автомобиля, двигатель заводился через раз, теперь чтобы завести транспорт нужно нажать на клавишу 'N' <br>3. Переписана Green Зона в общественных местах.<br>4. Настроен маркер в GPS "Завод Оружия", раньше было неудобно.<br>5. Исправлены орфографические ошибки в моде.<br>6. Дописана проверка на символы в регистрации.<br>7. Настроен угол объекта на ВМФ "Башня"<br>8. Дописана выдача скинов<br>9. Остальные мелкие доработки<br></p>
						 <div class="date">28.07.2016</div>		
					</div>	
				</div>	*/
?>
