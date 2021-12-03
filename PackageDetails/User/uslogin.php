
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
 

 if(isset($_POST['pername']) && !empty($_POST['pername']) && isset($_POST['perpass']) && !empty($_POST['perpass']) ){

    $pername=$_POST['pername'];
    $perpass=$_POST['perpass'];
    

 }
 

if(isset($_POST['pname']) && !empty($_POST['pname']) && isset($_POST['ppass']) && !empty($_POST['ppass']) ){

$pname=$_POST['pname'];
$ppass=$_POST['ppass'];

 
			if(($pname==$pername) && ($ppass==$perpass) ){
                echo '<br> LOGIN SUCCESSFUL';
                echo '<br> <a href="userloginhomepage.html" class="button">Please Click Here</a>';
                                
                             

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