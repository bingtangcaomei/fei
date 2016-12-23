<div class="all">
      <div class="logo">
      <img src="css/logo.png">
      </div>
<link rel="stylesheet" href="css/style1.css">
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["user"] . "</font>"."<br><br><br>";
$arrType=array('image/jpg','image/jpeg','image/gif','image/png','image/bmp','image/pjpeg');
$upfile='./image'; //图片目录路径
$max_size='500000';      // 最大文件限制（单位：byte）
$file=$_FILES['upfile'];

 if($_SERVER['REQUEST_METHOD']=='POST'){ //判断提交方式是否为POST
     if(!is_uploaded_file($file['tmp_name'])){ //判断上传文件是否存在
    echo "<font color='red'>文件不存在！</font>";
    exit;
    }
   
  if($file['size']>$max_size){  //判断文件大小是否大于500000字节
    echo "<font color='red'>上传文件太大！</font>";
    echo "<a href='image.php'>返回</a>";
    exit;
   } 
  if(!in_array($file['type'],$arrType)){  //判断图片文件的格式
     echo "<font color='red'>上传文件格式不对！</font>";
     echo "<a href='image.php'>返回</a>";
     exit;
   }
  if(!file_exists($upfile)){  // 判断存放文件目录是否存在
   mkdir($upfile,0777,true);
   } 
    $imageSize=getimagesize($file['tmp_name']);
   $img=$imageSize[0].'*'.$imageSize[1];
   $fname=$file['name'];
   $ftype=explode('.',$fname);
   $picName=$upfile."/cloudy".$fname;
   
   if(file_exists($picName)){
    echo "<font color='red'>同文件名已存在！</font><br>";
    echo "<a href='image.php'>返回</a>";
    echo "</div><div class=footer>©冰糖草莓 2016.12</div>";
    exit;
     }
   if(!move_uploaded_file($file['tmp_name'],$picName)){  
    echo "<font color='red'>移动文件出错！</font><br>";
    echo "<a href='image.php'>返回</a>";
    echo "</div><div class=footer>©冰糖草莓 2016.12</div>";
    exit;
    }
   else{
   	$image=$fname;
   	$dbhost = 'localhost';
   	$dbuser = 'root';
   	$dbpass = 'root';
   	$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
   	if (! $conn) {
   		die ( '连接数据库失败！' );
   	}
   	$user=$_COOKIE['user'];
   	$sql = "SELECT year,dept,class FROM student where user= '$user'";
   	mysql_select_db ( 'fei' );
   	$result = mysql_query ( $sql, $conn );
   	if (! $result) {
   		die ( '' );
   	}
   	while($arr=mysql_fetch_assoc($result)){
   		$year=$arr['year'];
   		$dept=$arr['dept'];
        $class=$arr['class'];
   	}
   	$sql = "INSERT INTO image (image,year,dept,class) VALUES ('$image','$year','$dept','$class')";
   	mysql_select_db ( 'fei' );
   	$result = mysql_query ( $sql, $conn );
   	if (! $result) {
   		die ( '' );
   	}
echo "<font color='red'>上传成功！</font><br><br>";
echo "图片预览：<br><center><div style='border:#F00 1px solid; width:200px;height:200px'>
    <img src=\"".$picName."\" width=200px height=200px>".$fname."</div></center><br>";}}
echo "<a href='image.php'>返回</a>";
?>
</div><div class=footer>©冰糖草莓 2016.12</div>



