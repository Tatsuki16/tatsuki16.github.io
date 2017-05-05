	<div class="container">
			<div class="row">
				<div class="col-md-12 text-center wow bounceIn">
					<h2>Админ панель </h2>
					<hr>
					<h4>Добавление новости</h4>
				</div>
			<div class="col-md-12 col-sm-12">	
			<?php echo $anews; ?>			
				    <div class="block-5">
				        <div class="block_n wow bounceIn">
							<form class="cd-form" method="POST">
				                <p class="fieldset">
				                	<label class="image-replace" for="news">Bедите заголовок</label>
				                	<input class="full-width has-padding has-border" name="title" type="text" placeholder="Введите заголовок">
				                </p>
				                <p class="fieldset">
				                	<label class="image-replace" for="news">Bведите второй заголовок</label>
				                	<input class="full-width has-padding has-border block-5" name="title2" type="text" placeholder="Введите второй заголовок">
				                </p>				                
				                <p class="fieldset">
				                	<label class="image-replace" for="news">Текст новости</label>
				                	<textarea class="form-control" name="text" rows="5" placeholder="Текст новости"></textarea>
				                </p>
				                <p class="fieldset">
				                	<button class="full-width has-padding" type="submit" value="news" name="submit">Добавить</button>
				                </p>
				        	</form>
				        </div>	
			</div>
	</div>
</section>	