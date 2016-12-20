<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
    $id=$_GET['id'];
	mysql_select_db ( 'fei' );
	$sql = "DELETE  FROM news WHERE id='$id'";
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}
	echo "删除成功！";
	?>
	<br><a href=select.php>返回</a>
