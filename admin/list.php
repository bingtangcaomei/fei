<title>班级留言</title>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<link rel="stylesheet" href="../css/style1.css">
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$year=$_COOKIE["year"];
$dept=$_COOKIE["dept"];
$class=$_COOKIE["class"];
$sql = "SELECT  * FROM news where year= '$year' AND dept='$dept' AND class='$class'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<h1>留言列表</h1>
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
               <td><?php echo "<a href='listdel.php?id=".$arr['id']."'><font color='red'>删除留言</a>"?></td>     
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="adminok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
</div><div class=footer>©冰糖草莓 2016.12</div>