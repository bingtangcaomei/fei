<?php
if (isset($_COOKIE["user"])){
echo "欢迎" . $_COOKIE["user"] . "来到郑州成功财经学院校友录！<br>";
}
/* $date= date('Y-m-d H:i:s',time());
echo "$date"; */
?>
<br>
<a href="person.php">个人信息</a><br>
<a href="myinfo.php">我的信息</a><br>
<a href="setinfo.php">发布帖子</a><br>
<a href="list.php">查看帖子</a><br>
<a href="select.php">我的帖子</a><br>
<a href="index.php">退出登录</a>

