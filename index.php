<?php 
const DB_USER = 'stud0_user';
const DB_PASS = 'OIFgiAan7O';
const DB_NAME = 'stud0_db2';
const DB_HOST = 'localhost';
//echo md5(5);
$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die('Не удалось соединиться: ' . mysql_error());;
mysql_select_db(DB_NAME) or die('Не удалось выбрать базу данных');;
// mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
var_dump($link);
$query = 'SELECT * FROM users';
$result = mysql_query($query) or die('Запрос не удался: ' . mysql_error());
$row = mysql_fetch_array($res, '');
var_dump($row);
mysql_close($mysqli);