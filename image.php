<title>班级相册</title>
<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br><br>";
echo "上传照片:";
?>
<form enctype="multipart/form-data" action="upload.php" method="post">
<input type="hidden" name="max_file_size" >
&nbsp;&nbsp;&nbsp;<input type="file" name="upfile" ><br><br>
<input type="submit" value="上传文件">
</form><br>

<a href="download.php">查看相册</a><br>
<?php echo "<a href='message.php'>返回</a>";?>
</div><div class=footer>©冰糖草莓 2016.12</div>