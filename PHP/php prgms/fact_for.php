<form action="#" method="post">
<table>
<tr>
<td>enter a number</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td><input type="submit" name="save">
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST["save"]))
{
$num=$_POST["t1"];
$factorial=1;

for($i=1;$i<=$num;$i++)
{
 $factorial=$factorial*$i;
}
echo "factorial is ",$factorial;
}

?>

