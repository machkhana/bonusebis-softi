<?php 
session_cache_limiter( FALSE );
include('lock.php');
header ("location:xelsh.php")
?>
<?php 
include ("baza/bd.php");
$id = $_GET['id']; 
mysql_query("DELETE FROM xelshekruleba WHERE id='$id'");
{
echo "";
}
?>
