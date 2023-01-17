
<form action="#" method="post">
<table>
<tr>
<td>num1</td>
<td><input type="text" name="t1">
</td></tr>
<td>num1</td>
<td><input type="text" name="t2">
</td></tr>
<tr>
<td>
</td>
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
echo $a+$b;
}
?>

