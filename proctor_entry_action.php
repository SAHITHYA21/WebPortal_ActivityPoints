<html>
<head>
<link rel='stylesheet' type='text/css' href='student.css' />
</head>
<body>

<?php
	session_start();
	include('connection.php'); 
	$username = $_POST['userid'];  
    $password = $_POST['usn']; 
	$proctor_name=$_GET['proctor_name'];
	
		$username = stripcslashes($username);  
        $password = stripcslashes($password);  
		$proctor_name= stripcslashes($proctor_name);
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
		 $proctor_name = mysqli_real_escape_string($con, $proctor_name);		 
		
		$sql = "select * from t where prname= '$proctor_name' and usn = '$password' and userid= '$username' ";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
		
		if($count != 1){  
			echo '<script>
			alert("Student is not under your proctorship");  
			</script>';
        }  
          

				
					//$pr_name=$_GET['proctor_name'];
					echo '<h2 style="font-family:sans-serif;color:black;"><b> Welcome '.$proctor_name.'!!</h2>';
					
					
					
				echo '<h3 style="font-size:25px;font-family:sans-serif;">DETAILS OF THE ACTIVITIES</h3> 
						
						<table id="customers"> 
						  <tr> 
						    <th><b>reference code</b></th> 
						    <th><b>activity head</b></th> 
						      <th><b>weeks/</b></th> 
						      <th><b>hours</b></th> 
						    <th><b>maximum points</b></th> 
						 
						  </tr> 
						  <tr> 
						    <td>A1</td> 
						    <td>helping local schools to acheive good result and enhance their enrolment in higher/technical/vocational education.</td> 
						   <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A2</td> 
						    <td>prepaing an actionable business proposal for enhancing the village income.</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						   <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A3</td> 
						    <td>developing sustainable water management system</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A4</td> 
						    <td>tourism promotion innovative approaches.</td> 
						   <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A5</td> 
						    <td>promotion of appropriate technologies.</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A6</td> 
						    <td>reduction in energy consumption</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A7</td> 
						    <td>to skill rural population</td> 
						  <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A8</td> 
						    <td>facilitating 100% digitized money transactions</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A9</td> 
						    <td>setting of the information imparting club for women leading to ontribution in social and economic issues.</td> 
						   <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A10</td> 
						    <td>developing and managing efficient garbage disposable system.</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A11</td> 
						    <td>to assit the marketing of rural produce.</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A12</td> 
						    <td>food preservation/packaging.</td> 
						  <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A13</td> 
						    <td>automation of local activities.</td> 
						   <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A14</td> 
						    <td>spreading public awareness under rural outreach programmes.</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						  <tr> 
						    <td>A15</td> 
						    <td>contribution to any national level initiative of government of India/skill India/swachh bharat internship etc.</td> 
						    <td>2</td> 
						    <td>80-90</td> 
						    <td>20</td> 
						  </tr> 
						   
						</table><br><br>
						
				<div>
				<h2 style="font-family:sans-serif;color:black;"><b> Details of ativity points completed till now: <br> </h2>
				<table id="customers"> 
				<tr> 
				    <th><b>Activity number</b></th>
				    <th><b>Ref. no.</b></th> 
				    <th><b>Number of hours</b></th>
				    <th><b>Marks obtained</b></th>
				</tr>';
				

					 
					$sql1 = "select * from points where usn = '$password' ";  
					$result1 = mysqli_query($con, $sql1);  
					while($row1=mysqli_fetch_array($result1)){
						echo '<tr> 
						    <td>'.$row1['ano'].'</td> 
						    <td>'.$row1['ref_no'].'</td> 
						    <td>'.$row1['s_hours'].'</td> 
						    <td>'.$row1['s_marks'].'</td>
						  </tr>';
					}
					echo '</table>';
					?>
					<br><br><h2><strong> View certificate </strong></h2>
					<form method="post" action="image_view.php?usn=<?php  $usn=$_POST['usn']; echo $usn?>" >
					<label for="ano"> Activity number: </label>
					<input name="ano" type="text">
					<input type="submit" name="submit2" value="display">
			<!--	<br><br><br><h2> Update details </h2>
				<form method="post" action="proctor_entry_db.php?usn=" >
				<label for="acno"> Activity number: </label>
				<input name="acno" type="text"> <br> <br>
				<label for="hrs"> Hours to update: </label>
				<input name="hrs" type="text"> <br> <br>
				<label for="points"> Points to update: </label>
				<input name="points" type="text"> <br> <br>
				<br><br><input type="submit" name="insert" id="insert" value="update" />-->
				</form>
				</div>
				</body>
				</html>
				
  