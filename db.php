<?php
include_once('includes/config.app');
// подключаемся к БД
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// если ошибка подключения, то выводим ее на экран
if (mysqli_connect_errno($mysqli)) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}
// выполняем SQL запрос
$res = mysqli_query($mysqli, "SELECT * FROM `users` WHERE 1");
// если запрос неверный, то $res будет равно false и тогда сможем 
if(!$res) var_dump(mysqli_error($mysqli));

// циклично выводим все содержимое, которое получили из БД
// с предусловием, чтобы выполнять цикл только когда, когда есть что показать
while($row = mysqli_fetch_assoc($res)){
	var_dump($row);
	echo '<br/>';
	echo '<br/>';
}

// закрываем соединение
mysqli_close($mysqli);