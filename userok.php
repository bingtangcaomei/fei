<title>郑州成功财经学院校友录</title>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
if (isset($_COOKIE["user"])){
echo "欢迎" ."<font color='blue'>". $_COOKIE["user"] . "</font>"."来到郑州成功财经学院校友录！<br>";
}
?>
<form action="query.php" method="post">
请输入想要查询的同学姓名：<br><br>
<input type="text"  id=name name=name>
<input type="submit" value="查询">
</form><br>
<?php echo "<font color='red'>请先录入个人信息,否则会使用异常！</font><br><br>";?>
<a href="person.php">个人信息</a><br>
<a href="myinfo.php">我的信息</a><br>
<a href="friend.php">我的好友</a><br>
<a href="message.php">我的班级</a><br>
<a href="pass.php">密码修改</a><br>
<a href="index.php">退出登录</a>
</div>
<div class=footer>©冰糖草莓 2016.12</div>
