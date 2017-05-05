<?php
	if($_SESSION['Nick']) {
		$skin = $data[$tabl['skin']];
?>
<section id="homes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
				<br></br>
				<br></br>
					<h1><?php echo $nick; ?></h1>
					<hr>
					<h4>ИНФОРМАЦИЯ ПЕРСОНАЖА</h4>
					<hr>
				</div>
		<div class="col-md-12" style="background: rgba(113, 113, 113, 0.04);">
		<?php echo $_SESSION['inf']; ?>
			  <div class="short_info">
				<table>
	                <tr>
                		<th>Последний вход</th>
						<th>Cтатус аккаунта</th>
						<th>Cостояние</th>				
					</tr></table>
					<hr style="margin-left: 74px; margin-top: 6px;">
                	<hr style="margin-left: 440px;margin-top: -21px;">
                	<hr style="margin-left: 805px;margin-top: -21px;">
					<table style="margin-top: -20px;"><tr>
						<td><?php echo $data["$tabl[getondate]"]; ?></td>
						<td><?php echo $ban; ?></td>
						<td><?php echo $online ?></td>				
				</tr></table>				
			   </div>
		 </div>	   
	    <div class="col-md-12" style="background: rgba(113, 113, 113, 0.04);">		   
               <div class="col-md-3">
					<div class="team text-center">
						<img src="app/public/images/skins/<?php echo $data["$tabl[skin]"]; ?>.png" alt="SKIN" style="margin-top: 15px;">
					</div>
			   </div> 			<div class="col-md-9">
               			 <div class="user_stats">
                		    <h1>Статистика</h1>
						    <ul class="left">
		 					  <li>ID аккаунта<span><?php echo $data["$tabl[id]"]; ?></span>
							  </li><li>Наличные деньги<span><?php echo $data["$tabl[cash]"]; ?></span>
							  </li><li>Скин<span><?php echo $data["$tabl[skin]"]; ?></span>
							  </li><li>Организация<span><?php echo $org[$data["$tabl[member]"]]; ?></span>
							  <li>Уровень<span><?php echo $data["$tabl[level]"]; ?></span>
							  </li><li>Предупреждения<span><?php echo  $warn; ?></span>
						     </li></ul>
						    <ul class="right">
						      <li>EXP<span><?php echo $data["$tabl[exp]"]; ?></span>
							  </li><li>Банковский счет<span><?php echo $data["$tabl[money]"]; ?></span>
							  <li>Вип<span><?php echo $data["$tabl[vip]"]; ?></span>
							  </li><li>Ранг в организации<span><?php echo $data["$tabl[rank]"]; ?></span>
							  </li><li>Номер телефона<span><?php echo $data["$tabl[mobile]"]; ?></span>
							  </li><li>Донат счет<span><?php echo $data["$tabl[donate]"]; ?> руб.</span>
						    </li></ul>
		        		</div>
					</div>	
					<div class="col-md-12">	        
						<div class="col-md-4">
					    	<div class="user_edit">
         			            <h1>Скиллы</h1>
							     <div class="r">
							        <li>Deagle - <span><?php echo $data["$tabl[desert]"]; ?>%</span></li>
							        <div class="bounce">
         			       		    	<div class="progress progress-striped active">
 												<div class="bar" style="width: <?php echo $data["$tabl[desert]"]; ?>%;"></div>
										</div>
									</div>
							        <li>Shotgun - <span><?php echo $data["$tabl[shot]"]; ?>%</span></li>
							        <div class="bounce">
         			       				<div class="progress progress-striped active">
 											 <div class="bar" style="width: <?php echo $data["$tabl[shot]"]; ?>%;"></div>
										</div>
									</div>
							        <li>MP5 - <span><?php echo $data["$tabl[mp5]"]; ?>%</span></li>
							        <div class="bounce">
        			        			<div class="progress progress-striped active">
 											 <div class="bar" style="width: <?php echo $data["$tabl[mp5]"]; ?>%;"></div>
										</div>
									</div>
							        <li>M4 - <span><?php echo $data["$tabl[m4]"]; ?>%</span></li>
							        <div class="bounce">
        			 			    	<div class="progress progress-striped active">
 											 <div class="bar" style="width: <?php echo $data["$tabl[m4]"]; ?>%;"></div>
										</div>	
									</div>	
							        <li>AK47 - <span><?php echo $data["$tabl[ak47]"]; ?>%</span></li>
							        <div class="bounce">
             			   				<div class="progress progress-striped active">
 											<div class="bar" style="width: <?php echo $data["$tabl[ak47]"]; ?>%;"></div>
										</div>
									</div>																									
							        <li>SDPistol - <span><?php echo $data["$tabl[sdpistol]"]; ?>%</span></li>
							        <div class="bounce">
             			   				<div class="progress progress-striped active">
 											<div class="bar" style="width: <?php echo $data["$tabl[sdpistol]"]; ?>%;"></div>
										</div>
									</div>															
							     </div>
		    			    </div>
						</div>
						<div class="col-md-4">
							<div class="user_edit">
             			       <h1>Смена почты</h1>
             			          <form action="#" method="post" role="form">
             			          <hr>
										<input type="text" name="oldemail" placeholder="Введите старый E-mail" class="form-control">
										<input type="text" name="newemail" placeholder="Введите новый E-mail" class="form-control">
										<input type="password" name="pin" placeholder="Введите пароль от аккаунта" class="form-control">
									<hr>	
										<button type="submit" value="editmail" name="editmail" class="form-control">Изменить</button>
								    </form>				    
							</div>
						</div>
						<div class="col-md-4">
            			   	 <div class="user_edit">
             			        <h1>Смена пароля</h1>
             			          <form action="#" method="post" role="form">
             			          <hr>
										<input type="password" name="oldpass" placeholder="Введите старый пароль" class="form-control">
										<input type="password" name="newpass" placeholder="Введите новый пароль" class="form-control">
										<input type="password" name="pass2" placeholder="Введите новый пароль еще раз" class="form-control">
									<hr>	
										<button type="submit" value="editpass" name="editpass" class="form-control">Изменить</button>
								    </form>				              
							</div>                  		   
						</div>	
            			<div class="marg">
             			    <form action="#" method="post" role="form">
								<button type="submit" value="logout" name="logout" class="form-control">Bыйти</button>
							</form>				                               		   
						</div>
						<?php if($data["$tabl[admin]"] >= 6) { ?>
							<div class="marg">
             			    <form action="#" method="get" role="form">
								<button type="submit" value="admin" name="l" class="form-control">Админ Панель</button>
							</form>				                               		   
						</div> 
						<?php } ?>
						<?php if($data["$tabl[admin]"] >= 1337) { ?>
						<div class="marg">
             			    <form action="#" method="get" role="form">
								<button type="submit" value="news" name="l" class="form-control">Добавить новость</button>
							</form>				                               		   
						</div> 						
						 <?php } ?>
					</div>		
				</div>
			</div>
		</div>
	</div>		
</section>

<?php 
}
else {
	echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/?l=login'";
}
 ?>
