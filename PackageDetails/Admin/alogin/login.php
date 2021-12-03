 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>

        .container{
            color:red;
            font-size:60px;
            text-align:center;
            font-weight:bolder;
            margin-top:40px;
        }
        .ad{
            font-size:25px;
            border-radius:4px;
            background-color:blue;
             margin-left:40%;
             margin-top:10%;
             padding:10px;
             color:white;
             font-family:cambria;
        }
    </style>

   
</head>

<body>
    <div class="container">
<?php
 $usr="adima";
 $pwd="1513";

if(isset($_POST['uname']) && !empty($_POST['uname']) && isset($_POST['pass']) && !empty($_POST['pass']) ){

$uname=$_POST['uname'];
$pass=$_POST['pass'];

 
			if(($uname==$usr) && ($pass==$pwd) ){
                echo 'LOGIN SUCCESSFUL';
                echo ' <a href="../AdminLogin.html">Please Click Here</a>';
                                
                             

				}else{

							echo '<br> LOGIN UNSUCCESSFUL';
							}
	}else{
			echo "<br>Cannot be left empty!";
			}
            echo "<br>"
            
?>
</div>
 
</body>

</html>