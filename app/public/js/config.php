<?php
// Название вашего сайта. Пример: Samp RolePlay - Играй в GTA SA по сети!
define("SUITE_NAME",          "Elite Role Play");

// Логотип вашего сайта. Пример: SAMP RolePlay
define("SUITE_LOGO",          "[img] http://elite-host.esy.es/img/%D0%91%D0%B5%D0%B7%20%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-1.png [/img]");

// URL адрес сайта. Пример: liteucp.ru
define("SUITE_URL",          "/");

// Ключевые слова (meta keywords). Пример: samp, roleplay, gta sa
define("KEY_WORDS",          "samp, eliterp, roleplay, gta sa");

// URL адрес форума. Пример: forum.liteucp.ru
define("FORUM_URL",          "#");

// ID вашей группы вконтакте.
define("VK_GROUP",           "55270130");

// IP адрес вашего сервера. Пример: 127.0.0.1
define("IP_SERVER",          "31.31.196.108");

// Порт вашего сервера.
define("PORT_SERVER",        "20030");
// Хост Базы Данных. Пример: localhost, 127.0.0.1 и прочие.
define("HOST",               "localhost");

// Имя пользователя Базы данных.
define("USER",               "root");

 // Пароль пользователя Базы данных.
define("PASSWORD",           "90fs332");

// Название Базы данных.
define("DB",                 "vrp");

$mysql_host='localhost'; // IP Расположения базы
$mysql_user='root'; // Пользователь базы
$mysql_password=''; // Пароль от пользователя 
$mysql_db='vrp'; // Название базы
$dbcon = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
mysql_query('SET NAMES utf8');
mysql_query('set character_set_client=\'utf8\'');
mysql_query('set character_set_results=\'utf8\'');
mysql_query('set collation_connection=\'utf8_general_ci\'');
if (!$dbcon)
{
	exit("<P>Немогу подключиться к MySQL серверу :(</P>");
}
if (! @mysql_select_db($mysql_db,$dbcon) )
{
	exit("<P>Немогу найти базу данных :(</P>");
}
?>
