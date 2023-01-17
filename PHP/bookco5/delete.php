<?php
echo("delete page");
include 'dbcon.php';
$var=$_GET["xyz"];
echo($var);
$result=mysqli_query($con,"DELETE FROM `booktb` WHERE `accno`='$var'");
header("location:view.php");
?>