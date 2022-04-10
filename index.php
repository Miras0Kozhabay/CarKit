<?php
$dbhost = "localhost"; // Хост
$dbuser = "юзер"; // Имя пользователя
$dbpassword = "пароль"; // Пароль
$dbname = "бд"; // Имя базы данных
 
// Подключаемся к mysql серверу
$link = mysql_connect($dbhost, $dbuser, $dbpassword);
// Выбираем нашу базу данных
mysql_select_db($dbname, $link);
?>
