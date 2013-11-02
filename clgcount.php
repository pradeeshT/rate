<?php 
$lines = file("clg.txt");

?>


<select>
<?foreach($lines as $line)
{?>
<option value="<?=$line ?>"><?=$line ?></option>
<? } ?>
</select>
