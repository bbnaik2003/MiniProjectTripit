<?php
$connect = mysqli_connect("localhost","root","","registration");
if(isset($_POST['register'])){
    
    $pname = $_POST['pname'];
    $ppass = $_POST['ppass'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    
    $gender = $_POST['gender'];
   

    $query = "INSERT INTO users(pname,ppass,email,phoneno,gender) VALUES('$pname','$ppass','$email','$number','$gender')";

    $result = mysqli_query($connect,$query);

    if($result){
        echo "registered";

    }else{
        echo "not registered";
    }

}
?>