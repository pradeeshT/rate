<!Doctype html>
<html>
<head>
<title>College Review</title>
<meta name="description" content="Engineering College Reviews">
<meta name="keywords" content="Engineering college reviews,Engineering college points,student review about engineering college,good & bad things">
<meta name="author" content="Pradeesh">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/techie-touch.css" type="text/css" >
</head>
<?php 
include_once('db.php');
$clgid=$_GET['id'];




$result=mysql_query("select clg,sixstar,fivestar,fourstar,threestar,twostar,onestar,nov from vote where clg='$clgid' ");

while($row = mysql_fetch_array($result))
{
$div = 6*$row['sixstar']+5*$row['fivestar']+4*$row['fourstar']+3*$row['threestar']+2*$row['twostar']+1*$row['onestar'] ;

$ratings = number_format($div / $row['nov'],1);
$clg=$row['clg'];
?>
<img src="images/str.jpg" width="90px" height="88px" style="margin-top:15px;" >
<p style="margin-top:-60px;margin-left:27px;color:red;" ><b><?=$ratings?></b></p>
<div style="margin-left:65px;margin-top:-65px;">
<?

echo "<h2>".$clg. "</h2> No.of.votes - " .$row['nov']."<br>";
echo "Rating ".$ratings." out of 6";
} 
echo "</div><div class='beforecomment'>";
?>


<form action="comment.php" method="post">
<input type="hidden" name="clg" value="<?=$clg?>" >
<br><input type="email" name="name" class="input" placeholder="Email" required="required"/>
<br><textarea name="review" class="input" rows="4" cols="30" placeholder="Good & Bad things abt the clg"  ></textarea>
<br>

<button type ="submit" class="blue-pill2">Comment</button>
</form>
<a href="index.php" class="css_btn_class">Vote Now</a><a href="list.php" class="css_btn_class">Back</a>
<?

echo "<br>User Reviews <br>";

$result1=mysql_query("select mil,comment,date from comment where clg='$clgid' order by date desc");

while($row1 = mysql_fetch_array($result1))
{ ?>
<div class="comment-con"><div class="user"><img src="images/user.png" width="40px" height="40px" ></div>
<?
$splitmil=preg_split("/@/", $row1['mil']);
echo "<div class='comment-p'><nme>".$splitmil[0]." : </nme><br>".$row1['comment']."</div>";
?> </div> <? 
}
echo "</div>";

mysql_free_result($result);
mysql_free_result($result1);
mysql_close($con);
?>







</html>