<?php  
echo "欢迎" . $_COOKIE["user"] . "来到郑州成功财经学院校友录！<br>";
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysql_connect ( $dbhost, $dbuser, $dbpass );
if (! $conn) {
	die ( '连接数据库失败！' );
}
mysql_select_db("fei",$conn)
 or die('');
?>
<html>
 <head>
  <title>校友录</title>
 </head>
<body>
<script language="JavaScript">
 
//二级菜单数组
var subcat = new Array();
<?php
$i=0;
$sql="select * from info1";
$query=mysql_query($sql,$conn);
while($arr=mysql_fetch_array($query))
{
 echo "subcat[".$i++."] = new Array('".$arr["year_id"]."','".$arr["dept"]."','".$arr["dept_id"]."');\n";
}
?>

//三级菜单数组
var subcat2 = new Array();
<?php
$i=0;
$sql="select * from info2";
$query=mysql_query($sql,$conn);
while($arr=mysql_fetch_array($query))
{
 echo "subcat2[".$i++."] = new Array('".$arr["dept_id"]."','".$arr["dept"]."','".$arr["class"]."');\n";
}
?>
function changeselect1(locationid)
{
 document.form.s2.length = 0;
 document.form.s2.options[0] = new Option('--请选择年份--','');
 for (i=0; i<subcat.length; i++)
 {
  if (subcat[i][0] == locationid)
  {
   document.form.s2.options[document.form.s2.length] = new Option(subcat[i][1], subcat[i][2]);
  }
 }
}
function changeselect2(locationid)
{
 document.form.s3.length = 0;
 document.form.s3.options[0] = new Option('--请选择专业--','');
 for (i=0; i<subcat2.length; i++)
 {
  if (subcat2[i][0] == locationid)
  {
   document.form.s3.options[document.form.s3.length] = new Option(subcat2[i][2], subcat2[i][3]);
  }
 }
}

</script><br>

<form name="form" action="persondao.php" method="post">
姓名:<input type="text" name="name" id="name"><br><br>
性别:<input type="radio" name="sex" value=男>男
          <input type="radio" name="sex" value=女>女<br><br>
电话:<input type="tel" name="tel"><br><br>
年份:
<select name="s1" onChange="changeselect1(this.value)">
<option>--请选择年份--</option>

<option  value=1>12级</option>
<option  value=2>13级</option>
<option  value=3>14级</option>
</select><br><br>
系别:
<select name="s2" onChange="changeselect2(this.value)">
 <option value="">--请选择系别--</option>
</select><br><br>
专业:
<select name="s3">
  <option value="">--请选择专业--</option>
</select><br><br>
<input type="submit" value="保存">
</form>
</body>
</html>