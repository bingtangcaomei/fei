<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
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
?>
<form action="updatedao.php" method="post">
标题：<input type="text" name="title" id="title" value=<?php echo $title;?>><br>
内容：<textarea rows="8" cols="35" name="content" id="content"><?php echo $content;?></textarea><br>
<input type ="submit" value="修改" id="xiugai" name="xiugai">
</form>
