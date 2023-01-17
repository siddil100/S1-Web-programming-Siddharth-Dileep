<center>
<h1 align="Center">CALCULATOR</h1>
<form action="#" method="post">
<table border="2">
<tr>
<td>enter first number</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td>enter second number</td>
<td><input type="text" name="t2">
</td></tr>
<tr>
<td>1.ADD</td>
</tr>
<tr>
<td>2.SUB</td>
</tr>
<tr>
<td>3.MUL</td>
</tr>
<tr>
<td>4.DIV</td>
</tr>
<tr>
<td>Enter your choice to be performed</td>
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
$num1=$_POST["t1"];
$num2=$_POST["t2"];
$ch=$_POST["t3"];
switch($ch)
{
case 1:
{ 
  echo("Sum value is ".$num1+$num2);
  break;
}
case 2:
{
  echo("Difference is ".$num1-$num2);
  break;
}
case 3:
{
  echo("Product is ".$num1*$num2);
  break;
}
case 4:
{
  echo("Divided value is ".$num1/$num2);
  break;
}
default:
{
echo("INVALID CHOICE");

} 

}
}
?>


