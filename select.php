<title>我的留言</title>
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
$user=$_COOKIE['user'];
$sql = "SELECT name FROM student where user= '$user'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while($arr=mysql_fetch_assoc($result)){
	$name=$arr['name'];
}
$sql = "SELECT  id,title,content FROM news where name= '$name'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<h1>我的留言</h1>
	<table>
		       <tr>
					<th>标题</th>
					<th>内容</th>
					<th>操作</th>
					<th>操作</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['content'];?></td>
                    <td><?php echo "<a href='delete.php?id=".$arr['id']."'><font color='red'>删除</a>"?></td>
                    <td><?php echo "<a href='update.php?id=".$arr['id']."'><font color='red'>修改</a>"?></td>
                    
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="message.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
</div><div class=footer>©冰糖草莓 2016.12</div>