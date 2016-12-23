<?php
echo "用户:" . $_COOKIE["user"] ."<br><br>";
echo "上传照片:<br><br>";
?>
<form enctype="multipart/form-data" action="upload.php" method="post">
<input type="hidden" name="max_file_size" >
<input type="file" name="upfile" ><br>
<input type="submit" value="上传文件">
</form>
<a href="download.php">查看相册</a><br>
<?php echo "<a href='message.php'>返回</a>";?>