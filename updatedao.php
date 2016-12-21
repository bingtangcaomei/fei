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
echo "修改成功！";
?>
<br><a href=select.php>返回</a>