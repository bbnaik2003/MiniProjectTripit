<?php
include_once('adconfig.php');
?>


<!DOCTYPE html>
<html>
<head>
    
    <title> </title>
    
</head>
<body>
   

<?php
if(isset($_POST['submit'])){
     $pin=$_POST['pin'];
     $uname=$_POST['uname'];
      $pass=$_POST['pass'];
     if($mysqli=mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName)){
echo "connection created";
     }
     else{
         echo "problem";
     }
     echo "<br>";
    $result=mysqli_query($mysqli,"Insert into adlog VALUES('$pin','$uname','$pass')");
    if($result){
        echo "Data inserted";
    }
    else{
        echo "Failed";
    }
}

?>
</body>
</html>