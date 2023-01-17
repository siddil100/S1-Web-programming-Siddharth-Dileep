<form action="#" method="post">
<table>
<tr>
<td>enter a number</td>
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
$num=$_POST["t1"];
$reverse=0;
$temp=$num;
while(floor($num))
{
        $rem=$num%10;
        $reverse=($reverse*10)+$rem;
        $num=$num/10;
}
if($reverse==$temp)
{
    print("number is palindrome");
}
else
{
    print("not palindrome");
}
}

?>

