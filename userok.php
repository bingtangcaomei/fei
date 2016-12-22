<?php
if (isset($_COOKIE["user"])){
echo "欢迎" . $_COOKIE["user"] . "来到郑州成功财经学院校友录！<br>";
}
?>
<br>
<form action="query.php" method="post">
请输入想要查询的同学姓名：<br>
<input type="text" value="" id=name name=name>
<input type="submit" value="查询">
</form>
<a href="person.php">个人信息</a><br>
<a href="myinfo.php">我的信息</a><br>
<a href="friend.php">我的好友</a><br>
<a href="message.php">我的班级</a><br>
<a href="pass.php">密码修改</a><br>
<a href="index.php">退出登录</a>

