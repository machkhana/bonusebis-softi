<?php
session_cache_limiter( FALSE );
include('lock.php');
header ("location:xelsh.php")
?>
<?php 
   if(isset($_POST['submit']))
   $saxeli = $_POST['saxeli'];
   $gvari = $_POST['gvari'];
   $piradi = $_POST['piradi'];
   $pozicia = $_POST['pozicia'];
   $misamarti = $_POST['misamarti'];
   $telefoni = $_POST['telefoni'];
   $firstinput = $_POST['firstinput'];
   $secondinput = $_POST['secondinput'];
   // aq idzexebs bazidan
   //$result = mysql_query ("SELECT piradi FROM xelshekruleba WHERE piradi='$piradi'");
   //$myrow = mysql_fetch_array ($result);
   if($saxeli and $gvari and $piradi and $pozicia and $misamarti and $telefoni and $firstinput and $secondinput){
   mysql_query("SET NAMES 'utf8'");
   $result = mysql_query ("INSERT INTO xelshekruleba (saxeli, gvari, piradi, pozicia, misamarti, telefoni, firstinput, secondinput ) VALUES ('$saxeli','$gvari','$piradi','$pozicia','$misamarti','$telefoni','$firstinput',
   '$secondinput')");
   echo "";
}
   else
{ 
   echo "aseti piradi ukve arsebobs"; 
}
?>
<?php 
   /*if(isset($_POST['submit']))
   $saxeli = $_POST['saxeli'];
   $gvari = $_POST['gvari'];
   $piradi = $_POST['piradi'];
   $pozicia = $_POST['pozicia'];
   $misamarti = $_POST['misamarti'];
   $telefoni = $_POST['telefoni'];
   $firstinput = $_POST['firstinput'];
   $secondinput = $_POST['secondinput'];
   // aq idzexebs bazidan
   $result = mysql_query ("SELECT id FROM xelshekruleba WHERE piradi='$piradi'");
   $myrow = mysql_fetch_array ($result);
   //aq amatebs bazashi
   if($piradi>0)
{
   mysql_query("SET NAMES 'utf8'");
   $result2 = mysql_query ("INSERT INTO xelshekruleba (saxeli, gvari, piradi, pozicia, misamarti, telefoni, firstinput, secondinput ) VALUES ('$saxeli','$gvari','$piradi','$pozicia','$misamarti','$telefoni','$firstinput',
   '$secondinput')");
}
  else
{ 
   echo "aseti piradi ukve arsebobs"; 
}*/
?>

