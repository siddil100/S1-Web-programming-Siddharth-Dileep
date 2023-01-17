<center>
<h1 align="Center">E-Bill generator</h1>
<form action="#" method="post">
<table border="2">
<tr>
<td>enter the units</td>
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
$unit=$_POST["t1"];
if($unit<=50)
{
	echo("your bill is ".$unit*3.50);
}
elseif($unit>50 && $unit<=100)
{
	echo("your bill is ".$unit*4);
}
elseif($unit>100 && $unit<=200)
{
	echo("your bill is ".$unit*5.20);
}
}
?>

