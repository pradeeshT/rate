<!DOCTYPE html>
<html>
<head>
<title>Rate your college | Techie Touch </title>
<meta name="description" content="Engineering College Rating and Reviews">
<meta name="keywords" content="anna university engineering college rating,top colleges in tamilnadu,college rank list,rate your college">
<meta name="author" content="Pradeesh">
<meta charset="UTF-8">
<link rel="stylesheet" href="css/techie-touch.css" type="text/css" >
<script type="text/javascript">

</script>
<style>
@font-face {
    font-family:'Action';
    src:url('fonts/Di.ttf') format('truetype');
src:url('fonts/Di.woff') format('woff');
	    
    font-weight: normal;
    font-style: normal;
}

h4{
font-family:'Action';
font-size:18px;
color:#CD853F;
}
h4:hover {
color:#FFA54F;
}

div {
background-color:#ADD8E6;
 -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    -khtml-border-radius: 20px;
    border-radius: 20px;
   padding:20px;
  border:1px solid #CDC1C5;
  width:400px;
 box-shadow: 5px 5px 5px #888888;
}
div:hover {
background-color:#B2DFEE;
}
</style>

</head>
<?php 
$lines = file("clg.txt");

?>


<h4>Rate your college</h4>
<p></p><br>
http://techie-tet.blogspot.com/2013/07/top-engineering-college-in-tamilnadu.html
<a href="list.php"  target="" class="css_btn_class">Top Rated College</a>

<form method="post" action="rin.php">
<br>
<font color="red" style="margin-left:100px;">
 <? if($_GET['msg'] != null)
        echo $_GET['msg']; 
?> </font>
<div>

Email id:<input type="email" size="30" class="input" name="emil" id="emil" required="required" autocomplete="on"><br>
College :<select name="clg">
<?foreach($lines as $line)
{?>
<option value="<?=$line ?>"><?=$line ?></option>
<? } ?>
</select><br>
<input type="hidden" name="pt" value="" id="pt" readonly="readonly"/><br>
<input type="hidden" name="te" value="" id="te" />
<input type="hidden" name="lb" value="" id="lb" />
<input type="hidden" name="iv" value="" id="iv" />
<input type="hidden" name="tr" value="" id="tr" />
<input type="hidden" name="hf" value="" id="hf" />


<script type="text/javascript" src="prototype.js"></script>
<script type="text/javascript" src="stars.js"></script>	
								
<script type="text/javascript">


document.write("<br>Placement: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");										var s1 = new Stars({
											maxRating: 6,
											bindField: 'pt',
										imagePath: 'images/',
											value: 0
										});
	document.write("<br>Teaching: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ");		
var s2 = new Stars({
											maxRating: 6,
											bindField: 'te',
											imagePath: 'images/',
											value: 0
										});

document.write("<br>Lab facilty: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");		
var s3 = new Stars({
											maxRating: 6,
											bindField: 'lb',
											imagePath: 'images/',
											value: 0
										});	
document.write("<br>Library, IV :      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");		
var s4 = new Stars({
											maxRating: 6,
											bindField: 'iv',
											imagePath: 'images/',
											value: 0
										});
document.write("<br>Transport Facility:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");		
var s5 = new Stars({
											maxRating: 6,
											bindField: 'tr',
											imagePath: 'images/',
											value: 0
										});
document.write("<br>Hostel Facility:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");		
var s5 = new Stars({
											maxRating: 6,
											bindField: 'hf',
											imagePath: 'images/',
											value: 0
										});

							
</script>
<br><br>
REVIEW:<br><textarea name="review" class="input" rows="4" cols="30" required="required" placeholder="Good & Bad things abt your clg"  ></textarea>
<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type ="submit" class="blue-pill"><h4 class="alphaecho">Rate it !</h4></button>
</form>
<br><br>

</div>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="list.php">View College Ranking</a> 

    
</html>
