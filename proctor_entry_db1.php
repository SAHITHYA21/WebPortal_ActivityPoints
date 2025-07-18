<?php
	 include('connection.php');
	 $usn=$_GET['usn'];
	 $usn = stripcslashes($usn);
	 $usn = mysqli_real_escape_string($con, $usn);
	 
	 $acno=$_POST['acno'];
	 $acno = stripcslashes( $acno);
	 $acno = mysqli_real_escape_string($con,  $acno);
	 
	 $hrs=$_POST['hrs'];
	 $hrs= stripcslashes($hrs);
	 $hrs = mysqli_real_escape_string($con, $hrs);
	 
	 $points=$_POST['points'];
	 $points = stripcslashes($points);
	 $points = mysqli_real_escape_string($con,$points);
	 
	 if($hrs<0 || $hrs>20)
	 {
		 echo '<script>
			alert("Hours must be greater than 0 and less than 20");  
			</script>';
	 }
	 if($points<0 || $points>5)
	 {
		 echo '<script>
			alert("Points must be greater than 0 and less than 5");  
			</script>';
	 }
	 
	 
	 $sql="update points set s_marks='$points',s_hours='$hrs' where usn='$usn' and ano='$acno'";
	 if (!mysqli_query($con, $sql) ) {
			echo '<script>
			alert("Points cannot be updated");  
			</script>';
		}
	 
	 /*if($count != 1){  
			echo '<script>
			alert("Points cannot be updated");  
			</script>';
        }  */
          
	 $sql1="select sum(s_marks) s_marks,sum(s_hours) s_hours from points where usn='$usn'";
	 $result1 = mysqli_query($con, $sql1);  
					while($row1=mysqli_fetch_array($result1)){
						$hrs1= $row1['s_hours'];
						$points1=$row1['s_marks'];
					}
	 $hrs1=$hrs1+$hrs;
	 $points1=$points1+$points;
	 
	 
	 $sql3="update t set thours='$hrs1',tpoints='$points1' where usn='$usn'"; 
	  if (!mysqli_query($con, $sql3) ) {
			echo '<script>
			alert("Total points cannot be updated");  
			</script>';
		}
		else
		{
			$newloc="http://localhost/logindemo/student_table_view.php?usn=$usn";
			header("Location: $newloc");
			exit;
		}
?>