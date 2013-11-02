<?php 
$con=mysql_connect('localhost','root','v');
if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
mysql_select_db("clgr",$con);
?>
