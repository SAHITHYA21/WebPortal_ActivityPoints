<html>
<head>
<title>proctor entry</title>
<link rel='stylesheet' type='text/css' href='student.css' />
</head>

<body>
<?php
//$connect = mysqli_connect("localhost", "root", "", "testdemo");  
   include('connection.php');
	  $usn=$_GET['usn'];
	  $usn = stripcslashes($usn);
	  $usn = mysqli_real_escape_string($con, $usn); 
	   
	 // echo $usn;
	  /*$sql="select max(ano) from points where usn = '$usn'";
	  $result = mysqli_query($con, $sql);  
					while($row=mysqli_fetch_array($result)){
						$acno= $row['ano'];
					}
	  $acno=$acno+1;	 
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO points(usn,ref_no,s_hours,photo,ano) VALUES ('$usn','$refn',$hrs,'$file','$acno')";  
      if(mysqli_query($con, $query))  
      {  
           //echo '<script>alert("Image Inserted into Database")</script>'; 
			$newloc="http://localhost/logindemo/student_table_view.php?usn=$usn";
			header("Location: $newloc");
			exit;		   
      }  
	  else{
		  echo '<script>alert("Image cannot be Inserted into Database")</script>'; 
	  }*/
 
 

?>
<h1> UPDATE DETAILS </h1>
				<form method="post" action="proctor_entry_db1.php?usn=<?php $usn=$_GET['usn']; echo $usn ?>" >
				<label for="acno"> Activity number: </label>
				<input name="acno" type="text"> <br> <br>
				<label for="hrs"> Hours to update: </label>
				<input name="hrs" type="text"> <br> <br>
				<label for="points"> Points to update: </label>
				<input name="points" type="text"> <br> <br>
				<br><br><input type="submit" name="insert" id="insert" value="update" />
				</form>
				</body>
				</html>