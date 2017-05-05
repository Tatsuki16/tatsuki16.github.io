<?php
	if (!isset($_SESSION['Nick'])) {
?>
	<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Авторицазия</h2>
					<hr>
					<h4>Личный кабинет игрока</h4>
				</div>
			<div class="col-md-12 col-sm-12">				
				    <div class="block-1">
				    <span id="info"></span>
				        <div class="block_n wow bounceIn">
							<form class="cd-form" method="POST">
				                <p class="fieldset">
				                	<label class="image-replace cd-username" for="signup-username">Введите ник</label>
				                	<input class="full-width has-padding has-border" id="login" type="text" placeholder="Ник">
				                </p>
				                <p class="fieldset">
				                	<label class="image-replace cd-password" for="password">Пароль</label>
				                	<input class="full-width has-padding has-border" id="password" type="password" placeholder="Пароль">
				                </p>
				                <p class="fieldset">
				                	<button class="full-width has-padding" type="button" value="auth" id="auth">Вoйти</button>
				                </p>
				                <li><a href="?l=recovery">Забыли пароль?</a></li>
				        	</form>
				        </div>	
			</div>
	</div>
</section>	
<script type="text/javascript" src="app/public/js/system.js"></script>
<?php 
} 
else{
echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;/?l=info'";
}
?>
