<form action="#" method="post">
<table border="2">
<tr>
<td>Enter a number to check absolute value</td>
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
$a=$_POST["t1"];

	echo abs($a);
}
?>

