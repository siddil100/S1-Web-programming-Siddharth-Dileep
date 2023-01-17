<?php
include 'dbcon.php';
?>
<a href="reg.php">Click to To add book</a>
<form action="#" method="post">
<br>
<input type="text" name="s1" placeholder="Based on title">
<input type="submit" name="sbutto1" value="Search"/>
</form>
<form action="#" method="post">
<br>
<input type="text" name="s2" placeholder="Based on 1st letter">
<input type="submit" name="sbutto2" value="Search"/>
</form>

<?php
        if(array_key_exists('sbutto1', $_POST)) 
		{
            button1();
        }
		function button1()
		{
			echo("Matchings based on title are:");
			$sitem=$_POST["s1"];
			
			echo("<br>");
			$con=mysqli_connect("localhost","root","","bookco5");
			$sresult=mysqli_query($con,"SELECT * FROM booktb WHERE title IN ('$sitem')");
			
			
echo("<table border=2>");
echo("<tr>
<td>Title</td>
<td>Author</td>
<td>Edition</td>
<td>Publisher</td>
</tr>");

  $row=mysqli_fetch_array($sresult);
  echo("<td>");
  echo($row["title"]);
  echo("</td>");
  echo("<td>");
  echo($row["authors"]);
  echo("</td>");
  echo("<td>");
  echo($row["edition"]);
  echo("</td>");
  echo("<td>");
  echo($row["publisher"]);
  echo("</td>");
  echo("</table>");
}
if(array_key_exists('sbutto2', $_POST)) 
		{
            button2();
        }
		function button2()
		{
			echo("Matchings based on letter  are:");
			$sitem=$_POST["s2"];
			
			echo("<br>");
			$con=mysqli_connect("localhost","root","","bookco5");
			$s2result=mysqli_query($con,"SELECT * FROM booktb WHERE title LIKE '$sitem%'");
echo("<table border=2>");
echo("<tr>
<td>Title</td>
<td>Author</td>
<td>Edition</td>
<td>Publisher</td>
</tr>");
			
			while($row=mysqli_fetch_array($s2result))
			{


  echo("<tr>");
  echo("<td>");
  echo($row["title"]);
  echo("</td>");
  echo("<td>");
  echo($row["authors"]);
  echo("</td>");
  echo("<td>");
  echo($row["edition"]);
  echo("</td>");
  echo("<td>");
  echo($row["publisher"]);
  echo("</td>");
  
		}
		echo("</table>");
		}
?>
	
<br><br><br>
<table border="2">
<tr>
<td>Accession no:</td>
<td>Title</td>
<td>Author</td>
<td>Edition</td>
<td>Publisher</td>
<td>Pic</td>
<td>Edit</td>
<td>Delete</td>
</tr>
<?php
$result=mysqli_query($con,"SELECT * FROM `booktb`");
//print_r($result);
while($row=mysqli_fetch_array($result))
{?>
  
  <tr>
  <td><?php echo $row["accno"];?></td>
  <td><?php echo $row["title"];?></td>
  <td><?php echo $row["authors"];?></td>
  <td><?php echo $row["edition"];?></td>
  <td><?php echo $row["publisher"];?></td>
  <td><a href="edit.php?abc=<?php echo $row["accno"];?>">Update</a></td>
  <td><a href="delete.php?xyz=<?php echo $row["accno"];?>">remove</a></td>
  
  </tr>
  
<?php
}

?>
</table>
