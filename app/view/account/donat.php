<?php
class donat extends head {
	public function get_content() {
		echo "<aside class='right-side'><section class='content-header'>";
		include "app/view/common/top.php";  
		include "app/view/account/donate.php";  
	}
}
?>
<?php
error_reporting(-1);//Выводим ошибки но тут их нет
ini_set("display_errors", -1);//Выводим ошибки но тут их нет
header("Content-Type: text/html; charaset=UTF-8");
require("config.php");//Подключаем файл конфигурации

if(isset($_POST['submit']))
{
	$userid = isset($_POST['userid']) ? $_POST['userid'] : false;//Проверяем на пустоту
	$userid = (int)$userid;//пропускаем только значение integer
	
	$money = isset($_POST['money']) ? $_POST['money'] : false;//Проверяем на пустоту
	$money = (int)$money;//пропускаем только значение integer
	
	if($userid == false or $money == false)//Проверяем значение пусто или не пусто в любом случае пока он не заполнит оба поля ему вылезит ошибка что не заполнил все поля
	{
		echo "<!DOCTYPE html>
				<html>
					<head>
						<meta charset=\"utf8\">
					</head>
					<body>
						<h1>Заполните все поля</h1>
					</body>
				</html>";
	}
	else
	{
		$query = $mysqli->query("SELECT `" . userid . "`, `" . online . "` FROM `" . users . "` WHERE `" . userid . "` = '{$userid}' LIMIT 1");//Достаём 2 параметра из таблицы это номер аккаунт естественно и статус игрока в сети он или нет
		$result = $query->fetch_array();
		if(!$result)//Проверяем если в ответе пришло 0 или false значит пользователя с таким аккаунтом не существует
		{
			echo "<!DOCTYPE html>
					<html>
						<head>
							<meta charset=\"utf8\">
						</head>
						<body>
							<h1>Данный пользователь не зарегистрирован</h1>
						</body>
					</html>";
		}
		else//Если же существует то 
		{
			if($result[online] > 0)//Проверяем в игре он или нет, если в игре то не пускаем его к дальнейшему пополнению счета
			{
				echo "<!DOCTYPE html>
						<html>
							<head>
								<meta charset=\"utf8\">
							</head>
							<body>
								<h1>Даный персонаж в сети</h1>
							</body>
						</html>";
			}
			else//Если же не в сети то 
			{
				$order = $userid+time();//Номер счёта
				$mrh_login = "" . mrh_login . "";//Идентификатор клиента
				$mrh_pass1 = "" . mrh_pass1 . "";//Пароль 1
				$desc = "Пополнение счёта игрового аккаунта №{$userid} сумма {$money} номер счёта {$order}";//Описание платежа
				$in_curr = "";//// предлагаемая валюта платежа, я обычно пустой оставляю
				$culture = "ru";//Язык

				$crc = md5("{$mrh_login}:{$money}:{$order}:{$mrh_pass1}:Shp_item={$userid}");// формирование подписи
				$insert = $mysqli->query("INSERT INTO `rkassa` 
										(`order_id`, `userid`, `money`, `status`, `date`, `crc`, `status1`) 
											VALUES
										('{$order}', '{$userid}', '{$money}', '0', '" . time() . "', '{$crc}', '0')");//Записываем информацию в базу для проверки и начисления
				echo "<!DOCTYPE html>
			<html>
			<head>
	<link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
	<link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"http://social-rp.ru/css/main.css\">
<section class=\"wrapper\">
		<header class=\"my-navbar navbar-fixed-top\">
			<div class=\"my-brand\"><h4 class=\"text-center my-brand-text\">&nbsp;Social Role Play</h4></div>
			<nav class=\"pull-right\">
				<ul class=\"sidebar-menu\">
					<li><a href=\"http://social-rp.ru/\">&nbsp;Новости</a></li>
					<li><a href=\"http://forum.social-rp.ru\">&nbsp;Форум</a></li>
					<li>
						<a href=\"/donate#\">&nbsp;Мониторинги</a>
						<ul>
							<li><a href=\"/site/admins\">Администрация</a></li>
							<li><a href=\"/site/leaders\">Руководители</a></li>
						</ul>
					</li>
					<li><a href=\"/payment.php\">Донат</a></li>					
					<li><a href=\"/site/login\">&nbsp;Личный кабинет</a></li>				</ul>
			</nav>	
		</header>
	<section class=\"my-page\">
			<hr>
			<section class=\"my-page-content\">
				<div class=\"row\">
	<div class=\"col-md-3\">	
		<div class=\"my-panel\">
			<div class=\"my-panel-header\" style=\"border-bottom: 1px solid #898ba2;\">
				</i>&nbsp;Навигация
			</div>			
			<ul class=\"sidebar-submenu\">
				<li><a href=\"/site/page?view=2\">Как активировать донат-код</a></li>
				<li><a href=\"/site/page?view=1\">На что потратить донат-очки</a></li>
			</ul>
		</div>
	</div>
		<div class=\"col-md-9\">
		<div class=\"my-panel\">
			<div class=\"my-panel-header\">Покупка донат-кодов</div>
			<div class=\"my-panel-body\">	
			<center>
									<form action=\"https://merchant.roboxchange.com/Index.aspx\" method=\"POST\" class=\"form\">
										<img src=\"https://partner.robokassa.ru/Content/images/robo_main_logo.png\">
										&nbsp
										<br><br>
										<input type=\"text\" value=\"Номер аккаунта: {$userid}\" disabled>
										<br><br>
										<input type=\"text\" value=\"Сумма платежа: {$money}\" disabled>
										<br><br>			
										<input type=\"hidden\" name=\"MrchLogin\" value=\"{$mrh_login}\">
										<input type=\"hidden\" name=\"OutSum\" value=\"{$money}\">
										<input type=\"hidden\" name=\"InvId\" value=\"{$order}\">
										<input type=\"hidden\" name=\"Desc\" value=\"{$desc}\">
										<input type=\"hidden\" name=\"SignatureValue\" value=\"{$crc}\">
										<input type=\"hidden\" name=\"Shp_item\" value=\"{$userid}\">
										<input type=\"hidden\" name=\"IncCurrLabel\" value=\"{$in_curr}\">
										<input type=\"hidden\" name=\"Culture\" value=\"{$culture}\">
										<input type=\"submit\" value=\"Все верно,продолжить\">
						</form>
						</center>
					</div>
	</div>		
</div>		
				</section>
		</section>
	</section>
							</body>
						</html>";
			}
		}
	}
}
else
{
	$users = "";
	$query = $mysqli->query("SELECT * FROM `" . users . "`");
	while($result = $query->fetch_array())
	{
		$users .= "<tr>
						<td>
							{$result[userid]}
						</td>
						<td>
							{$result[dmoney]}
						</td>
					</tr>";
	}
	
	echo "<!DOCTYPE html>
			<html>
			<head>
		<link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
	<link href=\"http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">
	<link rel=\"stylesheet\" type=\"text/css\" href=\"http://social-rp.ru/css/main.css\">
<section class=\"wrapper\">
		<header class=\"my-navbar navbar-fixed-top\">
			<div class=\"my-brand\"><h4 class=\"text-center my-brand-text\">&nbsp;Social Role Play</h4></div>
			<nav class=\"pull-right\">
				<ul class=\"sidebar-menu\">
					<li><a href=\"http://social-rp.ru/\">&nbsp;Новости</a></li>
					<li><a href=\"http://forum.social-rp.ru\">&nbsp;Форум</a></li>
					<li>
						<a href=\"/donate#\">&nbsp;Мониторинги</a>
						<ul>
							<li><a href=\"/site/admins\">Администрация</a></li>
							<li><a href=\"/site/leaders\">Руководители</a></li>
						</ul>
					</li>
					<li><a href=\"/payment.php\">Донат</a></li>					
					<li><a href=\"/site/login\">&nbsp;Личный кабинет</a></li>				</ul>
			</nav>	
		</header>
	<section class=\"my-page\">
			<hr>
			<section class=\"my-page-content\">
				<div class=\"row\">
	<div class=\"col-md-3\">	
		<div class=\"my-panel\">
			<div class=\"my-panel-header\" style=\"border-bottom: 1px solid #898ba2;\">
				</i>&nbsp;Навигация
			</div>			
			<ul class=\"sidebar-submenu\">
				<li><a href=\"/site/page?view=2\">Как активировать донат-код</a></li>
				<li><a href=\"/site/page?view=1\">На что потратить донат-очки</a></li>
			</ul>
		</div>
	</div>
		<div class=\"col-md-9\">
		<div class=\"my-panel\">
			<div class=\"my-panel-header\">Пополнение счета</div>
			<div class=\"my-panel-body\">			
<center>			
					<form class=\"my-form\" action=\"\" method=\"post\" role=\"form\">
							<img src=\"https://partner.robokassa.ru/Content/images/robo_main_logo.png\">
							<br />
							<input type=\"text\" name=\"userid\" value=\"\" placeholder=\"Введите номер аккаунта\">
							<br />
							<input type=\"text\" name=\"money\" value=\"\" maxlength=\"5\" placeholder=\"Введите сумму платежа\">
							<br />
							<input type=\"submit\" value=\"Продолжить\" name=\"submit\">
						</form>
						</center>	
						
					</div>
	</div>		
</div>		
				</section>
		</section>
	</section>
					<meta charset=\"utf8\">
					
					<title>Пополнение счёта</title>
					<style>
						.form {
							position: static;
							background-color: #dbdbdb;
							width: 400px;
							float: center;
							margin-top: 400px;
						}
						.form input {
							border: 0px;
							height: 40px;
							width: 200px;
							margin-bottom: 15px;
						}
						.form img {
							margin-top: 15px;
						}
					</style>
				</head>
				<body>
					<center>
 
 
					</center>
				</body>
			</html>";
}
$mysqli->close();