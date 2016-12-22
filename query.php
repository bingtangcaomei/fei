<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
$name=$_POST['name'];
mysql_select_db ( 'fei' );
$sql="SELECT sex,tel, year,dept,class FROM student WHERE name='$name'";
$result=mysql_query($sql,$conn);
if(!$result){
	die('');
}
while ($arr=mysql_fetch_array($result, MYSQL_ASSOC)){
echo "你所查找的<font color=red>{$name}</font>同学:<br>性别:{$arr['sex']}<br>电话:{$arr['tel']}<br>入学年级:{$arr['year']}<br>所在系别:{$arr['dept']}<br>所处班级:{$arr['class']}<br><br>";
}
echo  "<a href='userok.php'>返回</a>";