<title>班级相册</title>
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
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$sql = "SELECT year,dept,class FROM student where year= '$year' AND dept='$dept' AND class='$class'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while($arr=mysql_fetch_assoc($result)){
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql = "SELECT id,image,year,dept,class FROM image where year= '$year' AND dept='$dept' AND class='$class'";
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
?>
<h1>相册列表</h1>
	<table>
		       <tr>
					<th>简介</th>
                    <th>图片</th>
				</tr>
<?php while($arr=mysql_fetch_assoc($result)){
	?>
	<?php  $picName='../image'."/cloudy".$arr['image'];?>
				<tr>
                    <td><?php echo $arr['image'];?></td>
                    <td><?php echo "<div style='border:#F00 1px solid; width:200px;height:200px'>
    <img src=\"".$picName."\" width=200px height=200px>"?></td>
      <td><?php echo "<a href='imagedel.php?id=".$arr['id']."'><font color='red'>删除照片</a>"?></td>        
                </tr>
                  <?php 	} ?>  
</table>
<a href="adminok.php">返回</a>
</div><div class=footer>©冰糖草莓 2016.12</div>

