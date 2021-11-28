<?php
include_once('config3.php');
include "table4.php";
?>


<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
 

<?php
if(isset($_POST['register'])){
      $pin=$_POST['pin'];
      $uname=$_POST['uname'];
      $email=$_POST['email'];
      $phoneno=$_POST['phoneno'];
      $passwd=$_POST['passwd'];
      $surname=$_POST['surname'];
      $gender=$_POST['gender'];
    
     
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into users(pin,uname,email,phoneno,passwd,surname,gender) VALUES('$pin','$uname','$email','$phoneno','$passwd','$surname','$gender')");
     
}

?>
</body>
</html>