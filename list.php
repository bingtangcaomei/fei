<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$user=$_COOKIE['user'];
$sql = "SELECT * FROM news";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '111' );
}
	?>
	<table>
		       <tr>
					<th>题目</th>
					<th>用户</th>
					<th>内容</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['content'];?></td>
                    
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="userok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
