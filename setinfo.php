<title>发布留言</title>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br>";
?>
<h1>发布留言</h1>
<form action="setinfodao.php" method="post">
标题:&nbsp;<input type="text" name="title" id="title"><br><br>
内容:<br><br><textarea rows="8" cols="35" name="content" id="content"></textarea><br>
<input type ="submit" value="发布" id="fabu" name="fabu">
<a href="message.php">返回</a>
</form>
</div><div class=footer>©冰糖草莓 2016.12</div>