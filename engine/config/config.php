<?php
$config = array(
	'sitename' => 'Prestigio RolePlay' ,// Название вашего сайта. 
	'siteurl' => 'http://tatsuki16.github.io/',// URL адрес сайта.
	'meta' => '',
	'forum' => 'http://tatsuki16.github.io/forum',// URL адрес форума. 
	'ipserver' => 'localhost:7777',// IP адрес вашего сервера. 
	//База 
	'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'db' => 'prestigio',
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
