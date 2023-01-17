<center>
<h1 align="Center">students name to array</h1>
<form action="#" method="post">
<table border="2">
<tr>
<td>enter name of first student</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td>enter name of second student</td>
<td><input type="text" name="t2">
</td></tr>

<tr>
<td>Enter name of third student</td>
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
$a0=$_POST["t1"];
$a1=$_POST["t2"];
$a2=$_POST["t3"];
$a=array($a0,$a1,$a2);
print_r($a);
echo "<br>";
asort($a);
print_r($a);
echo "<br>";
arsort($a);
print_r($a);

}

