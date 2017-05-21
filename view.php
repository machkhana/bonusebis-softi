<?php
session_cache_limiter( FALSE );
include('lock.php');
?>
<?php
if (isset($_GET['id']))  {$id = $_GET['id'];}
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ("SELECT * FROM xelshekruleba WHERE id='$id'");
$myrow = mysql_fetch_array ($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>კლიენტის ინფორმაცია</title>
<body><br />
<p align="center">რეგისტრაციის თარიღი: <?php echo $myrow["firstinput"] ?></p>
<table width="480" border="0" align="center" class="border">
  <tr>
    <td width="141" bgcolor="#CCCCCC">სახელი:</td>
    <td width="327" bgcolor="#CCCCCC"><?php echo $myrow["saxeli"] ?></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">გვარი:</td>
    <td bgcolor="#CCCCCC"><?php echo $myrow["gvari"] ?></td>
  </tr>
  <tr>
    <td bgcolor="#CCCCCC">პირადი #:</td>
    <td bgcolor="#CCCCCC"><?php echo $myrow["piradi"] ?></td>
  </tr>
   <tr>
    <td bgcolor="#CCCCCC">მისამართი:</td>
    <td bgcolor="#CCCCCC"><?php echo $myrow["misamarti"] ?></td>
  </tr>
   <tr>
    <td bgcolor="#CCCCCC">ტელეფონი:</td>
    <td bgcolor="#CCCCCC"><?php echo $myrow["telefoni"] ?></td>
  </tr>
</table>

</body>
</html>
