<?php
	include('connection.php');
	 $username = $_POST['userid'];  
    $password = $_POST['usn']; 
	$hod=$_GET['hod'];
	
		$username = stripcslashes($username);  
        $password = stripcslashes($password);  
		$hod= stripcslashes($hod);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
		$hod = mysqli_real_escape_string($con, $hod);		 
		
		$sql = "select * from t where hname= '$hod' and usn = '$password' and userid= '$username' ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
		
		if($count != 1){  
			echo '<script>
			alert("You are not the HOD of this student.");  
			</script>';
        }  
		else{
			$newloc="http://localhost/logindemo/student_table_view.php?usn=$password";
			header("Location: $newloc");
			exit;
		}
?>