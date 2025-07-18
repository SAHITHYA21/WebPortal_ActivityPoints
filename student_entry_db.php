<?php
//$connect = mysqli_connect("localhost", "root", "", "testdemo");  
   include('connection.php');
	  $usn=$_POST['usn'];
	  $usn = stripcslashes($usn);
	  $usn = mysqli_real_escape_string($con, $usn); 
	   $refn=$_POST['refno'];
	  $refn = stripcslashes($refn);
	  $refn = mysqli_real_escape_string($con, $refn); 
	  $hrs=$_POST['hours'];
	  $hrs = stripcslashes($hrs);
	  $hrs = mysqli_real_escape_string($con, $hrs); 
	  $id=$_POST['ids']; 
	  $id = stripcslashes($id);
	  $id = mysqli_real_escape_string($con, $id); 
	  
	  $sql="select max(ano) from points where usn = '$usn'";
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
	  }
 
 

?>