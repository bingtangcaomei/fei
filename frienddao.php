<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$id=$_GET['id'];
$user= $_COOKIE["user"];
mysql_select_db ( 'fei' );
$sql="SELECT name,sex,tel, year,dept,class FROM student WHERE id='$id'";
$result=mysql_query($sql,$conn);
if(!$result){
	die('');
}
while($arr=mysql_fetch_assoc($result)){
	$name=$arr['name'];
	$sex=$arr['sex'];
	$tel=$arr['tel'];
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql = "INSERT INTO friend (user,name,sex,tel,year,dept,class) VALUES('$user','$name','$sex','$tel','$year','$dept','$class')";
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	echo "<h1>添加成功！</h1><br>正在返回..";
	?>
</div><div class=footer>©冰糖草莓 2016.12</div>
<meta http-equiv="Refresh" content="3;URL=userok.php" />