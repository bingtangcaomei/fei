<?php
echo "用户:" . $_COOKIE["user"] ."<br>";
?>
<form action="setinfodao.php" method="post">
标题：<input type="text" name="title" id="title"><br>
内容：<textarea rows="8" cols="35" name="content" id="content"></textarea><br>
<input type ="submit" value="发布" id="fabu" name="fabu">
<a href="message.php">返回</a>
</form>