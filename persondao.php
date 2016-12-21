<?php 

$user= $_COOKIE["user"];
$name=$_POST ['name'];
$sex=$_POST ['sex'];
$tel=$_POST ['tel'];
$s1= $_POST["s1"];
$s2= $_POST["s2"];
$s3= $_POST["s3"];
if ($s1==1){
	$year="12级";
}elseif($s1==2) {
	$year="13级";
}else {
	$year="14级";
}
$len=substr( $s2, 1,2 );
if ($len==1){
	$dept="信息工程系";
}elseif($len==2) {
	$dept="会计系";
}else {
	$dept="外语系";
}
if($s3==11 || $s3==21 || $s3==31){
	$class="计科班";
}elseif($s3==12 || $s3==22){
	$class="会计班";
}else{
	$class="外语班";
};
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
mysql_select_db("fei",$conn);
$sql = "SELECT user FROM student";
$result = mysql_query ( $sql, $conn );
if (! $result) {
	die ( '' );
}
while ( $row = mysql_fetch_array ( $result, MYSQL_ASSOC ) ) {
	$user1 = $row ['user'];
}if ($user == $user1){
		echo "保存失败！<br>";
		echo "<a href='person.php'>返回</a>";}
else{
$sql="INSERT INTO student (user,name,sex,tel,year,dept,class) VALUES('$user','$name','$sex','$tel','$year','$dept','$class')";
$result=mysql_query($sql,$conn);
if (! $result) {
			die ( '保存失败！' );
			echo "<a href='person.php'>返回</a>";
		}
		echo '保存成功！<br>';
		echo "<a href='userok.php'>返回</a>";}
?> 
