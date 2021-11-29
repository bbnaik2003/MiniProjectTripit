<?php      
    include('config2.php'); 
    $pin=$_POST['pin']; 
    $uname = $_POST['uname'];  
    $pass = $_POST['pass'];  
      
        //to prevent from mysqli injection  
       $pin= $_POST('pin');
       
        $uname = stripcslashes($uname);  
        $pass = stripcslashes($pass);  
        $uname = mysqli_real_escape_string($mysqli, $uname);  
        $pass = mysqli_real_escape_string($mysqli, $pass);  
      
        $sql = "select *from bookticket where uname = '$uname' and pass = '$pass'";  
        $result = mysqli_query($mysqli, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  