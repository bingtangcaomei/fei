<title>班级列表</title>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<link rel="stylesheet" href="../css/style1.css">
<?php
$year=$_COOKIE["year"];
$dept=$_COOKIE["dept"];
$class=$_COOKIE["class"];
echo "你所在的班级是:&nbsp;<font color='red'>{$year}&nbsp;{$dept}&nbsp;{$class}</font><br><br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$sql = "SELECT id,name,sex,tel FROM student where year= '$year' AND dept='$dept' AND class='$class'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
	?>
	<h1>班级列表</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['sex'];?></td>
                    <td><?php echo $arr['tel'];?></td> 
                     <td><?php echo "<a href='matedel.php?id=".$arr['id']."'><font color='red'>删除同学</a>"?></td>        
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="adminok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
</div><div class=footer>©冰糖草莓 2016.12</div>