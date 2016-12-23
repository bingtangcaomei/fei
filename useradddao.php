<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
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
$pass1 = $_POST ['pass1'];
if (isset ( $_POST ['zhuce'] )) {
	$sql = "SELECT uid FROM user";
	mysql_select_db ( 'fei' );
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}
	while ( $row = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
		$uid = $row ['uid'];
	}if ($pass == $pass1){
	if ($uid == $user) {
		echo "用户名已存在<br>";
		echo "<a href='useradd.php'>重新注册</a>";
	} elseif (! $user) {
		echo "用户名不能为空<br>";
		echo "<a href='useradd.php'>重新注册</a>";
	} elseif (strlen ( $user ) < 4) {
		echo "请输入正确的用户名<br>";
		echo "<a href='useradd.php'>重新注册</a>";
	}elseif (!$pass){
		echo "密码不能为空<br>";
		echo "<a href='useradd.php'>重新注册</a>";
	}else{
		mysql_select_db ( 'fei' );
		$sql = "INSERT INTO user (uid,pass,pression) VALUES ('$user','$pass','学生')";
		$result = mysql_query ( $sql, $conn );
		if (! $result) {
			die ( '注册失败！' );
		}
		echo '注册成功！<br>';
		echo "<a href='index.php'>登录</a>";
	}
	}else{
		echo "两次密码不一致！<br>";
		echo "<a href='useradd.php'>重新注册</a>";
	}
	mysql_close ();
}
?>
</div><div class=footer>©冰糖草莓 2016.12</div>