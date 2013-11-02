
<?php

$db = new mysqli('localhost','root','v','clgr');
$stmt = $db->prepare("SELECT emain,clg FROM user");
$stmt->execute();

$stmt->store_result();
$stmt->bind_result($c1, $c2);

while($stmt->fetch())
{
    echo "col1=$c1, col2=$c2 \n";
}

$stmt->close();






/*

$con = mysqli_connect("localhost", "root", "v", "clgr");


$query = mysqli_query($con, "select * from user");

 //numeric array 
while($row = mysqli_fetch_array($query, MYSQLI_NUM)){
printf ("%s (%s)\n", $row[0], $row[1]);
//echo "Row one".$row[0]."Row two".$row[1];
}
// free result set 
mysqli_free_result($query);

// close connection 
mysqli_close($con);
 */
?>
