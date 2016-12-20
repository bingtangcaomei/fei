<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$title = $_POST ['title'];
$content = $_POST ['content'];
$name=$_COOKIE["user"];
if (isset ( $_POST ['fabu'] )){
	$sql = "INSERT INTO news (name,title,content) VALUES ('$name','$title','$content')";
	mysql_select_db('fei');
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '发布失败！' );
	}
	echo '发布成功！<br>';
	echo "<a href='userok.php'>返回</a>";
}
?>