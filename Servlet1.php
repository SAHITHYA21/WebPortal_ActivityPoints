<?php  
	session_start();
    include('connection.php');  
    $username = $_POST['userid'];  
    $password = $_POST['password']; 
	$role1=$_POST['role'];	
   
	
	
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
		
		if($role1=="Student"){
        $sql = "select usn from t where userid = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count1 = mysqli_num_rows($result);
		
		$row=mysqli_fetch_row($result);
		//$usn="1si17is034";
		$usn=$username;
		}
		if($role1=="Proctor")
		{
			 $sql = "select *from proctor where prname= '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count2 = mysqli_num_rows($result); 
		$usn=$username;
		}
		if($role1=="HOD")
		{
			 $sql = "select *from hod where userid = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count3 = mysqli_num_rows($result); 
		$usn=$username;
		}
		if($role1=="Admin")
		{
		$sql = "select *from admin_table where userid = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count4 = mysqli_num_rows($result); 
		$usn=$username;
		}
        if($count1 == 1){  
			$newloc="http://localhost/logindemo/student_entry.php?usn=$usn";
			header("Location: $newloc");
			exit;
		
            //echo '<script>
			//window.location="student_entry.php";  
			//</script>';
        }  
        else{
			echo '<script>
			alert("Login failed. Invalid username or password.");  
			</script>';
            
        }  
		 if($count2 == 1){  
			$newloc="http://localhost/logindemo/proctor_entry.php?usn=$usn";
			header("Location: $newloc");
			exit;
		
            //echo '<script>
			//window.location="student_entry.php";  
			//</script>';
        }  
        else{
			echo '<script>
			alert("Login failed. Invalid username or password.");  
			</script>';
            
        }
		
		if($count3 == 1){  
			$newloc="http://localhost/logindemo/hod_entry.php?usn=$usn";
			header("Location: $newloc");
			exit;
		
            //echo '<script>
			//window.location="student_entry.php";  
			//</script>';
        }  
        else{
			echo '<script>
			alert("Login failed. Invalid username or password.");  
			</script>';
            
        }
		
		if($count4 == 1){  
			$newloc="http://localhost/logindemo/admin_entry.php?usn=$usn";
			header("Location: $newloc");
			exit;
		
            //echo '<script>
			//window.location="student_entry.php";  
			//</script>';
        }  
        else{
			echo '<script>
			alert("Login failed. Invalid username or password.");  
			</script>';
            
        }
?>  