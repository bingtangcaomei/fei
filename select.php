<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user=$_COOKIE['user'];
$sql = "SELECT  id,title,content FROM news where name= '$user'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<table>
		       <tr>
					<th>id</th>
					<th>题目</th>
					<th>内容</th>
					<th>操作</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['id'];?></td>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['content'];?></td>
                    <td><?php echo "<a href='delete.php?id=".$arr['id']."'><font color='red'>删除</a>"?></td>
                    
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="userok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
