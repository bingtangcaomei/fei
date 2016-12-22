<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
mysql_select_db ( 'fei' );
$content = $_POST ['content'];
$id=$_COOKIE["id"];
$sql="UPDATE news SET content=$content WHERE id='$id'";
$result=mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
echo "修改成功！<br>正在返回..";
?>
<meta http-equiv="Refresh" content="1;URL=select.php" />