<?php
include_once('includes/config.app');
// ������������ � ��
$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// ���� ������ �����������, �� ������� �� �� �����
if (mysqli_connect_errno($mysqli)) {
    echo "�� ������� ������������ � MySQL: " . mysqli_connect_error();
}
// ��������� SQL ������
//$res = mysqli_query($mysqli, "SELECT * FROM `users` WHERE 1");
// ���� ������ ��������, �� $res ����� ����� false � ����� ������ 
//if(!$res) var_dump(mysqli_error($mysqli));

// �������� ������� ��� ����������, ������� �������� �� ��
// � ������������, ����� ��������� ���� ������ �����, ����� ���� ��� ��������
//while($row = mysqli_fetch_assoc($res)){
//	var_dump($row);
//	echo '<br/>';
//	echo '<br/>';
//}

// ��������� ����������
$res = mysqli_query($mysqli, "SELECT * FROM `cats`");
while($cat = mysqli_fetch_assoc($res)){
    var_dump($cat);
    echo '<img src="images/cats/'.$cat['image'].'" />';
}

$res = mysqli_query($mysqli, "SELECT * FROM `menu` WHERE parent_id = 0 AND state = 1");
echo '<ul>';
while($item = mysqli_fetch_assoc($res)){
    ?>
    <li><a href="<?php echo $item['main']?'/':$item['link'];?>" 
            title="<?php echo $item['title'];?>">
            <?php echo $item['title'];?>
        </a>
    </li>
    <?php
}   
echo '</ul>';
//'INSERT INTO users (`id`, `mod_date`) VALUES ("1", NOW())';
mysqli_close($mysqli);

include('pages/'.(in_array($_GET['page'], $pages)?$_GET['page']:'home').'.php');