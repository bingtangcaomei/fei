<html>
<head>
<title>密码修改</title>
</head>
<body>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style.css">
<?php echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br>";?>
<h1>修改密码</h1>
<form action="passdao.php" method="post">
新密码:<input type="password" name="pass" id="pass"><br>
重复密码:<input type="password" name="pass1" id="pass1"><br>
<input type="submit" value='修改' id="xiugai" name="xiugai" ><br>
<a href="userok.php">返回</a>
</form>
</div><div class=footer>©冰糖草莓 2016.12</div>
</body>
</html>