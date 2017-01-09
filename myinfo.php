<title>我的信息</title>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br>";
$user= $_COOKIE["user"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
@$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
mysql_select_db("fei",$conn);
$sql = "SELECT name,sex,tel,year,dept,class FROM student where user= '$user'";
mysql_select_db ( 'fei' );
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
?>
<h1>我的信息</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
					<th>年份</th>
					<th>系别</th>
					<th>专业</th>
				</tr>
<?php
while($arr=mysql_fetch_assoc($result)){
?>
				<tr>
                    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['sex'];?></td>
                    <td><?php echo $arr['tel'];?></td>
                    <td><?php echo $arr['year'];?></td>
                    <td><?php echo $arr['dept'];?></td>
                    <td><?php echo $arr['class'];?></td>
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="userok.php">返回</a>

        <?php 
            mysql_close();//关闭数据库
        ?>
     </div><div class=footer>©冰糖草莓 2016.12</div>