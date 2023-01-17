<form action="#" method="post">
<table border="2">
<tr>
<td>Enter num1</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td>Enter num2</td>
<td><input type="text" name="t2">
</td></tr>
<tr>
<td>Enter num3</td>
<td><input type="text" name="t3">
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
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
if ($a>$b && $a>$c)
{
	echo $a," is the greatest number";
}
	if($b>$a && $b>$c)
	{
	echo $b," is the greatest number";
	}
	if($c>$b && $c>$a)
	{
	echo $c," is the greatest number";
	}

}
?>

