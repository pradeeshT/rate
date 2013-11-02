

<?php

$file = file("clg.txt");
sort($file);
file_put_contents("clgs.txt", implode($file));
for($i=0; $i<count($file); $i++)
{
  $states = explode(",", $file[$i]);
 // echo $states[0], $states[1],"<br />";

}
?>


<?php
/*
$entries = array_merge(
             file('clg.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES),
             file('clgs.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)
           );
$entries = array_unique($entries);
sort($entries);
*/
?>

