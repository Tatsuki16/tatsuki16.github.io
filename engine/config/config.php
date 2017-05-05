<?php
$config = array(
	'sitename' => 'Albania RolePlay' ,// Название вашего сайта. 
	'siteurl' => 'http://albaniarp.ru/',// URL адрес сайта.
	'meta' => '',
	'forum' => 'http://albaniarp.ru/forum',// URL адрес форума. 
	'ipserver' => 'localhost:7777',// IP адрес вашего сервера. 
	//База 
	'host' => '87.98.252.100',
	'user' => 'albania1_db',
	'pass' => 'CRtUszd0Kx',
	'db' => 'albania1_db',
	//rk
	'rklogin' => 'socialrp',
	'rkpass1' => 'USUXV3eL0WAaEW6fk5S4',
	'rkpass2' => 'cyqGv0nW97ZuNcKn6Ds4'
 );
$dbcon = @mysql_connect($config['host'],$config['user'],$config['pass']);
mysql_query('SET NAMES utf8');
mysql_query('set character_set_client=\'utf8\'');
mysql_query('set character_set_results=\'utf8\'');
mysql_query('set collation_connection=\'utf8_general_ci\'');
if (!$dbcon)
{
	exit("<P>Немогу подключиться к MySQL серверу :(</P>");
}
if (! @mysql_select_db($config['db'],$dbcon) )
{
	exit("<P>Немогу найти базу данных :(</P>");
}
?>
