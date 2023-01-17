<center>
<h1 align="Center">Cricket players name to assoc array</h1>
<form action="#" method="post">
<table border="2">
<tr>
<td>enter name of first player</td>
<td><input type="text" name="t1"></td>
<td>enter age of first player</td>
<td><input type="text" name="t1a"></td>
</tr>
<tr>
<td>enter name of second player</td>
<td><input type="text" name="t2"></td>
<td>enter age of second player</td>
<td><input type="text" name="t2a"></td>
</td></tr>

<tr>
<td>Enter name of third player</td>
<td><input type="text" name="t3"></td>
<td>enter age of third player</td>
<td><input type="text" name="t3a"></td>
</tr>
<tr>
<td><input type="submit" name="save">
</td>
</tr>
</table>
</form>

<?php
if(isset($_POST["save"]))
{
$a1=$_POST["t1"];
$a1a=$_POST["t1a"];
$a2=$_POST["t2"];
$a2a=$_POST["t2a"];
$a3=$_POST["t3"];
$a3a=$_POST["t3a"];

$a=array($a1=>$a1a,$a2=>$a2a,$a3=>$a3a);
print_r($a);
echo "<br>";
echo "<table border=2>";
echo "<tr>";
echo "<td>$a1</td>";
echo "<td>".$a[$a1]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$a2</td>";
echo "<td>".$a[$a2]."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>$a3</td>";
echo "<td>".$a[$a3]."</td>";
echo "</tr>";
echo "</table>";
}
?>