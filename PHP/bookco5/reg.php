<center>
<h1 align="Center"> BOOK SYSTEM</h1>
<form action="#" method="post">
<table border="2">
<tr>
<td>Enter the book title:</td>
<td><input type="text" name="t1">
</td></tr>
<tr>
<td>Enter author name:</td>
<td><input type="text" name="t2">
</td></tr>
<tr>
<td>Enter the edition of the book:</td>
<td><input type="text" name="t3">
</td></tr>
<tr>
<td>Enter the name of book publisher:</td>
<td><input type="text" name="t4">
</td></tr>
<tr>
<td><input type="submit" name="save">
</td>
</tr>
</table>
</form>

<?php
include 'dbcon.php';
if(isset($_POST["save"]))
{
$title=$_POST["t1"];
$author=$_POST["t2"];
$edition=$_POST["t3"];
$pub=$_POST["t4"];
$sql="INSERT INTO `booktb`( `title`, `authors`, `edition`, `publisher`) VALUES ('$title','$author','$edition','$pub')";
$result=mysqli_query($con,$sql);
echo("<br>");
if($result==1)
{
	echo("INSERTION success");
}
else
{
	echo("Failed");
}
header("location:view.php");
}
?>
