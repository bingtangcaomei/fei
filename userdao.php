<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user = $_POST ['user'];
$pass = $_POST ['pass'];
if (isset ( $_POST ['denglu'] )) {
	mysql_select_db ( 'fei' );
	$sql = "SELECT pass,pression FROM user WHERE uid='$user'";
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}
	while ( $row = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
		$password = $row ['pass'];
		$pression = $row ['pression'];
	}
	if ($pass == $password && $pression == "学生") {
		echo "<script>url='userok.php';window.location.href=url;</script>";
	} else {
		echo "账号/密码错误<br>";
		echo "<a href='index.php'>登录</a>";
	}
	} 
	mysql_close ();
setcookie ( "user", "$user" );
/*
 * if (!'uid'){
 * if('uid'==$user && 'pass'==$pass && 'pression'=="学生"){
 * echo "<script language=\”javascript\”>";
 * echo "document.location=\"studentuser.php";
 * echo "</script>";
 * }
 * echo "学生为空！";
 */
?>