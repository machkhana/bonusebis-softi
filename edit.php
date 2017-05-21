<?php
session_cache_limiter( FALSE );
include('lock.php');
?>
<?php
if($_GET["id"]) {$id = $_GET["id"];}
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ("SELECT * FROM xelshekruleba WHERE id='$id'");
while ($myrow = mysql_fetch_array ($result))
{
$id = $myrow["id"];
$saxeli = $myrow["saxeli"];
$gvari = $myrow["gvari"];
$piradi = $myrow["piradi"];
$misamarti = $myrow["misamarti"];
$telefoni =$myrow["telefoni"];
$firstinput = $myrow["firstinput"];
$secondinput = $myrow["secondinput"];
$pozicia = $myrow["pozicia"];
?>
<?php
mysql_query("SET NAMES 'utf8'");
$result2 = mysql_query ("SELECT dasaxeleba FROM danarati WHERE id ='$pozicia'"); 
$myrow2 = mysql_fetch_array ($result2);
{
$dasaxeleba = $myrow2['dasaxeleba'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>დააგროვეთ ბონუსები</title>
</head>
<body class="back_color" >
<table align="center">
<tr>
<td align="center" ><div class="border">
<div class="stili_1">შეავსეთ ყველა ველი აუცილებლათ</div>
<form name="sampleform" method="POST"  action="update.php">
<p><div class="form">
<input type="hidden" name="id" value="<?php echo $id ?>" class="damatebis_forma"/>
</p>
<p>
<input name="saxeli" type="text"  value="<?php echo $saxeli ?>" size="50" class="damatebis_forma"/></div>
</p>
<p>
<input name="gvari" type="text"  value="<?php echo $gvari ?>" size="50" class="damatebis_forma"/>
</p>
<p>
<input name="piradi" type="text"  value="<?php echo $piradi ?>" size="50" class="damatebis_forma" />
</p>
<p>
<input name="misamarti" type="text"  value="<?php echo $misamarti ?>" size="50" class="damatebis_forma"/>
</p>
<p>
<input name="telefoni" type="text"  value="<?php echo $telefoni ?>" size="50" class="damatebis_forma"/>
</p>
<p>
<select name="pozicia" class="damatebis_forma">
<option><?php echo $dasaxeleba ?></option>
<option value="1">დიზაინერი</option>
<option value="2">ხელოსანი</option>
</select>
</p>
<p>
<input type="text" name="firstinput" value="<?php echo $firstinput ?>" size=30 class="damatebis_forma"><small><a href="javascript:showCal('Calendar1')"><img src="images/iconCalendar.gif" /></a></small>
დან<p>
<input type="text" name="secondinput" value="<?php echo $secondinput ?>" size=30 class="damatebis_forma"><small><a href="javascript:showCal('Calendar2')"><img src="images/iconCalendar.gif" /></a></small>
მდე
</p>
<br />
<div align="center"><input name="submit" type="submit"  value="ხელშეკრულების შეცვლა" class="damateba"/></div><br />
</form>
</div>
</td>
</tr>
</table>
<?php } ?>
</body>
</html>
