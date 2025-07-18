<html>
				<head>
				<link rel='stylesheet' type='text/css' href='student1.css' />
				</head>
				<body>
				<p align="right" style="font-family:sans-serif;">Do you want to logout? 
				<a href="NewFile1a.html" style="font-family:sans-serif;color:blue;">logout</a>
				<h2 style="font-family:sans-serif;color:black;"><b> Details of ativity points completed till now: <br> </h2>
				<table id="customers"> 
				<tr> 
				    <th><b>Activity number</b></th>
				    <th><b>Ref. no.</b></th> 
				    <th><b>Number of hours</b></th>
				    <th><b>Marks obtained</b></th>
				</tr>
				
<?php
					$usn=$_GET['usn'];
					//echo '<h2 style="font-family:sans-serif;color:black;"><b> Welcome '.$usn.'!!</h2>';
					include('connection.php'); 
					$sql = "select * from points where usn = '$usn'";  
					$result = mysqli_query($con, $sql);  
					while($row=mysqli_fetch_array($result)){
						echo '<tr> 
						    <td>'.$row['ano'].'</td> 
						    <td>'.$row['ref_no'].'</td> 
						    <td>'.$row['s_hours'].'</td> 
						    <td>'.$row['s_marks'].'</td>
						  </tr>';
					}
					
					?>
					</table>
					</body>
					</html>