<?php
session_cache_limiter( FALSE );
include('lock.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>დააგროვეთ ბონუსები</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
</head>
<body class="back_color" >
<table align="center">
<tr>
<td align="center" ><div class="border">
<div class="stili_1">შეავსეთ ყველა ველი აუცილებლათ</div>
<form action="addklienti.php" method="post" enctype="multipart/form-data" name="sampleform">
<p><div class="form">
<input name="saxeli" type="text"  placeholder="მომხმარებლის სახელი" size="50" /></div>
</p>
<br />
<p>
<input name="gvari" type="text"  placeholder="მომხმარებლის გვარი" size="50" />
</p><br />
<p>
<input name="piradi" type="text"  placeholder="მომხმარებლის პირადი #" size="50" />
</p><br />
<p>
<label>ბარათის ტიპი</label>
<select name="tipi">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
</select>%
</p><br />
<p>
<input type="text" name="firstinput" placeholder="რეგისტრაციის თარიღი" size=30><small><a href="javascript:showCal('Calendar1')"><img src="images/iconCalendar.gif" /></a></small>
</p>
<br />
<div align="center"><input name="submit" type="button"  value="დამატება"/></div>
</form></div>
</td>
</tr>
</table>
</body>
</html>
