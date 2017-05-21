<?php
session_cache_limiter( FALSE );
include('lock.php');
header ("location:xelsh.php");
?>
<?php 
if ($_POST["id"])
$saxeli = $_POST['saxeli'];
$gvari = $_POST['gvari'];
$piradi = $_POST['piradi'];
$pozicia = $_POST['pozicia'];
$misamarti = $_POST['misamarti'];
$telefoni = $_POST['telefoni'];
$firstinput = $_POST['firstinput'];
$secondinput = $_POST['secondinput'];
$id = $_POST['id'];
?>
<?php
if($saxeli and $gvari and $piradi and $pozicia and $misamarti and $telefoni and $firstinput and $secondinput)
{
mysql_query("SET NAMES 'utf8'");
$result = mysql_query ("UPDATE xelshekruleba SET saxeli='$saxeli', gvari='$gvari', piradi='$piradi', pozicia='$pozicia', misamarti='$misamarti', telefoni='$telefoni', firstinput='$firstinput', secondinput='$secondinput' WHERE id='$id'");
if ($result == 'true') {echo "<p align='center'>მონაცემები წარმატებით შეიცვალა</p>";}
else {echo "<p>თქვენი მონაცემები არ შეცვლილა</p>";}
}		 
else 
{
echo "<p>თქვენ არ შეგივსიათ ყველა ველი.</p>";
}
?>