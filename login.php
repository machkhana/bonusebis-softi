<?php
session_cache_limiter( FALSE ); 
include("chuu/config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 
$sql="SELECT * FROM user WHERE username='$myusername' and passcode='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;
header("location: xelsh.php");
}
else 
{
$error = "";
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>lux</title>
<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
}
label
{
font-weight:bold;
width:100px;
font-size:14px;
}
.box
{
border:#666666 solid 1px;
}
</style>
</head>
<body bgcolor="#FFFFFF">
<table align="center">
   <tr>
     <td width="302" align="center" valign="top"><h2 style="color:#999999;">მოგესალმები </h2>
     <br /></td>
  </tr>
   <tr>
     <td>
<div style="width:300px; border-radius:4px; border:1px solid #666666;">
<div style="background-color:#666666; color:#FFFFFF; padding:3px;" align="center"><b>ჩაწერეთ სახელი და პაროლი</b></div>
<div align="center" style="margin-top:30px;">
<form action="" method="post">
<label><img src="admin image/user_red.png" /></label>&nbsp;&nbsp;<input type="text" name="username" class="box" size="20" title="სახელი" style="border-radius:2px; border:1px solid #999999;" />
<br /><br />
<label><img src="admin image/keys.png" /></label>&nbsp;&nbsp;<input type="password" name="password" class="box" size="20"title="პაროლი" style="border-radius:2px; border:1px solid #999999;" /><br/><br />
<div align="center"><input type="submit" value=" შესვლა " style="border-radius:2px; border:1px solid #999999; background-color: #FFFFFF;" /></div><br />
</form>
<div style="font-size:11px; color:#cc0000; margin-top:10px" align="center"></div><br />
</div>
</div>
<div align="center" style="font-size:9px; margin-top:20px;">Created By: <a href="http://servicege.net">Giorgi Machkhaneli</a></div>
    </td>
  </tr>
</table>
</body>
</html>
