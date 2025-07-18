<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<a style="float:right;color:blue;" href="proctor_entry_db.php?usn=<?php $usn=$_GET['usn']; echo $usn?>">UPDATE POINTS</a>
<?php
include('connection.php');
	$acno=$_POST['ano'];
	$acno= stripcslashes($acno);
	$acno = mysqli_real_escape_string($con, $acno); 
	$usn=$_GET['usn'];
	

   $res=mysqli_query($con,"select photo from points where ano='$acno'");
   echo "<table>";
   echo "<tr>";
   
   while($row=mysqli_fetch_array($res))
   {
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="400" width="400"/>';
   echo "<br>";
   
   echo "</td>";
   } 
   echo "</tr>";
   
   echo "</table>";
  
?>
</body>
</html>