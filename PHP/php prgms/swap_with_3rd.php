<form action="#" method="post">
<table border="2">
<tr>
<td>enter value of a</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td> enter value for b</td><td><input type="text" name="t2">
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
$temp=$a;
$a=$b;
$b=$temp;

echo "After Swapped  ";
echo "<br>";
echo "a is ",$a; 
echo "<br>";
echo "b is ",$b;
}
?>

