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
$user=$_COOKIE["user"];
if (isset ( $_POST ['fabu'] )){
	$sql = "SELECT  name,year,dept,class FROM student where user= '$user'";
	mysql_select_db ( 'fei' );
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}
	while($arr=mysql_fetch_assoc($result)){
		$name=$arr['name'];
		$year=$arr['year'];
		$dept=$arr['dept'];
		$class=$arr['class'];
	}
	$sql = "INSERT INTO news (name,title,content,year,dept,class) VALUES ('$name','$title','$content','$year','$dept','$class')";
	mysql_select_db('fei');
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '发布失败！');
	}
	echo '发布成功！<br>正在返回..';
}
?>
<meta http-equiv="Refresh" content="1;URL=message.php" />