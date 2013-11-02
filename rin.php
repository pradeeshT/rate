<?php 

require 'db.php';

$mil=$_POST['emil'];
$clg=$_POST['clg'];
$clg=trim($clg);
$review=$_POST['review'];
$review=trim($review);
$review=preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $review);


$mil=mysql_real_escape_string($mil);
$clg=mysql_real_escape_string($clg);
$review=mysql_real_escape_string($review);


$pt=$_POST['pt'];
$te=$_POST['te'];
$lb=$_POST['lb'];
$iv=$_POST['iv'];
$tr=$_POST['tr'];
$hf=$_POST['hf'];

$counti=0;
$error="Thank You for the Review";


$sum=0;$finl=0;
$sum= $pt+$te+$lb+$iv+$tr+$hf;

$finl = $sum/6;

$avgnew = round($finl);
echo "<br>$avgnew";

echo "<br>";
if($avgnew ==6)
 $no="six";
elseif($avgnew ==5)
 $no="five";
elseif($avgnew ==4)
 $no="four";
elseif($avgnew ==3)
 $no="three";
elseif($avgnew ==2)
 $no="two";
elseif($avgnew ==1)
 $no="one";


$todaydate = date('Y-m-d H:i:s');

function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}
$ip=get_ip_address();


$str = $no."star";
$milcheck= mysql_query("select 1 from user where emain='$mil' ");
if($rowm = mysql_fetch_array($milcheck))
  {
  $u = $rowm['1'];
}
if($u!=1)
 {
mysql_query("insert into user(emain,clg,ip,date) values('$mil','$clg','$ip','$todaydate') ");

if($review !=NULL || $review != 0){
mysql_query("insert into comment(clg,comment,date,mil) values('$clg','$review',now(),'$mil') ");
}

 $result = mysql_query("SELECT 1 FROM vote where clg='$clg'");
while($row = mysql_fetch_array($result))
  {
  $counti=$row['1'];
  }
if($counti == 0 ){
mysql_query("insert into vote(clg,nov) values('$clg',1) "); 
mysql_query("update vote set $str =$str+1 where clg ='$clg'") ;
}
else {
//mysql_query("update vote set vote=vote+'$finl' where clg ='$clg'") ;

mysql_query("update vote set $str =$str+1 where clg ='$clg'") ;
mysql_query("update vote set nov=nov+1 where clg ='$clg'") ;
}

   }

else {
$error="Your vote is Already counted";
header("Location:index.php?msg=$error");
}



$rr =mysql_query("select sixstar,fivestar,fourstar,threestar,twostar,onestar,nov from vote where clg='$clg' ");

while($row = mysql_fetch_array($rr))
{

$point = 6*$row['sixstar']+5*$row['fivestar']+4*$row['fourstar']+3*$row['threestar']+2*$row['twostar']+1*$row['onestar'] ;
/*
$ratings = number_format($point / $row['nov'],1);
echo $ratings; */
} 
mysql_query("update vote set point=$point where clg ='$clg'") ;

mysql_free_result($$milcheck);
mysql_free_result($result);
mysql_free_result($rr);
mysql_close($con); 
header("Location:list.php");
?>
