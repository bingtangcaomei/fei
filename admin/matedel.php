<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<link rel="stylesheet" href="../css/style1.css">
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
	$sql = "DELETE  FROM student WHERE id='$id'";
	$result = mysql_query ( $sql, $conn );
	if (! $result) {
		die ( '' );
	}
	echo "<h1>删除成功！</h1><br>正在返回..";
	?>
</div><div class=footer>©冰糖草莓 2016.12</div>
<meta http-equiv="Refresh" content="2;URL=mate.php" />
