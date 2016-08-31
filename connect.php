<?php 
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
// Подключение к базе данных
$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
mysql_query("SET NAMES 'utf8'",$db);
?>