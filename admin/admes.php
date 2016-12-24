<title>班级管理</title>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<link rel="stylesheet" href="../css/style1.css">
<?php 
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
$class=$s3;
echo "你所在的班级是:&nbsp;<font color='red'>{$year}&nbsp;{$dept}&nbsp;{$class}</font><br><br>";
setcookie("year","$year");
setcookie("dept","$dept");
setcookie("class","$class");
?> 
<h1>班级管理</h1><br>
<a href="mate.php">校友管理</a><br>
<a href="list.php">留言管理</a><br>
<a href="image.php">相册管理</a><br>
<a href="adminok.php">返回</a>
</div><div class=footer>©冰糖草莓 2016.12</div>
