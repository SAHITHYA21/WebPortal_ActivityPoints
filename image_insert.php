<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
$connect = mysqli_connect("localhost", "root", "", "testdemo");  
 if(isset($_POST["insert"]))  
 {  
	  $id=$_POST['ids']; 
	  $id = stripcslashes($id);
	  $id = mysqli_real_escape_string($connect, $id); 
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO images(id,image) VALUES ('$id','$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 
 }
/*
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
	$id=$_POST['ids']; 
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','testdemo') or die('Unable To connect');
    $sql = "insert into images (id,image) values(?,?)";
	//echo $id;
    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "ss",$id,$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $msg = 'Image Successfully UPloaded';
    }else{
        $msg = 'Error uploading image';
    }
    mysqli_close($con);
}*/
?>
<form action="" method="post" enctype="multipart/form-data">
	<input type="number" id="ids"  name="ids"> 
    <input type="file" name="image" id="image" />
    <input type="submit" name="insert" id="insert" value="Insert" /> 
</form>

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