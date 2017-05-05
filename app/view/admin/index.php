<section id="homes">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
				<br></br>
				<br></br>
				<h1><?php echo $nick; ?></h1>
					<hr>
					<h4>Админ Панель</h4>
					<hr>
				</div>
		<div class="col-md-12" style="background: rgba(113, 113, 113, 0.04);">	
		   <div class="short_info" style="padding: 20px;height: 100px;">	
		   <div class="margs">					   
 			<div class="col-md-5">
						<form action="#" method="post" role="form">
						<input type="text" name="find" placeholder="Ник" class="full-width has-padding has-border">
						<button type="submit" value="finds" name="finds" class="form-control">Поиск</button>
						<div class="clear"> </div>
					    </form>	     
			</div>	  				   		
		   </div>
		   </div>	    			              
		</div>       

	<div class="col-md-12" style="background: rgba(113, 113, 113, 0.04);">		
	<?php echo $_SESSION['ap']; ?>
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
						<td><?php echo $dfind["$tabl[getondate]"]; ?></td>
						<td><?php echo $ban; ?></td>
						<td><?php echo $online ?></td>				
				</tr></table>				
			   </div>	   
               <div class="col-md-3">
					<div class="team text-center">
						<img src="app/public/images/skins/<?php echo $skin; ?>.png" alt="Скин отсутствует" style="margin-top: 15px;">
					</div>
			   </div> 
					<div class="col-md-9">
               			 <div class="user_stats">
                		    <h1>Статистика</h1>
						    <ul class="left">
		 					  <li>ID аккаунта<span><?php echo $data["$tabl[id]"]; ?></span>
							  </li><li>Наличные деньги<span><?php echo $data["$tabl[cash]"]; ?></span>
							  </li><li>Администратор<span><?php echo $data["$tabl[admin]"]; ?></span>
							  </li><li>Организация<span><?php echo $org[$data["$tabl[member]"]]; ?></span>
							  <li>Уровень<span><?php echo $data["$tabl[level]"]; ?></span>
							  </li><li>Предупреждения<span><?php echo  $warn; ?></span>
						     </li></ul>
						    <ul class="right">
						      <li>EXP<span><?php echo $data["$tabl[exp]"]; ?></span>
							  </li><li>Банковский счет<span><?php echo $data["$tabl[money]"]; ?></span>
							  <li>Скин<span><?php echo $data["$tabl[skin]"]; ?></span>
							  </li><li>Ранг в организации<span><?php echo $data["$tabl[rank]"]; ?></span>
							  </li><li>Номер телефона<span><?php echo $data["$tabl[mobile]"]; ?></span>
							  </li><li>Донат счет<span><?php echo $data["$tabl[donate]"]; ?> руб.</span>
						    </li></ul>
		        		</div>
					</div>	
			
					//<div class="col-md-12">	        
            			//<div class="marg">
             			    //<form action="#" method="post" role="form">
								//<button type="submit" value="ban" name="ban" class="form-control">Забанить</button>
						  //</form>				                               		   
						//</div>
            			//<div class="marg">
             			    //<form action="#" method="post" role="form">
								//<button type="submit" value="warn" name="warn" class="form-control">Bыдать варн</button>
							//</form>				                               		   
						//</div>
            			//<div class="marg">
             			    //<form action="#" method="post" role="form">
								//<button type="submit" value="unban" name="unban" class="form-control">Разблокировать</button>
							//</form>				                               		   
						//</div>
			</div>
		</div>
	</div>	
</section>