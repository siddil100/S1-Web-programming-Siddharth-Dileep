<form action="#" method="post">
<table>
<tr>
<td>radius</td>
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
$r=$_POST["t1"];
$area=3.14*$r*$r;
$peri=2*3.14*$r;

echo "area of the circle is ",$area;
echo "<br>";
echo "perimeter of the circle is ",$peri;
}
?>

