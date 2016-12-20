<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
	mysql_select_db ( 'fei' );
	$sql = "DELETE pass,pression FROM user WHERE uid='$user'";
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}