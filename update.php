<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$id=$_GET['id'];
setcookie ( "id", "$id" );
$sql = "SELECT  title,content FROM news where id= '$id'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while($arr=mysql_fetch_assoc($result)){
	$title=$arr['title'];
	$content=$arr['content'];
}
?><h1>修改留言</h1>
<form action="updatedao.php" method="post">
标题:<input type="text" name="title" id="title" value=<?php echo $title;?>><br><br>
内容:<br><br><textarea rows="8" cols="35" name="content" id="content"><?php echo $content;?></textarea><br>
<input type ="submit" value="修改" id="xiugai" name="xiugai">
<a href="select.php">返回</a>
</form>
</div><div class=footer>©冰糖草莓 2016.12</div>