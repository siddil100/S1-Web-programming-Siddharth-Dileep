<form action="#" method="post">
<table border="2">
<tr>
<td>Enter farenheit value</td>
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
$f=$_POST["t1"];
$cel=$f-32*5/9;

echo $f," farenheit is ";
echo intval($cel)," celcius";
}
?>

