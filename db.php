<?php
include_once('includes/config.app');
// ������������ � ��
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// ���� ������ �����������, �� ������� �� �� �����
if (mysqli_connect_errno($mysqli)) {
    echo "�� ������� ������������ � MySQL: " . mysqli_connect_error();
}
// ��������� SQL ������
$res = mysqli_query($mysqli, "SELECT * FROM `users` WHERE 1");
// ���� ������ ��������, �� $res ����� ����� false � ����� ������ 
if(!$res) var_dump(mysqli_error($mysqli));

// �������� ������� ��� ����������, ������� �������� �� ��
// � ������������, ����� ��������� ���� ������ �����, ����� ���� ��� ��������
while($row = mysqli_fetch_assoc($res)){
	var_dump($row);
	echo '<br/>';
	echo '<br/>';
}

// ��������� ����������
mysqli_close($mysqli);