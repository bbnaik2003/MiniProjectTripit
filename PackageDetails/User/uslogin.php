
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
            margin-bottom:30%;
        }
        .button{
            font-size:30px;
            border-radius:4px;
            background-color:blue;
           text-decoration:none;
            
             padding:10px;
             color:white;
             font-family:cambria;
        }
    </style>

   
</head>

<body>
    <div class="container">
<?php
$query='select * from  users where pname=$pname and ppass=$ppass';

if(isset($_POST['pername']) && !empty($_POST['pername']) && isset($_POST['perpass']) && !empty($_POST['perpass']) ){

$pername=$_POST['pername'];
$perpass=$_POST['perpass'];

 
			if(($pername==$query) && ($perpass==$query) ){
                echo '<br> LOGIN SUCCESSFUL';
                echo '<br> <a href="../AdminLogin.html" class="button">Please Click Here</a>';
                                
                             

				}else{

							echo '<br> LOGIN UNSUCCESSFUL';
							}
	}else{
			echo '<br>Cannot be left empty!';
			}
            echo "<br>"
            
?>
</div>
 
</body>

</html>