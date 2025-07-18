<?php
	session_start();
?>
<html>
				<head>
				<link rel='stylesheet' type='text/css' href='student.css' />
				</head>
				<body>
				
				<!--<p style="font-family:sans-serif;color:black;"> &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp; 
				Semester:+rs.getString(5)+<br> <br>
				Marks scored:+rs.getString(7)+ &emsp; &emsp; &emsp;&emsp;&emsp;&emsp;
				Hours completed:+rs.getString(6)+<br> <br>
				USN:+rs.getString(2)+<br> </p>-->
				<?php
					$usn=$_GET['usn'];
					echo '<h2 style="font-family:sans-serif;color:black;"><b> Welcome '.$usn.'!!</h2>';
					include('connection.php'); 
					$sql = "select * from t where userid = '$usn'";  
					$result = mysqli_query($con, $sql);  
					while($row=mysqli_fetch_array($result)){
						echo 'USN: '. $row['usn'];
						echo '</br></br>Semester: '.$row['semester'];
						echo '</br></br>Total hours completed till now:'.$row['thours'];
						echo '</br></br>Total activity points earned till now: '.$row['tpoints'];
					}
					?>
				<h3 style="font-size:25px;font-family:sans-serif;">DETAILS OF THE ACTIVITIES</h3> 
						
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
				
				<form method="post" action="student_entry_db.php" enctype="multipart/form-data">
				<label for="usn"> USN: </label>
				<input name="usn" type="text"> <br> <br>
				<label for="ref"> Select reference code: </label>
				<input name="refno" type="text"> <br> <br>
				<label for="hrs"> Enter number of hours: </label>
				<input name="hours" type="text"> <br> <br>
				<input  type="file" name="image" id="image" size="50">
				<br> (files with extension .jpeg, .png, .jpg and size less then 16 )
				<br><br><input type="submit" name="insert" id="insert" value="Insert" />
				</form>
				</div>
				</body>
				</html>
				<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script> 