<?php
session_cache_limiter( FALSE );
include('lock.php');
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
<form name="sampleform" method="POST" enctype="multipart/form-data"  action="add_xelsh.php">
<p>
<input name="saxeli" type="text"  placeholder="მომხმარებლის სახელი" size="50" class="damatebis_forma" />
</p>
<p>
<input name="gvari" type="text"  placeholder="მომხმარებლის გვარი" size="50" class="damatebis_forma" />
</p>
<p>
<input name="piradi" type="text"  placeholder="მომხმარებლის პირადი #" size="50" class="damatebis_forma" />
</p>
<p>
<input name="misamarti" type="text"  placeholder="მისამართი" size="50" class="damatebis_forma" />
</p>
<p>
<input name="telefoni" type="text"  placeholder="ტელეფონი" size="50" class="damatebis_forma" />
</p>
<p>
<select name="pozicia" class="damatebis_forma">
<option>..აირჩიეთ პოზიცია..</option>
<option value="1">დიზაინერი</option>
<option value="2">ხელოსანი</option>
</select>
</p>
<p>
<input type="text" name="firstinput" placeholder="ხელშეკრულების ვადა" size=30 class="damatebis_forma"><small><a href="javascript:showCal('Calendar1')"><img src="images/iconCalendar.gif" /></a></small>
დან<p>
<input type="text" name="secondinput" placeholder="ხელშეკრულების ვადა" size=30 class="damatebis_forma"><small><a href="javascript:showCal('Calendar2')"><img src="images/iconCalendar.gif" /></a></small>
მდე
</p>
<br />
<div align="center"><input name="submit" type="submit"  value="ხელშეკრულების დამატება" class="damateba"/>
</div><br />
</form>
</div>
</td>
</tr>
</table>
</body>
</html>
