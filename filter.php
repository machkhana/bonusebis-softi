<?php
include('lock.php');
if (isset($_GET['pozicia']))  {$filtri = $_GET['pozicia'];}
if(ctype_digit(@$_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }
$start_from = ($page-1) * 30;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" src="cal2.js"></script>
<script language="javascript" src="cal_conf2.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="ddimgtooltip.css" />
<script type="text/javascript" src="ddimgtooltip.js">
</script>
<title>დააგროვეთ ბონუსები</title>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>
<body class="back_color" >
<table align="center">
<tr>
<td align="center" ></td>
</tr>
</table>
<table width="877" height="27" border="0" align="center" >
 <tr>
   <td align="center" colspan="3">
   <a href="xelsh.php"><input name="" type="button" value="მთავარი" class="damateba" /></a>&nbsp;
   <a href="newxelsh.php"><input name="" type="button" value="დამატება" class="damateba" /></a>&nbsp;
   <a href="logout.php" title="გამოსვლა"><input name="" type="button" value="გამოსვლა" class="damateba" /></a>
   </td>
   <td colspan="7" align="center">
   <div style="width:230px; float:left; font-size:10px;">
   <form action="filter.php" method="GET" enctype="multipart/form-data">
   <select name="pozicia" class="archeva">
   <option>..აირჩიეთ პოზიცია..</option> 
   <option value="1">დიზაინერები</option>
   <option value="2">ხელოსნები</option>
   </select>
   <input name="submit" type="submit" value="გაფილტრე" class="damateba" />
   </form>
   </div>
   <div style="width:340px; float:left; font-size:11px;">
   <form  method="GET" action="search.php" >
   მიუთითე პირადი #: <input  type="text" name="piradi" class="archeva">
   <input  type="submit" name="submit" value="ძებნა"  class="damateba"/>
   </form>
    </div>
    </td>
 </tr>
 <tr class="zoma_10">
     <td align="center" class="cxrili" width="33">ინფო</td>
    <td align="center" class="cxrili" width="97">სახელი</td>
    <td align="center" class="cxrili" width="159">გვარი</td>
    <td align="center" class="cxrili" width="141">პირადი #</td>
    <td align="center" class="cxrili" width="95">ტელეფონი</td>
    <td align="center" class="cxrili" width="95">პოზიცია</td>
    <td align="center" class="cxrili" width="63">ხელშეკრულება</td>
    <td align="center" class="cxrili" width="63">დანართი</td>
    <td align="center" class="cxrili" width="58">წაშლა</td>
	<td align="center" class="cxrili" width="94">რედაქტირება</td>
  </tr>
  <tr>
  <?php 
mysql_query("SET NAMES 'utf8'");
$result = mysql_query("SELECT * FROM xelshekruleba WHERE pozicia='$filtri' ORDER BY id DESC LIMIT $start_from, 30");
while ($myrow = mysql_fetch_array ($result))
// aq gamodzaxeba
{
$id = $myrow["id"];
$saxeli = $myrow ["saxeli"];
$gvari =  $myrow ["gvari"];
$piradi =  $myrow ["piradi"];
$pozicia =  $myrow ["pozicia"];
$telefoni =  $myrow ["telefoni"];
$misamarti =  $myrow ["misamarti"];
$firstinput = $myrow ["firstinput"];
?>
<?php
mysql_query("SET NAMES 'utf8'");
$result2 = mysql_query ("SELECT dasaxeleba FROM danarati WHERE id = '$pozicia'"); 
$myrow2 = mysql_fetch_array ($result2);
$dasaxeleba = $myrow2['dasaxeleba'];
?>
 <tr class='klientebi'>
    <td width='2' align='center'>
     <a class="thumbnail" ><img src='images/info.png'>
      <span>
	     <?php echo "<div align='left' style='margin-left:5px;'>ID-<b>$id</b> <br> დამატების თარიღი: <b>$firstinput</b> <br> სახელი/გვარი: <b>$saxeli $gvari</b> <br> პირადი ნომერი: <b>$piradi</b> <br> პოზიცია: <b>$dasaxeleba</b> <br>         ტელეფონი: <b>$telefoni</b> <br> მისამართი: <b>$misamarti</b></div>"; ?>
      </span>
     </a>
    </td>
    <td width='127' align='center'> <?php echo $saxeli ?> </td>
    <td width='169' align='center'> <?php echo $gvari ?> </td>
    <td width='110' align='center'> <?php echo $piradi ?> </td>
	<td width='73' align='center'> <?php echo $telefoni ?> </td>
	<td width='73' align='center'> <?php echo $dasaxeleba ?></td>
    <td width='70' align='center'><a href='print.php?id=<?php echo $id ?>'><img src='images/print.png'></a></td>
	<td width='70' align='center'><a href='danarti.php?id=<?php echo $id ?>'><img src='images/print.png'></a></td>
    <td width='70' align='center'><a href='del.php?id=<?php echo $id ?>'><img src='images/delete.png'></a></td>
	<td width='70' align='center'><a href='edit.php?id=<?php echo $id ?>'><img src='images/pencil.png'></a></td>
  </tr>
<?php
}
?>
</tr>
</table>
<div align="center" class="pagination">
<?php
//es dayofs gverdebs 30 chanaceris mixedvit
echo "";
$pagination_count = mysql_query("SELECT COUNT(id) FROM xelshekruleba"); 
$pg_row = mysql_fetch_row($pagination_count); 
$total_records = $pg_row[0]; 
$total_pages = ceil($total_records / 30); 
for ($i=1; $i<=$total_pages; $i++) { 
if($i == @$_GET['page']){
echo "<b>".$i."</b> ";
}
else {
	echo "<a href='filter.php?page=".$i."&pozicia=".$pozicia."'>".$i."</a> ";	
}
}
?>
 </div>
</body>
</html>
