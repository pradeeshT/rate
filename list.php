<!DOCTYPE html>
<html>
<head>
<title>College Rating </title>
<meta name="description" content="Engineering College Rank list">
<meta name="keywords" content="top 10 engineering college,top colleges in tamilnadu,college rank list,anna university rank list">
<meta name="author" content="Pradeesh">
<meta charset="UTF-8">

<link rel="stylesheet" href="css/techie-touch.css" type="text/css" >
</head>
<h2>College Ranking</h2>
<p>Click the college name to view the reviews about the clg.</p>
<a href="index.php" class="css_btn_class">Vote Now</a>
<?php 


include_once 'db.php';

echo "<table id='listclg'>"; ?>
 
<tr bgcolor=#7D9EC0 style="color:white;font-size:18px;"><th>s.no</th><th>College</th><th>Points</th></tr>
<?
$n=1;
$result = mysql_query("select id,clg,point from vote order by point desc ");
while($row = mysql_fetch_array($result))
  {
 
 
  $clg=$row['clg'];
  $result1 = mysql_query("select count(comment) as c from comment where clg='$clg' ");

   if($row1 = mysql_fetch_array($result1)) 

?>
                   <? if($n%2==0) {  ?>
                       <tr bgcolor=#EAEAEA>
               		   
               	     <?	}else {  ?>
                      <tr bgcolor=#F5F5F5>
                            <?}?>
  

<?   
  echo "<td>$n</td><td><a href='clg-details.php?id=".$row['clg']."'><clgn>".$row['clg']."<clgn><br><cmt>Comments - ".$row1['c']."</cmt></td><td rowspan='2'>".$row['point']."</td> </a></tr>";
?> <?
 
    echo "<tr></tr>";
  $n++;
   }

echo "</table>";
echo "<a href='index.php'>Back</a>";

mysql_free_result($result);
mysql_free_result($result1);
mysql_close($con);
?>
