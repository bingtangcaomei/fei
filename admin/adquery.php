<title>校友查询</title>
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
$name=$_POST['name'];
mysql_select_db ( 'fei' );
$sql="SELECT id,sex,tel, year,dept,class FROM student WHERE name='$name'";
$result=mysql_query($sql,$conn);
if(!$result){
	die('');
}
?>
<h1>查询列表</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
					<th>入学年级</th>
					<th>所在系别</th>
					<th>所处班级</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
				    <td><?php echo "<font color=red>{$name}</font>";?></td>
                    <td><?php echo $arr['sex'];?></td>
                    <td><?php echo $arr['tel'];?></td>
                    <td><?php echo $arr['year'];?></td>
                    <td><?php echo $arr['dept'];?></td>
                    <td><?php echo $arr['class'];?></td>
                </tr>
                  <?php 	} ?>  
                            </table>
<?php
echo  "<a href='adminok.php'>返回</a>";?>
</div>
<div class=footer>©冰糖草莓 2016.12</div>