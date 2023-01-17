<form action="#" method="post">
<table>
<tr>
<td>length</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td> breadth</td><td><input type="text" name="t2">
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
$len=$_POST["t1"];
$bre=$_POST["t2"];
$area=$len*$bre;
$peri=2*($len+$bre);

echo "area of the rectangle is ",$area;
echo "<br>";
echo "perimeter of the rectangle is ",$peri;
}
?>

