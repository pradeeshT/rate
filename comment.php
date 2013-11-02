<?php
include_once('db.php');
$nme = $_POST['name'];
$clg= $_POST['clg'];
$cmt = $_POST['review'];

$nme=mysql_real_escape_string($nme);
$clg=mysql_real_escape_string($clg);
$cmt=mysql_real_escape_string($cmt);

mysql_query("insert into comment(clg,comment,mil,date) values('$clg','$cmt','$nme',now())");
mysql_close($con);
header("Location:clg-details.php?id=$clg");
?>