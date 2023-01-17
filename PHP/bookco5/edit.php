
<?php
include 'dbcon.php';
echo("Edit Page");
echo("<br>");
echo("<br>");
$var=$_GET["abc"];
$result=mysqli_query($con,"SELECT * FROM `booktb` WHERE `accno`= '$var'");
#print_r($result);
$row=mysqli_fetch_array($result);
?>
<form action="#" method="post">
Edit Title:
<input type="text" name="t1" size="30" value="<?php echo $row["title"];?>"/><br>
Edit Author:
<input type="text" name="t2" size="30" value="<?php echo($row["authors"]);?>"><br>
Edit Edition:
<input type="text" name="t3" size="30" value="<?php echo($row["edition"]);?>"><br>
Edit Publisher:
<input type="text" name="t4" size="30" value="<?php echo($row["publisher"]);?>"><br>
<input type="submit" name="save">
</form>
<?php
if(isset($_POST["save"]))
{
$title=$_POST["t1"];
$author=$_POST["t2"];
$edition=$_POST["t3"];
$pub=$_POST["t4"];
$sql="UPDATE `booktb` SET `title`='$title',`authors`='$author',`edition`='$edition',`publisher`='$pub' WHERE `accno`='$var'";
$result=mysqli_query($con,$sql);

echo("<br>");
header("location:view.php");
}
?>