<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
  <link rel="stylesheet" href="css/style.css">
  
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Login page</title>
 <style>
 body {
       background-color:#D7EEF9;
        
    }
    
    .main {
        background-color: #FFFFFF;
        width: 400px;
        height: 400px;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
		font-family:sans-serif;
    }
    
    .sign {
        padding-top: 40px;
        
        color:blue;
        font-weight: bold;
        font-size: 23px;
		font-family:sans-serif;
    }
    
    .un {
    width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
	font-family:times new roman;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family:sans-serif;
    }
    
    form.form1 {
        padding-top: 0px;
		font-family:sans-serif;
    }
    
    .pass {
            width: 76%;
    color: rgb(38, 50, 56);
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 1px;
	font-family:times new roman;
    background: rgba(136, 126, 126, 0.04);
    padding: 10px 20px;
    border: none;
    border-radius: 20px;
    outline: none;
    box-sizing: border-box;
    border: 2px solid rgba(0, 0, 0, 0.02);
    margin-bottom: 50px;
    margin-left: 46px;
    text-align: center;
    margin-bottom: 27px;
    font-family:sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        font-family:sans-serif;
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
         background: linear-gradient(to right, blue, #95C7E6);
        border: 0;
        padding-left: 40px;
        padding-right: 40px;
        padding-bottom: 10px;
        padding-top: 10px;
       font-family:sans-serif;
        margin-left: 35%;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        padding-top: 15px;
		font-family:sans-serif;
    }
	.center{
	display:block;
	margin-left:auto;
	margin-right:auto;
	font-family:sans-serif;
	}
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E1BEE7;
        text-decoration: none
		font-family:sans-serif;
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
			font-family:sans-serif;
        }
	
        
 </style>
</head>

<body>
<img src="sitlogo.png" class="center" alt="noimage" >
<h1 align="center" style="background-color:blue;height:60px;font-size:50px;color:white;font-family:sans-serif;">SIDDAGANGA INSTITUTE OF TECHNOLOGY</h1>
  <div class="main">
  
 
  <form class="form1" action="proctor_entry_action.php?proctor_name=<?php  $proctor_name=$_GET['usn']; echo $proctor_name?>"onsubmit="return validation()" method="POST">
    <p class="sign" align="center">Student details</p>

      <input class="un " type="text"  placeholder="Name" id="userid"  name="userid">
      <input class="pass" type="text"  placeholder="USN" id="usn" name="usn">
     <input type="submit" class="submit" id="btn" value="submit" placeholder="Login">
    </form';

          
                
    </div>
	<script>
	function validation
	{
		var id=document.f1.userid.value;  
                var ps=document.f1.usn.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
     
</body>


</html>
